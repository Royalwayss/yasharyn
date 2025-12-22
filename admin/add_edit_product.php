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
      }else{
         $id = '';
         $title = 'Add Product';
      }
      $adminAccess = admin_access($conn,2); 
	  if($adminAccess['edit'] != 1){
	    echo '<script>window.location.href="index.php"; </script>'; die;
      }
      
      ?>
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
                                            <?php } ?>
                                       <?php } ?>
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
								 
                                  <div class="form-group col-md-6" style="display:none">
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
                                    <label for="category_name">Image (dimisions 600 X 600 )</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                 </div>
                                 <?php if(!empty($id) && !empty($product['image'])){ ?>
                                    <input type="hidden" name="old_image" value="<?php echo $product['image']; ?>">
                                    <div class="form-group col-md-3">
                                    <img src="../assets/images/product/list/<?php echo $product['image']; ?>" style="width:100px">
                                 </div>
                                    <?php } ?>


							
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
	  </script>
	 

   </body>
</html>