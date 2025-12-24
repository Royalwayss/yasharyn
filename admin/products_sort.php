<?php 
   session_start();
   
    ?>
<!DOCTYPE html> 
<html lang="en">
   <?php 
      include('include/head.php');
      $table ='categories';
      $categories = get_categories($conn); 
      
      ?>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
      <?php include('include/header.php'); ?>
      <style>
         #trackList { 
         margin-left:100px;
         margin-right:100px;
         list-style: none;
         padding: 0;
         width: auto;
         min-height: 200px;   
         max-height: 400px;   
         overflow-y: auto;    
         overflow-x: hidden;  
         }
         #trackList li {
         padding: 10px;
         margin: 5 0;
         background: #eaeaea;
         border: 1px solid #ccc;
         cursor: grab;
         }
      </style>
      <!-- page content start -->
      <div class="content-wrapper" style="margin-top:10px">
      <!-- Content Header (Page header) -->
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-6">
                  <h1>Products Sort Management</h1>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="products.php">Products</a></li>
                     <li class="breadcrumb-item active">Products Sort</li>
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
                  <h3 class="card-title">Products Sort</h3>
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
                        <form name="addEditForm" id="addEditForm" action="products_sort.php" method="get" enctype="multipart/form-data">
                           <div class="card-body">
                              <div class="row">
                                 <div class="form-group col-md-4">
                                    <label for="category_name"> Category</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                       <option value="0" selected="">Main Category</option>
                                       <?php foreach($categories as $cat) {   ?>
                                       <option value="<?php echo $cat['id']; ?>" <?php if(!empty($_GET['category_id']) && $_GET['category_id'] == $cat['id']) { echo 'selected'; } ?>><?php echo $cat['category_name']; ?></option>
                                       <?php foreach($cat['sub_categories'] as $sub_cat) {   ?> 
                                       <option value="<?php echo $sub_cat['id']; ?>" <?php if(!empty($_GET['category_id']) && $sub_cat['id'] == $_GET['category_id']) { echo 'selected'; } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ><?php echo $sub_cat['category_name']; ?></option>
                                       <?php foreach($sub_cat['sub_categories2'] as $sub_cat2) {   ?> 
                                       <option value="<?php echo $sub_cat2['id']; ?>" <?php if(!empty($_GET['category_id']) && $sub_cat2['id'] == $_GET['category_id']) { echo 'selected'; } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; >><?php echo $sub_cat2['category_name']; ?></option>
									   <?php }}} ?>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-4">
                                    <label for="status">Show In Active Products too</label>
                                    <input type="checkbox" class="form-control" style="margin-left:20px;width:20px" name="in_active" value="1" <?php if(!empty($_GET['in_active']) && $_GET['in_active'] == 1) { ?> checked="" <?php } ?>>
                                 </div>
                                 <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                              </div>
                           </div>
                           <!-- /.card-body -->
                        </form>
                        <div>
                           <div class="card-body">
                              
                                 <div class="row">
                                     <div class="form-group col-md-6" style="text-align:center;">
                                          Products
                                       </div>
                                       <div class="form-group col-md-6">
                                          <button type="submit" class="btn btn-primary" onclick="saveOrder()">Save</button>
                                       </div>
                                    </div>
                                 </div>
                              
                           </div>
                           <?php if(!empty($_GET['category_id'])) { ?>
                           <ul id="trackList">
                              <?php 
                                 $no  = 1;
                                 $sql = "select * from products where is_delete ='0' and category_id =".$_GET['category_id']."";
								 if(!isset($_GET['in_active'])){ 
									 $sql .= " and status = '1' "; 
								 }
								 $sql .= " order by sort asc"; 
                                 $result = $conn->query($sql);
                                 if ($result->num_rows > 0) {
                                 while($row = $result->fetch_assoc()) {
                                                                   ?>
                              <li draggable="true" data-id="<?php echo $row['id']; ?>" <?php if($row['status'] == '0'){ ?> style="background:#FF7F7F;color:#fff;" <?php } ?>><?php echo $row['product_name']; ?></li>
                              <?php }} ?> 
                           </ul>
                           <?php } ?>
                        </div>
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
         });
         
         
         const list = document.getElementById("trackList");
         let dragged = null;
         
         list.addEventListener("dragstart", e => {
           dragged = e.target;
         });
         
         list.addEventListener("dragover", e => {
           e.preventDefault();
           const target = e.target;
           if (target.tagName === "LI" && target !== dragged) {
         	const rect = target.getBoundingClientRect();
         	const next = e.clientY > rect.top + rect.height / 2;
         	list.insertBefore(dragged, next ? target.nextSibling : target);
           }
         });
         
         function saveOrder() {
           const order = Array.from(list.children).map((li, index) => ({
         	id: li.dataset.id,
         	position: index + 1
           }));
              
           fetch("<?php echo BASE_URL; ?>admin/save-product-order.php", {
         	method: "POST",
         	headers: { "Content-Type": "application/json" },
         	body: JSON.stringify(order)
           })
           .then(res => res.json())
           .then(data => alert("Product Order saved"));
         }
      </script>
   </body>
</html>