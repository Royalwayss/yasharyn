<?php

 include 'includes/header.php';
 
 $get_category = get_category($conn,@$_GET['category_id']);  
 
 if(empty($get_category['status'])){
	 echo "<script>window.location.href='".BASE_URL."';</script>";
 }else{
	
	
	 $filter_data = [];
	 $selected_size = [];
	 if(isset($_GET['size']) && !empty($_GET['size'])){
		 $selected_size = explode(',',$_GET['size']);
		 $filter_data['size']=  $selected_size;
	 }
	 
	 $selected_weights = [];
	 if(isset($_GET['weight']) && !empty($_GET['weight'])){
		 $selected_weights = explode(',',$_GET['weight']);
		 $filter_data['weight']=  $selected_weights;
	 }
 
	
	
	
	
	
	$category =$get_category['category']; 
	$sub_categories =$category['sub_categories']; 
	$products =get_products($conn,$category['id'],$filter_data);  
 }
 
 
 $sizes = product_size_filter($conn,$category['id']);
 $weights = product_weight_filter($conn,$category['id']);
 
 
 
 
 $category_id = $category['id'];
 
 $category_image = '';
 if(empty($category['parent_id']) && $category['category_image'] != ''){
	 $category_image = $category['category_image'];
 }
 
 
if(!empty($category['parent_id'])){
 $get_main_category = get_main_category($conn,@$category['parent_id']);
 if(!empty($get_main_category) && $get_main_category['category_image'] != ''){
	 $category_image = $get_main_category['category_image'];
 }
 
}
 
 
 
 ?>

<!-- Page Title -->
        <?php if(!empty($category_image)) { ?>
		<section class="page-title centred inner-pages" style="background-image: url(assets/images/category/<?php echo $category_image ?>);">
            <div class="auto-container">
                <div class="content-box">
                    <h2><?php echo $category['category_name']; ?></h2>
                </div>
            </div>
        </section>
        <!-- End Page Title -->
		<?php  } ?>

         <!-- shop-page-section -->
         <section class="shop-page-section product-listing">
            <div class="auto-container">
                
				
				
				
				        <div class="row clearfix" style="align-items:center">
                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group" >
                                       <label style="font-weight:600; font-size:16px; color:#000;">Category</label>
									   <select class="form-control" id="filter-category" >
										        <option value="">Select Category</option>
										        <?php foreach($categories as $cat) { ?>
												<option value="<?php echo $cat['id']; ?>" <?php if($category['id'] == $cat['id']){ echo 'selected'; } ?> ><?php echo $cat['category_name']; ?></option>
												 <?php foreach($cat['sub_categories'] as $sub_cat) { ?>
												 <option value="<?php echo $sub_cat['id']; ?>" <?php if($category['id'] == $sub_cat['id']){ echo 'selected'; } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -<?php echo $sub_cat['category_name']; ?></option>
												<?php }} ?>
                                        </select>
										
                                    </div>
									
									
									<div class="col-lg-2 col-md-2 col-sm-12 form-group" >
                                        <label style="font-weight:600; font-size:16px; color:#000;">Size</label>
									   <select class="form-control" id="filter-size" multiple >
										        <option value="">Select Size</option>
										        <?php foreach($sizes as $size) { ?>
												<option value="<?php echo $size; ?>" <?php if(in_array($size,$selected_size)){ echo 'selected'; } ?> ><?php echo $size; ?></option>
												
												<?php } ?>
                                        </select>
										
                                    </div>
									
									<div class="col-lg-2 col-md-2 col-sm-12 form-group" >
                                       <label style="font-weight:600; font-size:16px; color:#000;">Weight</label>
									   <select class="form-control" id="filter-weight" multiple >
										        <option value="">Select Wight</option>
										        <?php foreach($weights as $weight) { ?>
												<option value="<?php echo $weight; ?>" <?php if(in_array($weight,$selected_weights)){ echo 'selected'; } ?>  ><?php echo $weight; ?></option>
												
												<?php } ?>
                                        </select>
										
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group d-flex mb-0">
                                        <div class="btn-box filter-new-button">
                                    <a href="javascript:;" id="product_filter" class="theme-btn btn-one">FIlter</a>
                                </div>
                                    </div>
									
									
									
									
									
									
                         </div>
                         <!-- <div class="row" style="justify-content: center;">
						     <div class="btn-box">
                                    <a href="javascript:;" id="product_filter" class="theme-btn btn-one">FIlter</a>
                                </div>
                         </div>
				
				 -->
				
				
				
				
				
				
				
				
				<div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar default-sidebar">
                            <div class="sidebar-widget sidebar-category">
                                <div class="widget-title">
                                    <h3><?php echo $category['category_name'];  ?></h3>
                                </div>
                                <div class="widget-content">
                                    <?php if(!empty($sub_categories)){ ?>
									<ul class="category-list clearfix">
                                        <?php 
										foreach($sub_categories as $sub_category) {
										if($category['id'] != $sub_category['id']){ 
										?>
										<li><a  href="products.php?category_id=<?php echo $sub_category['id']; ?>"><i class="far fa-long-arrow-right"></i><?php echo $sub_category['category_name']; ?></a></li>
										<?php }} ?>
                                    </ul>
									<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="our-shop">
                            <div class="item-shorting clearfix">
                                <?php $product_count = count($products);?>
								<div class="left-column pull-left clearfix">
                                    <div class="text"><p>Showing <?php echo $product_count; if($product_count > 1){ echo ' products'; } else {  echo ' product';  } ?></p></div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <?php foreach($products as $product){ ?>
								<div class="col-lg-4 col-md-4 col-sm-12 shop-block">
                                    <div class="shop-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                                        <div class="inner-box">
                                            <?php if($product['image']) { ?>
											<figure class="image-box"><img src="assets/images/product/list/<?php echo $product['image']; ?>" alt=""></figure>
                                            <?php } ?>
											<div class="lower-content">
                                            <span><?php echo $product['size'] ; ?></span>
								               <h4><a href="product_details.php?id=<?php echo $product['id']; ?>"><?php echo $product['product_name']; ?></a></h4>
											  <?php /* <h6>INR 70.00</h6> */ ?>
                                                <a href="product_details.php?id=<?php echo $product['id']; ?>" class="theme-btn btn-two">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" /></script>
<script>
 $(document).ready(function() {
      
      $('select').niceSelect('destroy');
	  $('#filter-category').select2();
	  $('#filter-size').select2();
	  $('#filter-weight').select2();
	   

      $('#filter-category').on('change', function() {
            var selectedValue = $(this).val();
            if(selectedValue != ''){
			   window.location.href="products.php?category_id="+selectedValue;
            }
        });


       $('#product_filter').on('click', function() { 
	      var category_id = '<?php echo $category_id; ?>';
		  var size = $('#filter-size').val();
	      var weight = $('#filter-weight').val();
		  if(size == null){ size = '';  }
		  if(weight == null){ weight = '';  }
		  window.location.href="?category_id="+category_id+"&size="+size+"&weight="+weight;
		  
        });
	 
    });
</script>
