<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin Page
                <small>Subheading</small>
            </h1>
            <?php 
            $sql = "SELECT * FROM users WHERE id = 1";
            $result = $database->query($sql);
            $user_found = mysqli_fetch_array($result);
            echo $user_found['username'];
            // foreach($user_found as $user) {
            //     $user1 = $user['username'];
            //     echo $user1;
            // }
            // $users = $database->query("SELECT * FROM users");
            // $users = $users->mysqli_fetch_assoc();
            // foreach($users as $user) {
            //     echo $user['username'];
            // }

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