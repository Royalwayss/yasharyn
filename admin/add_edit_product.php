<?php 
   session_start();
   
    ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='products';
      $categories = get_categories($conn); 
      if(isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
        $title = 'Edit Product';
         $sql = "select * from ".$table." where id =".$id; 
         $result = $conn->query($sql);
         $product = $result->fetch_assoc();
		 
		 $product_images = get_product_images($conn,$id); 
		 
		 
		 
		 
		 
      }else{
         $id = '';
         $title = 'Add Product';
      }
      $adminAccess = admin_access($conn,2); 
	  if($adminAccess['edit'] != 1){
	    echo '<script>window.location.href="index.php"; </script>'; die;
      }
      
      ?>
	  <style>
	  .green.btn {
		color: #FFFFFF;
		background-color: #35aa47;
		border-color: "";
      }
	  </style>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
      <?php include('include/header.php'); ?>
      <!-- page content start -->
      <div class="content-wrapper" style="margin-top:10px">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>Products Management</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                     <li class="breadcrumb-item active"><?php echo $title; ?></li>
                  </ol>
               </div>
            </div>
         </div>
         <!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="card card-default">
               <div class="card-header">
                  <h3 class="card-title"><?php echo $title; ?></h3>
                  <div class="card-tools">
                     <button type="button" class="btn btn-tool" data-card-widget="collapse">
                     <i class="fas fa-minus"></i>
                     </button>
                     <button type="button" class="btn btn-tool" data-card-widget="remove">
                     <i class="fas fa-times"></i>
                     </button>
                  </div>
               </div>
               <!-- /.card-header -->
               <div class="card-body">
                  <div class="row">
                     <div class="col-12">
                        <form name="addEditForm" id="addEditForm" action="save-product.php" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="<?php echo $id; ?>">
                           <div class="card-body">
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="category_name">Product Name*</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" <?php if(!empty($id)) { ?> value="<?php echo $product['product_name']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="category_id">  Category*</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                       <option value="" selected="">Select</option>
                                       <?php foreach($categories as $cat) { ?>
									   <option value="<?php echo $cat['id']; ?>" <?php if(!empty($id) && $cat['id'] == $product['category_id']) { echo 'selected'; } ?>><?php echo $cat['category_name']; ?></option>
                                            <?php foreach($cat['sub_categories'] as $sub_cat) { ?>
                                            <option value="<?php echo $sub_cat['id']; ?>" <?php if(!empty($id) && $sub_cat['id'] == $product['category_id']) { echo 'selected'; } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <?php echo $sub_cat['category_name']; ?></option>
                                            <?php foreach($sub_cat['sub_categories2'] as $sub_cat2) { ?>
                                            <option value="<?php echo $sub_cat2['id']; ?>" <?php if(!empty($id) && $sub_cat2['id'] == $product['category_id']) { echo 'selected'; } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - <?php echo $sub_cat2['category_name']; ?></option>
									      <?php }}} ?>
											
                                       
                                    </select>
                                 </div>
                               <!--  <div class="form-group col-md-6">
                                    <label for="category_image">Category Image</label>
                                    <input type="file" class="form-control" id="category_image" name="category_image" accept="image/*">
                                 </div> -->
                                
                                <div class="form-group col-md-6">
                                    <label for="weight">Weight</label>
                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Weight" <?php if(!empty($id)) { ?> value="<?php echo $product['weight']; ?>" <?php } ?>>
                                 </div> 
								 
                                  <div class="form-group col-md-6" >
                                    <label for="ofc">OFC</label>
                                    <input type="text" class="form-control" id="ofc" name="ofc" placeholder="Enter OFC" <?php if(!empty($id)) { ?> value="<?php echo $product['ofc']; ?>" <?php } ?> >
                                 </div> 

                                  <div class="form-group col-md-6" >
                                    <label for="neck">Neck</label>
                                    <input type="text" class="form-control" id="neck" name="neck" placeholder="Enter Neck " <?php if(!empty($id)) { ?> value="<?php echo $product['neck']; ?>" <?php } ?> >
                                 </div> 

                                   <div class="form-group col-md-6">
                                    <label for="product_code">Product Code*</label>
                                    <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code " <?php if(!empty($id)) { ?> value="<?php echo $product['product_code']; ?>" <?php } ?> >
                                 </div> 

                                  <div class="form-group col-md-6">
                                    <label for="moc">MOC</label>
                                    <input type="text" class="form-control" id="moc" name="moc" placeholder="Enter MOC" <?php if(!empty($id)) { ?> value="<?php echo $product['moc']; ?>" <?php } ?> >
                                 </div> 
								 <div class="form-group col-md-6"  style="display:none">
                                    <label for="availability">Availability</label>
                                    <input type="text" class="form-control" id="availability" name="availability" placeholder="Enter Availability" <?php if(!empty($id)) { ?> value="<?php echo $product['availability']; ?>" <?php } ?> >
                                 </div> 
								 
								 <div class="form-group col-md-6" >
                                    <label for="size">Size</label>
                                    <input type="text" class="form-control" id="size" name="size" placeholder="Enter Size" <?php if(!empty($id)) { ?> value="<?php echo $product['size']; ?>" <?php } ?> >
                                 </div> 

								 
                                 <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    <textarea rows="10" class="form-control" id="summernote_desc" name="description" placeholder="Enter Description"> <?php if(!empty($id)) {  echo $product['description']; } ?> </textarea>
                                 </div> 

                                  <div class="form-group col-md-3">
                                    <label for="category_name">Main Image (dimisions 600 X 600 )</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                 </div>
                                 <?php if(!empty($id) && !empty($product['image'])){ ?>
                                    <input type="hidden" name="old_image" value="<?php echo $product['image']; ?>">
                                    <div class="form-group col-md-3">
                                    <img src="../assets/images/product/list/<?php echo $product['image']; ?>" style="width:100px">
                                 </div>
                                    <?php } ?>



                                 <div class="form-group col-md-12">
                                        <label class="col-md-2 control-label">More Images: <br><span style="color:red"></span></label>
                                        <div class="col-md-10">
                                            <table  class="table table-hover table-bordered table-striped" id="image-table" >
                                                <tbody>
                                                    <tr>
                                                        <th width="35%">Image</th>
                                                        <th width="35%">Sort</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    <?php if(!empty($product_images)) {
													foreach($product_images as $key => $product_image) { ?>
                                                    <tr id="delete-<?php echo $product_image['id']; ?>">
                                                        <td>
                                                            <?php if(!empty($product_image['image'])) { ?>
                                                            <img src="../assets/images/product/list/<?php echo $product_image['image']; ?>" style="width:100px">
                                                            <?php } ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <input id="ImageSort-<?php echo $product_image['id']; ?>"  type="number" class="form-control" value="<?php echo $product_image['image_order']; ?>">
                                                            <br>
                                                            <button data-imageid="<?php echo $product_image['id']; ?>" class="btn green updateImageSort" type="button"> Update</button>
                                                        </td>
                                                        <td class="text-center">
                                                            <a   data-id="<?php echo $product_image['id']; ?>" class="btn btn-danger Deleteimage" href="javascript:void(0);"><i class="fa fa-times"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                   
                                                    <?php } } ?>
													
														<tr class="blockIdWrap">
															<td>
																<input type="file" class="form-control" name="images[]">
															<td>
																<input type="text" placeholder="Image Sort" name="image_sort[]" style="color:gray" autocomplete="off" class="form-control"/>
															</td>
															</td>
															<td></td>
														</tr>
                                                    
                                                </tbody>
                                            </table>
											<input type="button" id="addImageRow" value="Add More" />
                                        </div>
                                    </div>
                                   
								





							
                                <!-- <div class="form-group col-md-6">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" value="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description" value="">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords" value="">
                                 </div> -->
                                  <div class="form-group col-md-6">
                                    <label for="sort">Sort</label>
                                    <input type="number" class="form-control" id="sort" name="sort" placeholder="Enter Product  Sort" <?php if(!empty($id) && !empty($product['sort'])) { ?> value="<?php echo $product['sort']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
								 <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <input type="checkbox" class="form-control" style="margin-left:20px;width:20px" name="status" value="1" <?php if(!empty($id) && $product['status'] == 1) { ?> checked="" <?php } ?>>
                                 </div>
								
                              </div>
                           </div>
                           <!-- /.card-body -->
                           <div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </div>
                        </form>
                        <!-- /.form-group -->
                        <!-- /.col -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  </div>
               </div>
               <!-- /.card -->
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      </div>
	  <!-- Append Table Rows -->
<table class="table table-hover table-bordered table-striped imagesamplerow" style="display:none;">
    <tbody>
        <tr class="appenderTr blockIdWrap">
            <td>
                <input type="file" class="form-control" name="images[]">
            </td>
            <td>
                <input type="number" placeholder="Image Sort" name="image_sort[]" style="color:gray" autocomplete="off" class="form-control" required/>
            </td>
            <td class="text-center">
				<a  class="btn btn-danger imageRowRemove" href="javascript:void(0);"><i class="fa fa-times"></i>                                           </a>
            </td>
        </tr>
    </tbody>
</table>
      <?php include('include/js-files.php'); ?>
       <script src="assets/js/jquery.validate.min.js"></script>
       <script src="assets/plugins/select2/js/select2.full.min.js"></script>
	  <script>
	  $(document).ready(function() {
			  $("#category_id").select2();
			  $("#addEditForm").validate({
				rules: {
				  product_name: {
					required: true
				  },
				  category_id: {
					required: true
				  },
                  product_code: {
					required: true
				  },		  
				 
				  
				},
				messages: {
				  product_name: {
					required: "Please enter a product  name",
				  },
				  category_id: "Please select  category",
                  product_code: "Please enter product code",
				 
				 
				},
				submitHandler: function(form) { 
					
					form.submit();
				}
			  });
	});
	
	
	$(document).on('click','.Deleteimage',function(){ 
        var id = $(this).attr('data-id');
		$.ajax({
            data : {id:id},
            url : "delete-image.php",
            type : "get",
            success:function(resp){
				$("#delete-"+id).remove();
                //alert('Image has been deleted successfully');
				
            },
            error:function(){

            }
        })
    });
	
	$(document).on('click','.updateImageSort',function(){
        var imageid = $(this).data('imageid'); 
        var imagesort = $('#ImageSort-'+imageid).val();
        $.ajax({
            data : {imageid:imageid,imagesort:imagesort},
            url : "update_imagesort.php",
            type : "get",
            success:function(resp){
                alert('Sort updated successfully');
            },
            error:function(){

            }
        })
    })
	
	
	
	jQuery("#addImageRow").click(function() {        
        var row = jQuery('.imagesamplerow tr').clone(true);
        row.appendTo('#image-table');        
    });
	    $('.imageRowRemove').on("click", function() {
        $(this).parents("tr").remove();
    });
	
	  </script>
	 

   </body>
</html>