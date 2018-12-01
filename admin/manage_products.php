<?php
include_once '../includes/connection.php';
// action will work after click on create
if(isset($_POST['submit'])){
    if($_FILES['product_image']['error'] == 0){
        $image_name = $_FILES['product_image']['name'];
        $tmp_name   = $_FILES['product_image']['tmp_name'];
        $path       = "../uploads/";
        move_uploaded_file($tmp_name, $path.$image_name);        
    }
    
    // fetch data from Form
    $product_name     = $_POST['product_name'];
    $product_price    = $_POST['product_price'];
    $product_desc     = $_POST['product_desc'];
    $cat_id           = $_POST['cat_id'];
    $product_image    = $image_name; 
    
    // perform query 
    $query = "insert into products(product_name,product_price,product_desc,cat_id,product_image) 
              values('$product_name','$product_price','$product_desc',$cat_id,'$product_image')";
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
            <li class="active">Manage Products</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Products</h1>
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
                                <input class="form-control" name="product_price" placeholder="Price" type="password">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="product_desc" placeholder="Description" type="email">
                            </div>                            
                            <div class="form-group">
                                <label>Category</label>
                                <select name="cat_id" class="form-control">
                                    <?php
                                    $query  = "select * from category";
                                    $result = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                    }
                                    ?>
                                    
                                </select>
                            </div>                            
                            <div class="form-group">
                                <input class="form-control" name="product_image" type="file">
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
