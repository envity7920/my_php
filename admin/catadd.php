﻿<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/category.php';  ?>
<?php
    // gọi class category
    $cat = new category(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $catName = $_POST['catName'];
        $insertCat = $cat -> insert_category($catName);
    }
  ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>      
               <div class="block copyblock"> 
                <?php 
                    if(isset($insertCat)){
                        echo $insertCat;
                    }
                 ?>
                 <form action="catadd.php" method="post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <input type="text" name="catName" placeholder="Enter category name" class="medium" />
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>