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
            // $users = User::find_all_users();
            // foreach($users as $user) {
            //     echo $user->id . "<br>";
            // }
            // $found_user = User::find_user_by_id(1);
            // echo $found_user->username;
            $user = new User();
            $user->username = "Example_username"; 
            $user->password = "Example_password"; 
            $user->first_name = "Example_firstname"; 
            $user->last_name = "Example_lastname"; 
            $user->create();
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