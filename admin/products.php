<?php session_start(); ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='products';
	  $adminAccess = admin_access($conn,2); 
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
                        <h1 class="m-0">Products</h1>
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
								<h3 class="card-title">Products</h3>
								<?php if($adminAccess['edit'] == 1){ ?>
								<div class="text-right">
									<a style="max-width: 150px; margin-top: 0px ; display: inline-block;" href="products_sort.php" class="btn btn-block btn-primary">Product Sort</a>
                                
									<a style="max-width: 150px; margin-top: 0px ; display: inline-block;" href="add_edit_product.php" class="btn btn-block btn-primary">Add Product</a>
                                </div>
								<?php } ?>
                          </div>
						   <div class="card-body">
                              <table id="DataTable" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Image</th>
                                       <th>Product Name</th>
                                       <th>Size</th>
                                       <th>Category Name</th>
                                       <th>Sort</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                       $no  = 1;
                                       $sql = "select * from ".$table." where is_delete ='0' order by id desc"; 
                                       $result = $conn->query($sql);
                                       if ($result->num_rows > 0) {
                                       while($row = $result->fetch_assoc()) {
                                       ?>
                                    <tr>
                                       <td><?php echo $row['id']; ?></td>
                                        <td>
                                         <?php if($row['image'] != ''){ ?>
                                           <img src="../assets/images/product/list/<?php echo $row['image']; ?>" style="width:100px">
                                         <?php } ?>
                                          </td>
                                        <td><?php echo $row['product_name']; ?></td>
                                        <td><?php echo $row['size']; ?></td>
                                       <td>
									   <?php 
									 
										  $category =  getSingleRow($conn,'select * from categories where id = '.$row['category_id']);
										  if(!empty($category )){
											  echo $category ['category_name'];
										  }
									   

									   ?>
									   </td>
                                       
                                       <td><?php echo $row['sort']; ?></td>
                                       <td><?php
                                        $status = '';
                                         if($adminAccess['edit'] == 1){
												 if($row['status'] == '1'){
													   $checked ='checked';
												 }else{
													   $checked ='';
												 }
												 if($row['is_new_arrival'] == '1'){
													   $new_arrival_checked ='checked';
												 }else{
													   $new_arrival_checked ='';
												 } 
												 
												  $status .= '<input type="checkbox" class="product_status" data-id="'.$row['id'].'" data-type="status" '.$checked.'>&nbsp;&nbsp;Is Active';
												  $status .= '<br><input type="checkbox" class="product_status" data-id="'.$row['id'].'" data-type="is_new_arrival" '.$new_arrival_checked.'>&nbsp;&nbsp;Is New Arrival';
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
									   <a   href="add_edit_product.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
									   <?php } if($adminAccess['delete'] == 1){ ?>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a   style="color:red" onclick="return confirm('Are you sure you want to delete this product?');" href="delete_product.php?id=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a>
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
	  
	  <script>
	  $(document).ready(function() {
		
		  $('.product_status').change(function() {
				if ($(this).is(':checked')) {
				  var status = '1';
				} else {
				  var status = '0';
				}
				var column = $(this).attr('data-type');
				var id = $(this).attr('data-id');
				var table = 'products';
				
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