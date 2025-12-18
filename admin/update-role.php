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
         $title = 'Update Subadmin Role';
		 $sql = "select * from ".$table." where admin_type = 2 and id =".$id; 
         $result = $conn->query($sql);
         $admin = $result->fetch_assoc();
      }else{
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
            <h3 class="card-title"><?php echo $admin['name']; ?> - Update Roles/Persmissions</h3>

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
               <form name="subadminForm" id="subadminForm" action="save-role.php" method="post">
			   
			   <input type="hidden" name="subadmin_id" value="<?php echo $id; ?>">
               <div class="card-body">
                  <?php
				  $sql = 'select * from `modules` order by `sort` asc';
	
					$result = $conn->query($sql); 
					
					if ($result->num_rows > 0) { 
					
						while ($row = $result->fetch_assoc()) { 
						
						
						$admin_role_sql = 'select * from `admin_roles` where admin_id = '.$id.' and module_id = '.$row['id'].'';
						$admin_roles = getSingleRow($conn,$admin_role_sql);
						
						$view_is_checked = '';
						$edit_is_checked = '';
						$delete_is_checked = '';
						
						if(!empty($admin_roles)){
							if($admin_roles['view'] == '1'){
							    $view_is_checked = 'checked';
							}
							if($admin_roles['edit'] == '1'){
							    $edit_is_checked = 'checked';
							}
							if($admin_roles['delete'] == '1'){
							   $delete_is_checked = 'checked';
							}
						}
						
						
						
						
				   ?>
				   <div class="form-group col-md-6">
                    <label for="cms_pages"><?php echo $row['module_name']; ?>: &nbsp;&nbsp;&nbsp;</label>
                    <?php if($row['view'] == 1) { ?>
					<input type="checkbox" name="module<?php echo $row['id']; ?>[view]" value="1" <?php echo $view_is_checked; ?>>&nbsp;View Access &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php } if($row['edit'] == 1) { ?>
					<input type="checkbox" name="module<?php echo $row['id']; ?>[edit]" value="1" <?php echo $edit_is_checked; ?>>&nbsp;View/Edit Access &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php } if($row['delete'] == 1) { ?>
					<input type="checkbox" name="module<?php echo $row['id']; ?>[delete]" value="1" <?php echo $delete_is_checked; ?>>&nbsp;Delete Access &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php } ?>
				  </div>
					<?php }} ?>
                </div>
                <!-- /.card-body -->

                <div class="form-group col-md-6">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                <!-- /.form-group -->
              </div>
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
	  <?php include('include/js-files.php'); ?>
       <script src="assets/js/jquery.validate.min.js"></script>
       <script src="assets/plugins/select2/js/select2.full.min.js"></script>
	  <script>
	  $(document).ready(function() {
			  $("#category_id").select2();
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