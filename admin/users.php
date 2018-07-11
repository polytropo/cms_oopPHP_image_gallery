<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {
    redirect("login.php");
} ?>

<?php  
$users = User::find_all();
?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php include("includes/top_nav.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php") ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                        </h1>
                        <a href="add_user.php" class="btn btn-primary">Add user</a>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Username</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($users as $user) { 
                                            echo "
                                            <tr>
                                                <td>{$user->id}</td>
                                                <td>
                                                    <img src='{$user->image_path_placeholder()}' alt='' class='admin-user-thumbnail user_image'>
                                                </td>
                                                
                                                <td>{$user->username}
                                                    <div class='action_links'>
                                                        <a href='delete_user.php?id={$user->id}' >Delete</a>
                                                        <a href='edit_user.php?id={$user->id}' >Edit</a>
                                                        
                                                    </div>
                                                </td>
                                                <td>{$user->first_name}</td>
                                                <td>{$user->last_name}</td>
                                            </tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>  <!-- End of table -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
  <?php include("includes/footer.php"); ?>