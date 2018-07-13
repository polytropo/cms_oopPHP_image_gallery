<?php 

class Db_object {
	protected static $db_table = "users";
	public $errors = array();
	public $upload_errors_array = array (
		UPLOAD_ERR_OK =>"There is no error.",
		UPLOAD_ERR_INI_SIZE =>"The uploaded file exceeds the upload_max_filesize directive.",
		UPLOAD_ERR_FORM_SIZE =>"The uploaded file exceeds the MAX_FILE_SIZE directive.",
		UPLOAD_ERR_PARTIAL =>"The uploaded file was only partially uploaded.",
		UPLOAD_ERR_NO_FILE =>"No file was uploaded.",
		UPLOAD_ERR_NO_TMP_DIR =>"Missing a temporary folder.",   
		UPLOAD_ERR_CANT_WRITE =>"Failed to write file to disk.",
		UPLOAD_ERR_EXTENSION =>"A PHP extension stopped the file upload."
	);

	public function set_file($file) {
		if(empty($file) || !$file || !is_array($file)) {
			$this->errors[] = "There was no file uploaded here";
			return false;
		} elseif($file['error'] !=0) {
			$this->error[] = $this->upload_errors_array[$file['error']];
			return false;
		} else {
			$this->user_image = basename($file['name']);
			$this->tmp_path = $file['tmp_name'];
			$this->type = $file['type'];
			$this->size = $file['size'];
		}
	}

	public static function find_all() {
		$result_set = static::find_by_query("SELECT * FROM " . static::$db_table . " ");
		return $result_set;
	}

	public static function find_by_id($id) {
		$the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE id = $id LIMIT 1");
		// if(!empty($the_result_array)) {
		// 	$first_item = array_shift($the_result_array);
		// 	return $first_item;
		// } else {
		// 	return false;
		// }
		// Shorter way of doing code above
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
		
	}

	public static function find_by_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		$the_object_array = array();

		while($row = mysqli_fetch_array($result_set)) {
			$the_object_array[] = static::instantation($row);
		}
		return $the_object_array;
	}

	// 	private function has_the_attribute($the_attribute) {
	// 	$object_properties = get_object_vars($this);
	// 	return array_key_exists($the_attribute, $object_properties);
	// }

	protected function has_the_attribute($the_attribute) {
		$object_properties = get_object_vars($this);
		return array_key_exists($the_attribute, $object_properties);
	}

	protected function properties() {
		// return get_object_vars($this);
		$properties = array();
		foreach (static::$db_table_fields as $db_field) {
			if(property_exists($this, $db_field)) {
				$properties[$db_field] = $this->$db_field;
			}
		}
		return $properties;
	}

	public static function instantation($the_record) {
		$calling_class = get_called_class();
		$the_object = new $calling_class;
		//Watch lecture 48 where is explained
		// $the_object->id = $the_record['id'];
		// $the_object->username = $the_record['username'];
		// $the_object->first_name = $the_record['first_name'];
		// $the_object->last_name = $the_record['last_name'];
		// $the_object->password = $the_record['password'];
		foreach ($the_record as $the_attribute => $value) {
			if($the_object->has_the_attribute($the_attribute)) {
				$the_object->$the_attribute = $value;
			}
		}
		return $the_object;
	}

	

	public function create() {
		global $database;
		$properties = $this->clean_properties();
		$sql = "INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties)) .") ";
		$sql .= "VALUES ('". implode("','", array_values($properties)) ."') ";
		

		if($database->query($sql)) {
			$this->id = $database->the_insert_id();
			return true;
		} else {
			return false;
		}
		
	} // End of Create method

	public function update() {
		global $database;
		$properties = $this->clean_properties();
		$properties_pairs = array();

		foreach ($properties as $key => $value) {
			$properties_pairs[] = "{$key}= '{$value}'";
		}

		$sql = "UPDATE " . static::$db_table . " SET ";
		$sql .= implode(", ", $properties_pairs);
		$sql .= " WHERE id = " . $database->escape_string($this->id);

		$database->query($sql);

		return (mysqli_affected_rows($database->connection) == 1) ? true : false;
	} //Ened of Update method

	public function save() {
		return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function delete() {
		global $database;
		$sql = "DELETE FROM " . static::$db_table . " WHERE id = " . $database->escape_string($this->id) . " LIMIT 1";
		$database->query($sql);
		return (mysqli_affected_rows($database->connection) == 1) ? true : false;
	} // End of delete method

	protected function clean_properties() {
		global $database;
		$clean_properties = array();
		foreach ($this->properties() as $key => $value) {
			$clean_properties[$key] = $database->escape_string($value);
		}
		return $clean_properties;
	}

	public static function count_all() {
		global $database;
		$sql = "SELECT COUNT(*) FROM " . static::$db_table;
		$result_set = $database->query($sql);
		$row = mysqli_fetch_array($result_set);
		return array_shift($row);
	}

}


?>