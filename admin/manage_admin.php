<?php
include_once '../includes/connection.php';
// action will work after click on create
if(isset($_POST['submit'])){
    // fetch data from Form
    $admin_name     = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    $admin_email    = $_POST['admin_email'];
    
    // perform query 
    $query = "insert into admin(admin_name,admin_password,email) 
              values('$admin_name','$admin_password','$admin_email')";
    mysqli_query($link, $query);
    
}

?>
<?php include_once '../includes/admin_header.php'; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage Admin</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Admin</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">Create Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Admin Name</label>
                                <input class="form-control" name="admin_name" placeholder="Admin name" type="text" required="required">
                            </div>
                            <div class="form-group">
                                <label>Admin Password</label>
                                <input class="form-control" name="admin_password" placeholder="Password" type="password">
                            </div>
                            <div class="form-group">
                                <label>Admin Email</label>
                                <input class="form-control" name="admin_email" placeholder="Email" type="email">
                            </div>                            
                            <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </form>


                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">View Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $query  = "select * from admin";
                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>{$row['admin_id']}</td>";
                                echo "<td>{$row['admin_name']}</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>Edit</td>";
                                echo "<td>Delete</td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </table>

                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <?php include_once '../includes/admin_footer.php'; ?>
