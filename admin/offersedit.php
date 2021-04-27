<?php
session_start();
if(!isset($_SESSION["user"]["type"])){
header("Location: login.php");
exit(); }
?>

    <?php include "allcss.php" ?>

        <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>

        <body>

            <?php include "header.php" ?>

                <div id="wrapper">
                    <div class="main-content">



<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
  
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT link,img,size FROM offers WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: banner.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
        $link = $_POST['link'];
        
$size = $_POST['size'];
        

        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = '../images/offers/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   
                        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
$stmt = $DB_con->prepare('UPDATE offers SET link=:link,  img=:img,size=:size
    WHERE id=:id');
            $stmt->bindParam(':link',$link);    
            $stmt->bindParam(':img',$img);
               
            $stmt->bindParam(':size',$size);
 

            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='offers.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>



                                <div class="row small-spacing">
                                    <div class="col-xs-12">
                                        <div class="box-content">
                                            <h4 class="box-title">Offers 1</h4>

                                            <!-- /.dropdown js__dropdown -->
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                               
                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Link</label>
                                <div class="col-sm-6">
                                    <input type="text" name="link" class="form-control" id="" placeholder="Enter Link" value="<?php echo $link; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Image </label>
                                <div class="col-sm-6">
                                

                                      <img src="../images/offers/<?php echo $img; ?>" height="70" width="150" />

  <input type="file" name="user_image" accept="image/*" />

                                <p class="help-block">Image should be <?php echo $size; ?> in pixels</p>
                                </div>

                                </div>


                                                <div class="form-group margin-bottom-0">

                                                    <br>
                                                    <input class="btn btn-danger btn-sm waves-effect waves-light" type="submit" name="btn_save_updates" value="Update" />

                                                </div>

                                            </form>
                                        </div>
                                        <!-- /.box-content -->
                                    </div>
                                    <!-- /.col-xs-12 -->

                                </div> 

















                    </div>
                    <!-- /.main-content -->
                </div>
                <!--/#wrapper -->

                <?php include "allscripts.php"; ?>