<?php  include 'includes/header.php'; ?>

<style>
/* Simple styling matching Yasharyn color scheme */
.error-container {
    text-align: center;
    padding: 100px 20px;
    font-family: Arial, sans-serif;
}

.error-code {
    font-size: 100px;
    font-weight: bold;
    color: #EB1C24;
	margin-bottom: 40px !important;
}

.error-message {
    font-size: 22px;
   
    color: #333;
}

.error-subtext {
   
	margin-bottom: 40px !important;
    color: #555;
}

.error-btn {
   
    text-decoration: none;
    background: #EB1C24;
    color: #fff;
    padding: 12px 30px;
    font-size: 16px;
    border-radius: 4px;
    transition: 0.3s;
}

.error-btn:hover {
    background: #c5151a;
}
</style>

<div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Oops! Page Not Found</div>
    <div class="error-subtext">Sorry, the page you are looking for doesn't exist or has been moved.</div>
   
    <a class="theme-btn btn-one" href="<?php echo BASE_URL; ?>">Go Back To Home</a>
</div>


<?php include 'includes/footer.php'; ?>