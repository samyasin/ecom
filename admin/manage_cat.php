<?php
include_once '../includes/connection.php';
// action will work after click on create
if(isset($_POST['submit'])){
    // fetch data from Form
    $cat_name     = $_POST['cat_name'];
   // $admin_password = $_POST['admin_password'];
    //$admin_email    = $_POST['admin_email'];
    
    // perform query 
    $query = "insert into category(cat_name) 
              values('$cat_name')";
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
            <li class="active">Category</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Category</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="cat_name" placeholder="Cat name" type="text" required="required">
                            </div>
                            <div class="form-group">
                                <label></label>
                                
                            </div>
                            <div class="form-group">
                                
                                
                            </div>                            
                            <button type="submit" name="submit" class="btn btn-primary">Create</button>
                    </form>


                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12">				
            <div class="panel panel-default">
                <div class="panel-heading">View Category</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="checkbox.php" method="post">
                        <table class="table table-hover">
                            <tr>
                                <th>CheckBox</th>
                                <th>ID</th>
                                <th>Name</th>
                                
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $query  = "select * from category";
                            $result = mysqli_query($link, $query);
                            while($row    = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td><input type='checkbox' name='former[]'  value='{$row['cat_id']}' /></td>";
                                echo "<td>{$row['cat_id']}</td>";
                                echo "<td>{$row['cat_name']}</td>";
                                
                                echo "<td><a href='edit_cat.php?cat_id={$row['cat_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_cat.php?cat_id={$row['cat_id']}'>Delete</a></td>";
                                echo "</tr>";
                            }
                            
                            ?>
                        </table>
                            <input type="submit" name="submit3" value="check_box"/>
                    </form>

                        
                        

                        
                        
                        
                        












    
 
 
      
      <script type="text/javascript">
       
            function getValue(){
               var retVal = prompt("Enter your Number : ", "1");
               //document.write("You have entered : " + retVal);
               document.getElementById("text1").value=retVal;
        return retVal;
            }
       
      </script>
      
 
   
 
      <p>Click the following button to see the result: </p>
      
      <form action="number.php" method="post">
          <input type="button" name="buton1"  value="message" onclick="getValue();" />
          <input type="text" id="text1" name="text1">
          <input type="submit" value="submit">
          
      </form>
      
 

    





<script>
</script>
<br>

<br>



                        
                        
                        
                        

                        
                        
                        
                        
                        
                        
                    </div>

                </div>
            </div>
        </div><!-- /.panel-->
    </div><!-- /.col-->
    <?php include_once '../includes/admin_footer.php'; ?>
