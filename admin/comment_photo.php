<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {
    redirect("login.php");
} ?>

<?php  
if(empty($_GET['id'])) {
    redirect("photos.php");
}

$comments = Comment::find_the_comments($_GET['id']);
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
                    Comments for photo<?php echo $_GET['id'] ?>
                </h1>
                
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Author</th>
                                <th>Body</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($comments as $comment) { 
                                    echo "
                                    <tr>
                                        <td>{$comment->id}</td>
                                        
                                        
                                        <td>{$comment->author}
                                            <div class='action_links'>
                                                <a href='delete_comment_photo.php?id={$comment->id}'>Delete</a>
                                                <a href='edit_comment.php?id={$comment->id}'>Edit</a>
                                            </div>
                                        </td>
                                        <td>{$comment->body}</td>
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