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
		                                     
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Product</h4>
					<!-- /.box-title -->
					<div class="card-content">

						<?php

include "db.php";

$result = mysqli_query($con, "SELECT * FROM products ORDER BY id DESC LIMIT 1");

while ($row = mysqli_fetch_array($result)) {
    $idcount = $row['id'] + 1;
    
    //echo $idcount;
}
?>

						<form class="form-horizontal" action="productupload.php" method="post" enctype="multipart/form-data" >

 


							<input type="hidden" name="id" value="<?php echo $idcount;?>">

							<input type="hidden" name="status" value="1">

							<div class="form-group">
								<label for="one" class="col-sm-3 control-label">Product Name</label>
								<div class="col-sm-3">
									<input type="text" name="name" class="form-control" id="one" placeholder="Enter Product Name..." >
								</div>


								<label for="two" class="col-sm-3 control-label">Product Code</label>
								<div class="col-sm-3">
									<input type="text" name="productcode" class="form-control" id="two" placeholder="Enter Product Code..." >
								</div>


							</div>




							<div class="form-group">
								<label for="three" class="col-sm-3 control-label">Select Category</label>
								<div class="col-sm-3"> 

									<select name="maincat" id="three" class="form-control" >
								  <option>Select Main Category</option>
								   <?php

									include"db.php";

									$result = mysqli_query($con,"SELECT * FROM menu where parent_id = 0 AND status = '1'");
									while($row = mysqli_fetch_array($result))
									{
									echo '<option value="' .$row['menu_id'].'">' .$row['menu_name'].'</option>';
									} 
									?>

							</select>

									
							
								</div> 







								<label for="r" class="col-sm-3 control-label">Stock</label>
								<div class="col-sm-3">
									<input type="number" name="stock" class="form-control" id="r" placeholder="Enter Current Stock" >
								</div>



								</div>



							<div class="form-group">
								<label for="twenty" class="col-sm-3 control-label">Select Sub Category</label>
								<div class="col-sm-3"> 

									<select name="categoryid" id="twenty" class="form-control" >
									  <option>Select Sub Category</option>
									   <?php

											include"db.php";

											$result = mysqli_query($con,"SELECT * FROM menu where parent_id != 0 AND status = '1'");
											while($row = mysqli_fetch_array($result))
											{
											echo '<option value="' .$row['menu_id'].'">' .$row['menu_name'].'</option>';
											} 
											?>

									</select>

									
							
								</div>

								</div>





								<div class="form-group">
								<label for="four" class="col-sm-3 control-label">Product Main Image</label>
								<div class="col-sm-3">
									<input type="file" id="four" name="image" >
									<p class="help-block">Image should be 1000 x 1000 in pixels</p>
								</div>

									<label for="five" class="col-sm-3 control-label">Featured / Latest / Best Product</label> 
									 <div class="col-sm-3">
										<select name="newold" id="five" class="form-control">
											<option value="">Select Type of Product </option>
											<option value="Featured">Featured Product</option>
											<option value="Latest">Latest Product</option>
											<option value="Best">Best Product</option>
										</select>
									</div> 
									


								</div>

							

						
							<div class="form-group">
								<label for="ninty" class="col-sm-3 control-label">Dimension Length, Width, Height</label>
								<div class="col-sm-3">
									<input type="text" name="length" class="form-control" id="ninty" placeholder="Enter Product length...">
								</div>
								<div class="col-sm-3">
									<input type="text" name="width" class="form-control" id="ninty" placeholder="Enter Product width...">
								</div>
								<div class="col-sm-3">
									<input type="text" name="height" class="form-control" id="ninty" placeholder="Enter Product height...">
								</div>
							</div>
							


							<div class="form-group">
								<label for="ninty" class="col-sm-3 control-label">Product Weight</label>
								<div class="col-sm-3">
									<input type="text" name="weight" class="form-control" id="ninty" placeholder="Enter Product Weight...">
								</div>
							</div>
							
							
							
							
						
 

							<div class="form-group">
								<label for="seven" class="col-sm-3 control-label">Multiple Images Upload</label>
								<div class="col-sm-3">
									
								 <input class="fileinput btn-add" type="file" id="seven" name="files[]" multiple > <p class="help-block">Image should be 800 x 800 in pixels</p>
								
								</div> 



							</div>
 
  
  						
 

								<div class="form-group">
								 <label for="eight" class="col-sm-3 control-label">Product Discount ( % )</label>
								<div class="col-sm-3">
									
									<input type="number" name="discount" class="form-control" id="eight" placeholder="Enter Product Discount...">
								
								</div>

								<label for="nine" class="col-sm-3 control-label">Star Rating [1 - 5] </label>
								<div class="col-sm-3">
									
									<input type="number" name="star"  class="form-control" id="nine" placeholder="Enter No of Stars...">
								
								</div>

							</div>
							<div class="form-group">
								<label for="hund" class="col-sm-3 control-label">GST of Product ( % )</label>
								<div class="col-sm-3">
									<input type="number" name="gst" class="form-control" id="hund" placeholder="Enter Product GST %...">
								</div>

									<label for="nintyone" class="col-sm-3 control-label">Product HSN Code</label>
								<div class="col-sm-3">
									<input type="text" name="hsncode" class="form-control" id="nintyone" placeholder="Enter Product HSN Code...">
								</div>


							</div>









 						<div class="form-group">
								<label for="fifteen" class="col-sm-3 control-label">Meta Title</label>
								<div class="col-sm-3">
									<input type="text" name="metatitle" class="form-control" id="fifteen" placeholder="Enter Meta Title...">
								</div>


								<label for="sixteen" class="col-sm-3 control-label">Meta Tag</label>
								<div class="col-sm-3">
									<input type="text" name="metatag" class="form-control" id="sixteen" placeholder="Enter Meta Tag...">
								</div>


							</div>


							<div class="form-group">
								<label for="seventeen" class="col-sm-3 control-label">Meta Description</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="metadescription" id="seventeen" placeholder="Write your Meta Description"></textarea>
								</div>
							</div>



							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Description" ></textarea>  

									    <script>
									        CKEDITOR.replace('text');
									    </script>

								</div>
							</div>


							<div class="form-group">
								<label for="text2" class="col-sm-3 control-label">Long Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="descr" id="text2" placeholder="Write your Product Description"></textarea>  

									    <script>
									        CKEDITOR.replace('text2');
									    </script>

								</div>
							</div>





		<div class="form-group col-md-12">
          <div  id="companytelephonetable" width="100%">
            <div id='companytelephone0'>
            	

              <div class="form-group col-md-2">
                <label for="type" class="control-label mb-10">Qty
                </label>
              
                <input type="text" name="type[]" class="form-control" id="type" placeholder="Qty" tabindex="0" >
              </div>

                 <div class="form-group col-md-1">
                 </div>

              <div class="form-group col-md-2">
                <label for="details" class="control-label mb-10">Unit
                </label>

                 <input type="text" name="units[]" class="form-control" id="units" placeholder="units" tabindex="0" >
                </select>

              </div>
                 <div class="form-group col-md-1">
                 </div>
              <div class="form-group col-md-2">
                <label for="display" class="control-label mb-10">MRP
                </label>
                 <input type="text" name="mrp[]" class="form-control" id="mrp" placeholder="mrp" tabindex="0" >
              </div>
                 <div class="form-group col-md-1">
                 </div>
               <div class="form-group col-md-2">
                <label for="display" class="control-label mb-10">Price
                </label>
                 <input type="text" name="price[]" class="form-control" id="price" placeholder="price" tabindex="0" >
              </div>

                 <div class="form-group col-md-1">
                 </div>
              <div class="form-group  col-md-2 "> 
                <label for="inputEmail" class="control-label mb-10"> <br><br>  </label>   
                <a tabindex="0" style="margin-right: 10px;" id="company_telephone_type_add"   class="btn btn-default btn-icon-anim btn-circle"><i  class="fa fa-plus" aria-hidden="true"></i></a> 
                <a  id='company_telephone_type_delete' class="btn btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash" aria-hidden="true"></i></a> 
              </div>
            </div>
            <div id='companytelephone1'></div>
            <input type="text" name="company_telephone_type" id="company_telephone_type" value="1" class="hiddentextbox" />
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>                          
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>


                           <script type="text/javascript"> 
          $(document).ready(function(){
            var i=1;
           $("#company_telephone_type_add").click(function(){
          
            $('#companytelephone'+i).html("<div class='form-group col-md-12'></div>  <div class=' col-md-2 form-group'>   <input tabindex='24' type='text' class='form-control' name='type[]' placeholder='Qty' > </div> <div class='form-group col-md-1'></div> <div class=' col-md-2 form-group'><input tabindex='24' type='text' class='form-control' name='units[]' placeholder='units' ></div> <div class='form-group col-md-1'></div>  <div class=' col-md-2  form-group' >   <input tabindex='24' type='text' class='form-control' name='mrp[]' placeholder='mrp' ></div> <div class='form-group col-md-1'></div>  <div class=' col-md-2  form-group' >   <input tabindex='24' type='text' class='form-control' name='price[]' placeholder='price' ></div>     ");
          
            $('#companytelephonetable').append('<div id="companytelephone'+(i+1)+'"></div>');
            i++; 
            $('#company_telephone_type').val(i);
          });
           $("#company_telephone_type_delete").click(function(){
               if(i>1){
               $("#companytelephone"+(i-1)).html('');
               i--;
               $('#company_telephone_type').val(i);
               }
           });
          
          
            
          });
          
        </script> 








					  </div>

							<div class="form-group margin-bottom-0">
									<label for="" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">  
										<input type="submit" name="submit" value="Submit" class="btn btn-dark btn-sm waves-effect waves-light">
									</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>


	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	
<?php include "allscripts.php"; ?>
