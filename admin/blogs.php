<?php session_start(); ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='blogs';
	  $adminAccess = admin_access($conn,6); 
	  if($adminAccess['view'] != 1){
	    echo '<script>window.location.href="index.php"; </script>'; die;
      }
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
                        <h1 class="m-0">Blogs</h1>
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
								<h3 class="card-title">Blogs</h3>
								<?php if($adminAccess['edit'] == 1){ ?>
								<div class="text-right">
									
									<a style="max-width: 150px; margin-top: 0px ; display: inline-block;" href="add_edit_blog.php" class="btn btn-block btn-primary">Add Blog</a>
                                </div>
								<?php } ?>
                          </div>
						   <div class="card-body">
                              <table id="DataTable" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Image</th>
                                       <th>Title</th>
                                       
                                       <th>Publication Date</th>
                                      
                                       <th>Status</th>
                                       <th>Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $no  = 1;
                                       $sql = "select id,title,url,publication_date,image,status from ".$table." order by publication_date desc"; 
                                       $result = $conn->query($sql);
                                       if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {
                                       ?>
                                    <tr>
                                       <td><?php echo $row['id']; ?></td>
                                        <td>
                                         <?php if($row['image'] != ''){ ?>
                                           <img src="<?php echo BASE_URL.'assets/images/blogs/'.$row['image']; ?>" style="width:100px">
                                         <?php } ?>
                                          </td>
                                        <td>
										<a target="_blank" href="<?php echo BASE_URL.''.$row['url']; ?>">
										<?php echo $row['title']; ?>
										</a>
										</td>
                                        <td><?php echo $row['publication_date']; ?></td>
                                       
                                       
                                       <td><?php
                                        $status = '';
                                         if($adminAccess['edit'] == 1){
												 if($row['status'] == '1'){
													   $checked ='checked';
												 }else{
													   $checked ='';
												 }
												
												 
												  $status .= '<input type="checkbox" class="blog_status" data-id="'.$row['id'].'"  '.$checked.'>&nbsp;&nbsp;Is Active';
												  
												
										 }else{
											 if($row['status'] == '1'){
													   $status ='Active';
												 }else{
													   $checked ='Deactive';
												 }
											 
										 }											 
										  
										  echo $status;
                                        ?></td>
                                       <td> 
									   <?php if($adminAccess['edit'] == 1){ ?>
									   <a   href="add_edit_blog.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
									   <?php }  ?>
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
		
		  $('.blog_status').change(function() {
				if ($(this).is(':checked')) {
				  var status = '1';
				} else {
				  var status = '0';
				}
				
				var id = $(this).attr('data-id');
				
				$.ajax({
						url: "update_blog_status.php",
						type: "POST",
						data: { id:id,status:status},
						success: function (result) {
							
						},
         	
				});
				
				
				
				
				
				
				
				
				
		  });
	});
	  </script>
	  
	  
	  
	  
   </body>
</html>