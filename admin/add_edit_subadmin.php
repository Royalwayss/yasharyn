<?php 
   session_start();
   
    ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      if($_SESSION['admin_type'] != 1){
	echo '<script>window.location.href="index.php"; </script>'; die;
}
	  $table ='admin';
     
      if(isset($_GET['id']) && $_GET['id'] != ''){
         $id = $_GET['id'];
         $title = 'Edit Subadmin';
         $sql = "select * from ".$table." where admin_type = 2 and id =".$id; 
         $result = $conn->query($sql);
         $admin = $result->fetch_assoc();
      }else{
         $id = '';
         $title = 'Add Subadmin';
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
                  <h1>Subadmin's Management</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="subadmins.php">Subadmins</a></li>
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
                        <form name="addEditForm" id="addEditForm" action="save-admin.php" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="<?php echo $id; ?>">
                           <div class="card-body">
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <label for="category_name">Name*</label>
                                    <input type="text" class="form-control" id="product_name" name="name" placeholder="Name" <?php if(!empty($id)) { ?> value="<?php echo $admin['name']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
                                
                               
                                
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" <?php if(!empty($id)) { ?> value="<?php echo $admin['email']; ?>" <?php } ?>>
                                 </div> 
								 
                              
								 <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <input type="checkbox" class="form-control" style="margin-left:20px;width:20px" name="status" value="1" <?php if(!empty($id) && $admin['status'] == 1) { ?> checked="" <?php } ?>>
                                 </div>
								 
								 
								 <div class="form-group col-md-6" >
                                    <label for="ofc"> <?php if(!empty($id)) {  ?> New Password  (optional) <?php }else{ ?>Password <?php } ?></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" <?php if(empty($id)) { ?> required <?php } ?> >
                                  </div> 
								  
								  <?php if(!empty($id)) {  ?>
								  <input type="hidden" name="hidden_password" value="<?php echo $admin['password']; ?>">
								  <?php } ?>
								
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
			 
			  $("#addEditForm").validate({
				rules: {
				  name: {
					required: true
				  },
				  email: {
					required: true
				  },
                 
				},
				messages: {
				  name: {
					required: "Please enter subadmin name",
				  },
				  email: "Please enter subadmin email",
                  
				},
				submitHandler: function(form) { 
					
					form.submit();
				}
			  });
	});
	  </script>
	 

   </body>
</html>