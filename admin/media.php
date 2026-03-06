<?php session_start(); ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='media';
      $adminAccess = admin_access($conn,7); 
      if($adminAccess['view'] != 1){
      echo '<script>window.location.href="index.php"; </script>'; die;
      }
      ?>
   <style>
      .modal{
      position: fixed;
      top:0;
      left:0;
      width:100%;
      height:100%;
      background: rgba(0,0,0,0.5);
      z-index:9998;
      }
   </style>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
         <?php include('include/header.php'); ?>
         <!-- page content start -->
         <div class="content-wrapper" style="margin-top:14px">
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">Media</h1>
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
                              <h3 class="card-title">Media</h3>
                              <?php if($adminAccess['edit'] == 1){ ?>
                              <div class="text-right">
                                 <a style="max-width: 150px; margin-top: 0px ; display: inline-block;" class="btn btn-block btn-primary" data-toggle="modal" data-target="#AddMediaModal" href="javascript:;">Add Media</a>
                              </div>
                              <?php } ?>
                           </div>
                           <div class="card-body">
                              <table id="DataTable" class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th  style="width:5%">ID </th>
                                       <th  style="width:25%">Media</th>
                                       <th  style="width:15%">Link</th>
                                       <th  style="width:20%">Uploaded At</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php  $count =1;
                                       $sql = "select * from media order by id desc";
                                       
                                       
                                       $result= mysqli_query($conn, $sql);
                                       
                                       while ($row = mysqli_fetch_assoc($result)) {
                                       $media = '';
                                       $media_url = '';
                                       if(!empty($row['media_name'])){ 
                                       $media_url = BASE_URL.'assets/images/blogs/'.$row['media_name'];
                                       
                                       if($row['extension'] == 'pdf'){
                                       $media = '<a target="_blank" href="'.$media_url.'" style="width:100px">'.$row['media_name'].'</a>';
                                       }else{
                                       $media = '<img class="showimg" src="'.$media_url.'" style="max-width:100px">';
                                       }
                                       
                                       
                                       }
                                       
                                       ?>
                                    <tr>
                                       <td style="width:1%!important"><?php echo $count; ?></td>
                                       <td><?php echo $media; ?></td>
                                       <td><?php echo '<i class="fa fa-copy copy-icon"  style="cursor:pointer; font-size:20px" data-url="'.$media_url.'" onclick="copyToClipboard(this)"> </i>'; ?></td>
                                       <td><?php echo date('d-m-Y H:i:s',strtotime($row['created_at'])); ?></td>
                                    </tr>
                                    <?php $count++;
                                       } 
                                       mysqli_free_result($result);
                                       
                                       
                                       ?>
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
         <div class="modal fade" id="AddMediaModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <a   data-dismiss="modal" aria-label="Close">
                     <i class="fa fa-times"></i>
                     </a>
                     <h5 class="modal-title">Add Media</h5>
                  </div>
                  <form action="save-media.php" method="post" enctype="multipart/form-data">
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-md-12">
                              <table id="attributeTable" class="table table-hover table-bordered table-striped">
                                 <tbody>
                                    <tr>
                                       <th>File</th>
                                       <th>Actions</th>
                                    </tr>
                                    <tr class="blockIdWrap">
                                       <td>
                                          <input type="file" class="form-control"  name="files[]">
                                       </td>
                                       <td></td>
                                    </tr>
                              </table>
                              <input type="button" id="addMediaRow" value="Add More">
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <table class="table table-hover table-bordered table-striped mediasamplerow" style="display:none;">
            <tbody>
               <tr class="blockIdWrap">
                  <td>
                     <input type="file" class="form-control"  name="files[]">
                  </td>
                  <td>
                     <a title="Remove" class="btn btn-sm red mediarowremove" href="javascript:;"><i class="fa fa-times"></i></a>
                  </td>
               </tr>
            </tbody>
         </table>
         <!-- page content end  -->
         <?php include('include/footer.php'); ?>
      </div>
      <?php include('include/js-files.php'); ?>
      <script>
         $(document).ready(function() {
         $(document).on('click', '#addMediaRow', function () {   
                var row = jQuery('.mediasamplerow tr').clone(true);
                row.appendTo('#attributeTable');        
            }); 
         
         $('.mediarowremove').on("click", function() {
                $(this).parents("tr").remove();
            });	
         
         });
         
         function copyToClipboard(element,) { 
            
         var text = $(element).attr('data-url');
         
         navigator.clipboard.writeText(text).then(function() {
         
                // Change icon to check mark
                element.classList.remove("fa-copy");
                element.classList.add("fa-check");
                element.style.color = "green";
         
                // Revert back after 4 seconds
                setTimeout(function() {
                    element.classList.remove("fa-check");
                    element.classList.add("fa-copy");
                    element.style.color = "black";
                }, 4000);
         
            });
         }
      </script>
   </body>
</html>