<?php session_start(); ?>
<!DOCTYPE html> 
<html lang="en">
<?php 
include('include/head.php');
if($_SESSION['admin_type'] != 1){
	echo '<script>window.location.href="index.php"; </script>'; die;
}
$table ='admin';
?>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
         <?php include('include/header.php'); ?>
         <!-- page content start -->
         <div class="content-wrapper" style="margin-top:14px">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">Subadmins</h1>
                     </div>
                  </div>
               </div>
            </div>
            <section class="content" >
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
					 <?php 
					 if (isset($_SESSION['success_message'])) { 
						  $message = $_SESSION['success_message'];
				          unset($_SESSION['success_message']);
					 ?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								  <strong>Success:</strong> <?php echo  $message; ?>
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								  </button>
							</div>
           
					<?php } ?>
                        <div class="card">
                           <div class="card-header">
								<h3 class="card-title">Subadmins</h3>
								<div class="text-right">
									<a style="max-width: 150px; margin-top: 0px ; display: inline-block;" href="add_edit_subadmin.php" class="btn btn-block btn-primary">Add Subadmin</a>
                                </div>
                          </div>
						   <div class="card-body">
                              <table id="DataTable" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $no  = 1;
                                       $sql = "select * from ".$table." where admin_type = 2 order by id desc"; 
                                       $result = $conn->query($sql);
                                       if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {
                                       ?>
                                    <tr>
                                       <td><?php echo $row['id']; ?></td>
                                        
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                       <td><?php
                                        $status = '';
                                         if($row['status'] == '1'){
                                               $checked ='checked';
                                         }else{
                                               $checked ='';
                                         }
										
										 
										  $status .= '<input type="checkbox" class="admin_status" data-id="'.$row['id'].'" data-type="status" '.$checked.'>&nbsp;&nbsp;Is Active';
										  
                                          echo $status;
                                        ?></td>
                                       <td> 
									   <a   href="add_edit_subadmin.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
									   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a   href="update-role.php?id=<?php echo $row['id']; ?>"><i class="fas fa-unlock"></i></a>
									   
									   </td>
                                      
                                    </tr>
                                  
                                    
									         <?php  $no++; } }?>
                                 </tbody>
                              </table>
                           </div>
                           <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <!-- page content end  -->
         <?php include('include/footer.php'); ?>
      </div>
      <?php include('include/js-files.php'); ?>
	  
	  <script>
	  $(document).ready(function() {
		
		  $('.admin_status').change(function() {
				if ($(this).is(':checked')) {
				  var status = '1';
				} else {
				  var status = '0';
				}
				var column = $(this).attr('data-type');
				var id = $(this).attr('data-id');
				var table = 'admin';
				
				$.ajax({
						url: "update_status.php",
						type: "POST",
						data: { id:id,status:status, column:column,table:table},
						success: function (result) {
							
						},
         	
				});
				
				
				
				
				
				
				
				
				
		  });
	});
	  </script>
	  
	  
	  
	  
   </body>
</html>