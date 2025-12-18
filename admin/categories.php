<?php session_start(); ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
	  
	  $adminAccess = admin_access($conn,1); 
	  if($adminAccess['view'] != 1){
	    echo '<script>window.location.href="index.php"; </script>'; die;
      }
      $table ='categories';
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
                        <h1 class="m-0">Categories</h1>
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
								<h3 class="card-title">Categories</h3> 
								<?php if($adminAccess['edit'] == 1){ ?>
								<div class="text-right">
									<a style="max-width: 150px; margin-top: 0px ; display: inline-block;" href="add_edit_category.php" class="btn btn-block btn-primary">Add Category</a>
                                </div>
								<?php } ?>
                          </div>
						   <div class="card-body">
                              <table id="DataTable" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Image</th>
                                       <th>Parent Category</th>
                                       <th>Category Name</th>
                                       <th>Sort</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $no  = 1;
                                       $sql = "select * from ".$table." order by id desc"; 
                                       $result = $conn->query($sql);
                                       if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {
                                       ?>
                                    <tr>
                                       <td><?php echo $row['id']; ?></td>
									   <td>
									         <?php if(!empty($row['category_image'])){ ?>
											     <img style="width:100px" src="../assets/images/category/<?php echo $row['category_image']; ?>">
											 <?php } ?>
									   </td>
                                       <td>
									   <?php 
									   if(empty($row['parent_id'])){
									      echo '<strong>Main Category</strong>';
									   }else{
										  $category =  getSingleRow($conn,'select * from categories where id = '.$row['parent_id']);
										  if(!empty($category )){
											  echo '&nbsp;&nbsp;&nbsp;'.$category ['category_name'];
										  }
									   }

									   ?>
									   </td>
                                       
                                       <td><?php echo $row['category_name']; ?></td>
                                       <td><?php echo $row['sort']; ?></td>
                                       <td><?php
                                        
                                         if($row['status'] == '1'){
                                               echo '<span style="color:green">Active</span>';
                                         }else{
                                               echo '<span style="color:red">Inactive</span>';
                                         }
                                        
                                        ?></td>
                                       <td> 
									   <?php if($adminAccess['edit'] == 1){ ?>
									   <a   href="add_edit_category.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
									   <?php } ?>
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
   </body>
</html>