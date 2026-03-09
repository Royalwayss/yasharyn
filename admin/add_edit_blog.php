<?php 
   session_start();
   
    ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='blogs';
      
      if(isset($_GET['id']) && $_GET['id'] != ''){
        $id = $_GET['id'];
        $title = 'Edit Blog';
         $sql = "select * from ".$table." where id =".$id; 
         $result = $conn->query($sql);
         $blog = $result->fetch_assoc();
		 
		
		 
		 
		 
      }else{
         $id = '';
         $title = 'Add Blog';
      }
      $adminAccess = admin_access($conn,6); 
	  if($adminAccess['edit'] != 1){
	    echo '<script>window.location.href="index.php"; </script>'; die;
      }
      
      ?>
	  <style>
	  .green.btn {
		color: #FFFFFF;
		background-color: #35aa47;
		border-color: "";
      }
	  </style>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
      <?php include('include/header.php'); ?>
      <!-- page content start -->
      <div class="content-wrapper" style="margin-top:50px">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>Blogs Management</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="blogs.php">Blogs</a></li>
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
                         <div class="col-md-12" style="margin-top:20px;text-align:right;">
						      <a class="btn btn-success" id="preview-blog" href="javascript:;">Preview</a>
							  <form id="preview-blog-form" action="../preview.php" method="post" target="_blank" style="display:none">
								  <input type="text"  name="title" >
								  <input type="text"  name="editor" >
								  <input type="text"  name="published_date" >
								  <input type="text"  name="read_time" >
								  <input type="submit">
							  </form>
						</div>
						<form name="addEditForm" id="addEditForm" action="save-blog.php" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="<?php echo $id; ?>">
                           <div class="card-body">
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="category_name">Title*</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" <?php if(!empty($id)) { ?> value="<?php echo $blog['title']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
								 
								 <div class="form-group col-md-12">
                                    <label for="category_name">Blog Url*</label>
                                    <input type="text" class="form-control" id="blog_url" name="url" placeholder="Enter the blog url" <?php if(!empty($id)) { ?> value="<?php echo $blog['url']; ?>" <?php } ?> pattern="[-a-zA-Z0-9_\.]+">
                                 </div>
								 
								 
								 
                                
                                 <div class="form-group col-md-12">
                                    <label for="short_description">Short Description</label>
                                    <textarea rows="4" class="form-control" id="short_description" name="short_description" placeholder="Enter the short description"> <?php if(!empty($id)) {  echo $blog['short_description']; } ?> </textarea>
                                 </div> 
                                 <div class="form-group col-md-12">
                                    <label for="editor">Content</label>
                                    <textarea rows="10" class="form-control" id="editor" name="content" placeholder="Enter the content"> <?php if(!empty($id)) {  echo $blog['content']; } ?> </textarea>
                                 </div> 

                                  <div class="form-group col-md-3">
                                    <label for="category_name">Image (dimisions 602 X 402 )</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                 </div>
                                 <?php if(!empty($id) && !empty($blog['image'])){ ?>
                                    <input type="hidden" name="old_image" value="<?php echo $blog['image']; ?>">
                                    <div class="form-group col-md-3">
                                    <img src="<?php echo BASE_URL.'assets/images/blogs/'.$blog['image']; ?>" style="width:100px">
                                 </div>
                                    <?php } ?>

                                 <div class="form-group col-md-12">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"  <?php if(!empty($id) && !empty($blog['meta_title'])) { ?> value="<?php echo $blog['meta_title']; ?>" <?php } ?> >
                                 </div>
								 
								 <div class="form-group col-md-12">
                                    <label for="meta_description">Meta Description</label>
                                    <input type="text" class="form-control" id="meta_description" name="meta_description"  <?php if(!empty($id) && !empty($blog['meta_description'])) { ?> value="<?php echo $blog['meta_description']; ?>" <?php } ?> >
                                 </div>
								 
								 <div class="form-group col-md-12">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"  <?php if(!empty($id) && !empty($blog['meta_keywords'])) { ?> value="<?php echo $blog['meta_keywords']; ?>" <?php } ?> >
                                 </div>
								 
								 
                                  <div class="form-group col-md-6">
                                    <label for="publication_date">Publication Date</label>
                                    <input type="date" class="form-control" id="publication_date" name="publication_date"  <?php if(!empty($id) && !empty($blog['publication_date'])) { ?> value="<?php echo $blog['publication_date']; ?>" <?php } ?> >
                                 </div>
								 <div class="form-group col-md-6">
                                    <label for="read_time">Read Time</label>
                                    <input type="text" class="form-control" id="read_time" name="read_time"  <?php if(!empty($id) && !empty($blog['read_time'])) { ?> value="<?php echo $blog['read_time']; ?>" <?php } ?> >
                                 </div>
								 <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <input type="checkbox" class="form-control" style="margin-left:20px;width:20px" name="status" value="1" <?php if(!empty($id) && $blog['status'] == 1) { ?> checked="" <?php } ?>>
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
	  <!-- Append Table Rows -->
