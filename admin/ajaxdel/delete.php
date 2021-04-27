<?php
//delete.php
$connect = mysqli_connect("localhost","aaplekar_handi","loveyoudad9820102993","aaplekar_handicraft");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM productimages WHERE id = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>