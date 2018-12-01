<?php
include_once '../includes/connection.php';
// action will work after click on create




////////////////////////////////////////////////
$query="select * from category  where cat_id={$_GET['cat_id']}";
$result= mysqli_query($link, $query);
$userset= mysqli_fetch_assoc($result);




//////////////////////////////////////////////////
if(isset($_POST['submit'])){
    // fetch data from Form
    $cat_name     = $_POST['cat_name'];
    //$admin_password = $_POST['admin_password'];
    //$admin_email    = $_POST['admin_email'];
    ////////////////////////////////////////////////////////
    //
    ///////////////////////////////////////////////////////
    // perform query 
    $query = "update category set cat_name='$cat_name'
               
        where cat_id={$_GET['cat_id']}";
        
              
    mysqli_query($link, $query);
    header("location:manage_cat.php");
}

?>
<?php include_once '../includes/admin_header.php'; ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Edit Category</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Cat</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">Edit Cat</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Cat Name</label>
                                <input class="form-control" name="cat_name" placeholder="Cat name" type="text" 
                                       value=<?php echo $userset['cat_name'];?> required="required">
                            </div>
                            <div class="form-group">
                                
                                
                                
                            </div>
                            <div class="form-group">
                                
                                
                                
                            </div>                            
                            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    </form>


                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
       
    <?php include_once '../includes/admin_footer.php'; ?>