<table class="table table-hover table-bordered table-striped imagesamplerow" style="display:none;">
    <tbody>
        <tr class="appenderTr blockIdWrap">
            <td>
                <input type="file" class="form-control" name="images[]">
            </td>
            <td>
                <input type="number" placeholder="Image Sort" name="image_sort[]" style="color:gray" autocomplete="off" class="form-control" required/>
            </td>
            <td class="text-center">
				<a  class="btn btn-danger imageRowRemove" href="javascript:void(0);"><i class="fa fa-times"></i>                                           </a>
            </td>
        </tr>
    </tbody>
</table>
      <?php include('include/js-files.php'); ?>
       <script src="assets/js/jquery.validate.min.js"></script>
       <script src="assets/plugins/select2/js/select2.full.min.js"></script>
	  <script>
	  $(document).ready(function() {
			  
			  $("#addEditForm").validate({
				rules: {
				  title: {
					required: true
				  },
				  url: {
					required: true
				  },
				  short_description: {
					required: true
				  },
                  content: {
					required: true
				  },
                  publication_date: {
					required: true
				  },				  
				 read_time: {
					required: true
				  },
				  
				},
				messages: {
				  product_name: "Please enter a blog title",
				  url: "Please enter a blog url",
				  short_description: "Please enter a short description",
				  content: "Please enter a content",
                  publication_date: "Please select publication date",
				 
				 
				},
				submitHandler: function(form) { 
					
					form.submit();
				}
			  });
			  
			  
			  
			  tinymce.init({
				  selector: '#editor',
				  height: 500,
				  plugins: 'advlist autolink lists link image charmap print preview anchor \
				searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount \
				textpattern emoticons directionality',
				  toolbar: 'undo redo | fontfamily fontsize  | styleselect | bold italic underline strikethrough | \
				alignleft aligncenter alignright alignjustify | \
				bullist numlist outdent indent | link image media | \
				forecolor backcolor emoticons | \
				print preview code fullscreen',
			    
				  menubar: 'file edit view insert format tools table help',
				 
			}); 
			  
			  
			 $('#title').on('input', function() {
				var title = $(this).val();
				// Convert title to slug
				var slug = title.toLowerCase()
                    .trim()
                    .replace(/\./g, '-')         // Replace dots with hyphens
                    .replace(/[^a-z0-9\s-]/g, '')  // Remove other invalid chars
                    .replace(/\s+/g, '-')          // Replace spaces with hyphens
                    .replace(/-+/g, '-');          // Collapse multiple hyphens

				 $('#blog_url').val(slug);
			
			});
			
			
			$('#preview-blog').on('click', function () {

				 $('#preview-blog-form input[name="title"]').val($("#title").val());
				 $('#preview-blog-form input[name="published_date"]').val($("#published_date").val());
				 $('#preview-blog-form input[name="read_time"]').val($("#read_time").val());
				 $('#preview-blog-form input[name="editor"]').val(tinymce.get('editor').getContent());

				 $('#preview-blog-form').trigger('submit');

			}); 
			  
			  
			  
			  
			  
			  
			  
			  
			  
	});
	
	
	
	 
	
	
	
	
	
	
	  </script>
	 

   </body>
</html>