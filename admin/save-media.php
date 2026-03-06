<?php 
require_once('include/config.php');
$current_time =  date('Y-m-d h:i:s');

if (!empty($_FILES['files']['name'][0])) {

    $target_dir = "../assets/images/blogs/";

    // Allowed extensions
    $allowed_extensions = ['jpg','jpeg','png','webp','gif','pdf'];

    foreach ($_FILES['files']['name'] as $key => $filename) {

        if ($_FILES['files']['error'][$key] == 0) {

            $file_tmp  = $_FILES['files']['tmp_name'][$key];
            $file_size = $_FILES['files']['size'][$key];

            $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            // Check allowed extension
            if (!in_array($extension, $allowed_extensions)) {
                continue; // skip invalid file
            }

            // Optional: limit file size (5MB)
            if ($file_size > 5 * 1024 * 1024) {
                continue;
            }

            // Generate unique name
            $new_name = time() . rand(1000,9999) . '.' . $extension;
            $target_file = $target_dir . $new_name;

            if (move_uploaded_file($file_tmp, $target_file)) {

                // Save filename + extension in database
                $insert_query = "INSERT INTO media (media_name, extension) 
                                 VALUES ('".$new_name."', '".$extension."')";
                                 
                mysqli_query($conn, $insert_query);
            }
        }
    }

    $_SESSION['_msg'] = 'Media files uploaded successfully';
}
	
echo '<script>window.location.href="media.php"; </script>'; die;


?>
