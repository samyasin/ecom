<?php
include_once '../includes/connection.php';
// action will work after click on create
if(isset($_POST['submit'])){
    // fetch data from Form
    if($_FILES['file']['error']==0){
        $image_name=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $path="../uploads/";
        move_uploaded_file($tmp_name, $path.$image_name);
        
    }
    $product_name     = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $desc    = $_POST['product_desc'];
    $cat_id=$_POST['cat_id'];
    $image    = $image_name;
    
    
    // perform query 
    $query = "insert into product(name,price,product_image,cat_id,product_desc) 
              values('$product_name','$product_price','$image',$cat_id,'$desc')";
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
            <h1 class="page-header">Manage Product</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">Create Product</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" name="product_name" placeholder="Product name" type="text" required="required">
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input class="form-control" name="product_price" placeholder="Price" type="text">
                            </div>
                            <div class="form-group">
                                <label>Decription</label>
                                <select name="cat_id" class="form-control">
                                    <?php
                                    $query="select * from category";
                                    $result= mysqli_query($link, $query);
                                    while($row= mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                        
                                    }
                                    ?>
                                </select>
                        </div>

                            
                            <div class="form-group">
                                <label>File</label>
                                <input class="form-control" name="file"  type="file">
                            </div>

                            
                             <div class="form-group">
                                <label>Product Desc</label>
                                <input class="form-control" name="product_desc" placeholder="Description" type="text" required="required">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </form>


                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">View Product</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>price</th>
                                <th>Image</th>
                                <th>Desc</th>
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
                                echo "<td><a href='edit_admin.php?admin_id={$row['admin_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_admin.php?admin_id={$row['admin_id']}'>Delete</a></td>";
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
