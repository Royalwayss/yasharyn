<?php session_start(); ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='careers';
	  $adminAccess = admin_access($conn,5); 
	  if($adminAccess['view'] != 1){
	    echo '<script>window.location.href="index.php"; </script>'; die;
      }
      ?>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
         <?php include('include/header.php'); ?>
         <!-- page content start -->
         <div class="content-wrapper">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">Careers</h1>
                     </div>
                  </div>
               </div>
            </div>
            <section class="content">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <table id="DataTable" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Mobile</th>
                                       <th>Subject</th>
                                       <th>Date</th>
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
                                       <td><?php echo $row['name']; ?></td>
                                       <td><?php echo $row['email']; ?></td>
                                       <td><?php echo $row['country_code'].' '.$row['mobile']; ?></td>
                                       <td class="text_message"><?php echo $row['subject']; ?></td>
                                       <td><?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?></td>
                                       <td> <a id="row-<?php echo $row['id']; ?>" class="btn <?php if($row['view_status'] == '1') { echo 'btn-success'; }else{ echo 'btn-danger'; } ?>" id="form-row-<?php echo $row['id']; ?>" href="javascript:;" onclick="view_form('<?php echo $row['id']; ?>',<?php echo $row['view_status']; ?>);" >View</a> </td>
                                    </tr>
                                    <div id="viewModal<?php echo $row['id']; ?>" class="modal">
                                       <!-- Modal content -->
                                       <div class="modal-content">
                                          <div class="row">
                                             <div class="col-11">
                                                <h3>Career Form Details #<?php echo $row['id']; ?></h3>
                                             </div>
                                             <div class="col-1">
                                                <span class="close" style="color:red" onclick="model_close(<?php echo $row['id']; ?>)">
                                                   <h2><b>&times;</b></h2>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="view_internship_details">
                                             <div class="row">
                                                <div class="col-2 label">Name</div>
												<div class="col-1 label">:</div>
                                                <div class="col-5 value"><?php echo $row['name']; ?></div>
                                             </div>
                                             <div class="row">
                                                <div class="col-2 label">Email</div>
												<div class="col-1 label">:</div>
                                                <div class="col-5 value"><?php echo $row['email']; ?></div>
                                             </div>
                                          </div>
                                          
										  <div class="row">
                                             <div class="col-2 label">Mobile</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['country_code'].' '.$row['mobile']; ?></div>
                                          </div>
										<div class="row">
                                             <div class="col-2 label">Country</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['country']; ?></div>
                                          </div>
										  <div class="row">
                                             <div class="col-2 label">State</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['state']; ?></div>
                                          </div>
										  <div class="row">
                                             <div class="col-2 label">City</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['city']; ?></div>
                                          </div>
										  <div class="row">
                                             <div class="col-2 label">Subject</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['subject']; ?></div>
                                          </div>
										  
										  <div class="row">
                                             <div class="col-2 label">Category</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['category']; ?></div>
                                          </div>
										    <div class="row">
                                             <div class="col-2 label">Experience</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['experience']; ?></div>
                                          </div>
										  
										  <div class="row">
                                             <div class="col-2 label">Join Type</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['join_type']; ?></div>
                                          </div>
										  
										   <div class="row">
                                             <div class="col-2 label">Skills</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['skills']; ?></div>
                                          </div>
										  
										   <div class="row">
                                             <div class="col-2 label">Resume</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value">
											 <?php if(!empty($row['resume'])) { ?>
											 <a target='_block' href='<?php echo BASE_URL.'assets/uploads/resume/'.$row['resume']; ?>'><?php echo $row['resume']; ?></a>
									         <?php } ?>
											 
											 </div>
                                          </div>
										  
                                          <div class="row">
                                             <div class="col-2 label">Message:</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo $row['message']; ?></div>
                                          </div>
                                          <div class="row">
                                             <div class="col-2 label">Date</div>
											 <div class="col-1 label">:</div>
                                             <div class="col-5 value"><?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?></div>
                                          </div>
                                       </div>
                                    </div>
                                    
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