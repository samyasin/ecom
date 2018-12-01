<?php
include_once '../includes/connection.php';
// action will work after click on create




////////////////////////////////////////////////
$query="select * from admin  where admin_id={$_GET['admin_id']}";
$result= mysqli_query($link, $query);
$userset= mysqli_fetch_assoc($result);




//////////////////////////////////////////////////
if(isset($_POST['submit'])){
    // fetch data from Form
    $admin_name     = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    $admin_email    = $_POST['admin_email'];
    ////////////////////////////////////////////////////////
    //
    ///////////////////////////////////////////////////////
    // perform query 
    $query = "update admin set admin_name='$admin_name'
        ,admin_password='$admin_password'
        ,email='$admin_email'
        where admin_id={$_GET['admin_id']}";
        
              
    mysqli_query($link, $query);
    header("location:manage_admin.php");
}

?>
<?php include_once '../includes/admin_header.php'; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Edit Admin</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Admin</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">Edit Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Admin Name</label>
                                <input class="form-control" name="admin_name" placeholder="Admin name" type="text" 
                                       value=<?php echo $userset['admin_name'];?> required="required">
                            </div>
                            <div class="form-group">
                                <label>Admin Password</label>
                                <input class="form-control" name="admin_password" placeholder="Password" type="password"
                                       value=<?php echo $userset['admin_password'];?> >
                            </div>
                            <div class="form-group">
                                <label>Admin Email</label>
                                <input class="form-control" name="admin_email" placeholder="Email" type="email"
                                       value=<?php echo $userset['email'];?>>
                            </div>                            
                            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    </form>


                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
       
    <?php include_once '../includes/admin_footer.php'; ?>
