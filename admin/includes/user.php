<?php 

class User {
	public $id;
	public $username;
	public $first_name;
	public $last_name;
	public $password;

	public static function find_all_users() {
		$result_set = self::find_this_query("SELECT * FROM users");
		return $result_set;
	}

	public static function find_user_by_id($user_id) {
		$the_result_array = self::find_this_query("SELECT * FROM users WHERE id = $user_id LIMIT 1");
		// if(!empty($the_result_array)) {
		// 	$first_item = array_shift($the_result_array);
		// 	return $first_item;
		// } else {
		// 	return false;
		// }
		// Shorter way of doing code above
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
		
	}

	public static function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		$the_object_array = array();

		while($row = mysqli_fetch_array($result_set)) {
			$the_object_array[] = self::instantation($row);
		}
		return $the_object_array;
	}

	public static function verify_user($username, $password) {
		global $database;
		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
		$the_result_array = self::find_this_query($sql);
		return !empty($the_result_array) ? array_shift($the_result_array) : false;

	}

	public static function instantation($the_record) {
		$the_object = new self();
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

	private function has_the_attribute($the_attribute) {
		$object_properties = get_object_vars($this);
		return array_key_exists($the_attribute, $object_properties);
	}
}

	

?>