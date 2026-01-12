<?php 
include 'includes/header.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$trimmedPath = rtrim($path, '/');
$segments = explode('/', $trimmedPath);
$blog_url = end($segments);

$blog = getSingleRow($conn,"select * from blogs where url = '".$blog_url."'");
if(empty($blog)){
	echo "<script>window.location.href='index.php';</script>";
}
 ?>
<style>
.blogDetail a u { color:#006a4e !important;text-decoration: none !important; }
.blogDetail ul { margin-left:30px; }
.blogDetail table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:5px;
}
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
                    <h1><?php echo $blog['title']; ?></h1>
                </div>
                 <?php echo $blog['content']; ?>
			</div>
        </div>
    </div>

</section>

<?php include 'includes/footer.php'; ?>