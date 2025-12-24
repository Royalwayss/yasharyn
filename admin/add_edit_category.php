<?php 
   session_start();
   
    ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='categories';
      $categories = get_categories($conn); 
      if(isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
        $title = 'Edit Category';
         $sql = "select * from ".$table." where id =".$id; 
         $result = $conn->query($sql);
         $category = $result->fetch_assoc();
      }else{
         $id = '';
         $title = 'Add Category';
      }
      
      $adminAccess = admin_access($conn,1); 
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
                  <h1>Categories Management</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
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
                        <form name="addEditForm" id="addEditForm" action="save-category.php" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="<?php echo $id; ?>">
                           <div class="card-body">
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="category_name">Category Name*</label>
                                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name" <?php if(!empty($id)) { ?> value="<?php echo $category['category_name']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="category_name"> Parent Category</label>
                                    <select name="parent_id" id="parent_id" class="form-control">
                                       <option value="0" selected="">Main Category</option>
                                       <?php foreach($categories as $cat) {   ?>
									    <option value="<?php echo $cat['id']; ?>" <?php if(!empty($id) && $cat['id'] == $category['parent_id']) { echo 'selected'; } ?>><?php echo $cat['category_name']; ?></option>
										<?php foreach($cat['sub_categories'] as $sub_cat) {   ?> 
									    <option value="<?php echo $sub_cat['id']; ?>" <?php if(!empty($id) && $sub_cat['id'] == $category['parent_id']) { echo 'selected'; } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ><?php echo $sub_cat['category_name']; ?></option>
									   <?php }} ?>
                                    </select>
                                 </div>
								 
                                 <div class="form-group col-md-6">
                                    <label for="category_image">Category Banner Image (dimisions 1920 X 500)</label>
                                    <input type="file" class="form-control" id="category_image" name="category_image" accept="image/*">
                                     <?php if(!empty($id) && !empty($category['category_image'])){ ?>
								           <a target="_block" href="../assets/images/category/<?php echo $category['category_image']; ?>">View Image </a>
                                     <?php } ?>
								 </div> 
								
								
								
								<?php if(!empty($id)) { ?>
								 <input type="hidden" name="old_category_image" value="<?php echo $category['category_image']; ?>">
                                <?php } ?>
								 
                                 
								<div class="form-group col-md-12">
                                    <label for="description">Category Description</label>
                                    <textarea class="form-control" rows="3" id="description" name="description"placeholder="Enter Category Description">  
									 <?php if(!empty($id))  { echo $category['description'];  } ?> 
									</textarea>
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
                                    <label for="sort">Sort*</label>
                                    <input type="number" class="form-control" id="sort" name="sort" placeholder="Enter Category Sort" <?php if(!empty($id)) { ?> value="<?php echo $category['sort']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
								 <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <input type="checkbox" class="form-control" style="margin-left:20px;width:20px" name="status" value="1" <?php if(!empty($id) && $category['status'] == 1) { ?> checked="" <?php } ?>>
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
		      $("#parent_id").select2();
			  $("#addEditForm").validate({
				rules: {
				  category_name: {
					required: true
				  },
				  parent_id: {
					required: true
				  },			  
				  sort: {
					required: true
				  }
				  
				},
				messages: {
				  category_name: {
					required: "Please enter a category name",
				  },
				  parent_id: "Please select a parent category",
				  sort: "Please enter a category sort"
				 
				},
				submitHandler: function(form) { 
					
					form.submit();
				}
			  });
	});
	  </script>
   </body>
</html>