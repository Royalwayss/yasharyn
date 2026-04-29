<?php 
include_once('admin/include/config.php');  
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$trimmedPath = rtrim($path, '/');
$segments = explode('/', $trimmedPath);
$blog_url = end($segments);

$blog = getSingleRow($conn,"select * from blogs where url = '".$blog_url."' and status = '1'"); 
if(empty($blog)){
	echo "<script>window.location.href='index.php';</script>";
}

include 'includes/header.php';


 ?>
 
<style>
.blogDetail a u { color:#006a4e !important;text-decoration: none !important; }
.blogDetail ul { margin-left:30px; }
.blogDetail table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:5px;
}
.blog-meta{
    display:flex;
    gap:20px;
    font-size:14px;
    color:#555;
    margin-bottom:15px;
}

.meta-item{
    display:flex;
    align-items:center;
}

.meta-item i{
    margin-right:6px;
    color:#006a4e;
}

.blogDetail ul { width:100% !important; }
</style>
<!-- Page Title -->
<section class="page-title centred inner-pages" style="background-image: url(assets/images/background/csr.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h2><?php echo $blog['title']; ?></h2>
        </div>
    </div>
</section>
<?php include 'includes/breadcrumb.php'; ?> 
<section class="about-section csr">
    <div class="container">
        <div class="blogDetail">
            <div class="row">
                <div class="col-12">
					<div class="blog-meta">
						<span class="meta-item">
							<i class="fa fa-calendar"></i>
							Published on: <?php echo  date("M-d, Y", strtotime($blog['publication_date'])); ?>
						</span>
						<span class="meta-item">
							<i class="fas fa-clock"></i>
							<?php echo $blog['read_time']; ?>
						</span>
					</div>
				</div>
				<div class="col-12">
                    <h1><?php echo $blog['title']; ?></h1>
                </div>
                 <?php echo $blog['content']; ?>
			</div>
        </div>
    </div>

</section>

<?php include 'includes/footer.php'; ?>