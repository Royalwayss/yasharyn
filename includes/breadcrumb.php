<section id="breadcrumb-section">
		<nav class="breadcrumb-wrap" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo BASE_URL; ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
				</li>

			
					
					   <?php if($currentPageName == 'contact-us.php') { ?>
						 <li class="breadcrumb-item"> <a href="javascript:;">Contact US</a> </li>
					   <?php }else if($currentPageName == 'about-us.php'){ ?>
					       <li class="breadcrumb-item"><a href="javascript:;">About US</a></li>
					  <?php }else if($currentPageName == 'infrastructure.php'){ ?>
					       <li class="breadcrumb-item"><a href="javascript:;">Infrastructure</a></li>
					  <?php }else if($currentPageName == 'csr.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">Corporate Social Responsibility</a></li>
					  <?php }else if($currentPageName == 'clients.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">Clients</a></li>
					  <?php }else if($currentPageName == 'our-events.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">Our Events</a></li>
					  <?php }else if($currentPageName == 'blogs.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">Blogs</a></li>
					  <?php }else if($currentPageName == 'blog-detail.php'){ ?>
							<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>blogs.php">Blogs</a></li>
							<li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>blogs.php"><?php echo $blog['title']; ?></a></li>
					  <?php }else if($currentPageName == 'jobs-and-career.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">Jobs and Career</a></li>
					   <?php }else if($currentPageName == 'products.php'){ 
					      foreach($getCategoryBreadcrumb as $CategoryBreadcrumb){ 
					   ?>
							<li class="breadcrumb-item"><a href="<?php echo BASE_URL.'category/'.$CategoryBreadcrumb['id'].'/'.$CategoryBreadcrumb['category_url'] ?>"><?php echo $CategoryBreadcrumb['category_name']; ?></a></li>
							
						  <?php } }else if($currentPageName == 'ttttt.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">testtt</a></li>
					   <?php }else if($currentPageName == 'ttttt.php'){ ?>
							<li class="breadcrumb-item"><a href="javascript:;">testtt</a></li>
					   
					   
					   
					   <?php } ?>
						
					</li>
				

				
			</ol>
	  </nav>
     </section>