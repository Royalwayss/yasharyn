<?php 

include 'includes/header.php'; 
$blogs = get_blogs($conn);

?>

<!-- Page Title -->
<section class="page-title centred inner-pages" style="background-image: url(assets/images/background/csr.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h2>Blogs</h2>
        </div>
    </div>
</section>
<?php include 'includes/breadcrumb.php'; ?> 
<section class="about-section csr">
    <div class="container">
        <div class="row">
            
			<?php foreach($blogs as $blog) { ?>
			<div class="col-lg-4 col-md-6">
                <div class="blogWrap">
                    <div class="blogImg">
                        <img src="assets/images/blogs/<?php echo $blog['image'];  ?>" alt="<?php echo $blog['title']; ?>" title="<?php echo $blog['title']; ?>">
                    </div>
                    <div class="blogInfo">
                        <label><strong>Published on: <?php echo  date("M-d, Y", strtotime($blog['publication_date'])); ?></strong></label>
                        <h3 class="blog-title">
                            <?php echo $blog['title']; ?>
                        </h3>
                        <p><?php echo $blog['short_description'];  ?></p>
                        <a class="theme-btn btn-one" href="<?php echo $blog['url'];  ?>">Read More</a>
                    </div>
                </div>
            </div>
			<?php } ?>
		
		</div>
    </div>

</section>

<?php include 'includes/footer.php'; ?>