<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin Page
                <small>Subheading</small>
            </h1>
            <?php 
            
            // $result_set = User::find_all_users();
           
            // while($row = mysqli_fetch_array($result_set)) {
            //     echo "<p>{$row['username']}</p>";
            // }
            
            // $found_user = User::find_user_by_id(1);
            // echo $found_user['username'];
            // $user = User::instantation($found_user);
            // Displays all users usernames
            // $users = User::find_all();
            // foreach($users as $user) {
            //     echo $user->username . "<br>";
            // }
            // $found_user = User::find_user_by_id(1);
            // echo $found_user->username;
            // Crerate new user when opening admin.php page
            // $user = new User();
            // $user->username = "Example_username5"; 
            // $user->password = "Example_password5"; 
            // $user->first_name = "Example_firstname5"; 
            // $user->last_name = "Example_lastname1"; 
            // $user->save();
            // Update user
            // $user = User::find_user_by_id(9);
            // $user->first_name = "firstname edited";
            // $user->update();
            // Delete user
            // $user = User::find_by_id(19);
            // $user->delete();
            // $user = User::find_user_by_id(2);
            // $user->last_name = "updated second lastname";
            // $user->save();
            // $user = new User();
            // $user->username = "primoz2second";
            // $user->save();
            // $photos = Photo::find_all();
            // foreach($photos as $photo) {
            //     echo $photo->description;
            // }
            echo INCLUDES_PATH;
            echo "<br>";
            echo SITE_ROOT;
            // $photo = new Photo();
            // $photo->title = "image2"; 
            // $photo->description = "description of second image"; 
            // $photo->filename = "nameofimage2.jpg"; 
            // $photo->type = "image"; 
            // $photo->size = "233212"; 
            // $photo->create();
            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->