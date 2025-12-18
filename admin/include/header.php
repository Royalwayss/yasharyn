<?php
session_start();
if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_name'])){ 
	echo '<script>window.location.href="index.php"; </script>'; die;
}

$currentPage= basename($_SERVER["SCRIPT_FILENAME"]); 
 ?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Welcome <strong></strong></a>
    </li>
   
    <li class="nav-item d-none d-sm-inline-block">
      <a href="logout.php" class="nav-link">Logout</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="javascript:;" class="brand-link" style="background-color:#fff; border:0px !important;">
    <img src="<?php echo SITE_LOGO; ?>" alt="Logo" class="brand-image" style="width:100px; height:auto; max-height:100% !important; border:0px !important;">
   <!-- <span class="brand-text font-weight-light">Admin Panel</span>  -->
  </a>

  <!-- Sidebar -->
  <div class="sidebar"  style="margin-top:100px;">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
       
          <img src="assets/images/no-image.png" class="img-circle elevation-2" alt="User Image"> 
        
      </div>
      <div class="info">
        <a href="javascript:;" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <?php
				  $module_sql = 'select * from `modules` order by `sort` asc';
	
					$module_result = $conn->query($module_sql); 
					
					if ($module_result->num_rows > 0) {  
                     while ($module_row = $module_result->fetch_assoc()) { 
                     $admin_access = admin_access($conn,$module_row['id']); 
					  if($admin_access['view'] == 1){
					 ?>
					     
						 <li class="nav-item">
							<a href="<?php echo $module_row['page_link']; ?>" class="nav-link <?php if($currentPage == $module_row['page_link']) { echo 'active'; } ?>">
							  <i class="nav-icon fas fa-th"></i>
							  <p style="font-size:15.5px !important">
								<?php echo $module_row['module_name']; ?>
							  </p>
							</a>
						  </li>
      
					  <?php } } } ?>
     
      
      
     
		  

           
			
			<?php if($_SESSION['admin_type'] == 1){ ?>
			<li class="nav-item">
			<a href="subadmins.php" class="nav-link <?php if($currentPage == 'subadmins.php') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-th"></i>
              <p style="font-size:15.5px !important">
                Subadmins
              </p>
            </a>
				
		  </li>
			<?php } ?>
			
			
			
			
			
		
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>