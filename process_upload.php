
<?php
$maxFileSize = 5 * 1024 * 1024; // 10MB in bytes




if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fileToUpload'])) {
    $file = $_FILES['fileToUpload'];
   
    if ($file['error'] === UPLOAD_ERR_OK) {
        if ($file['size'] <= $maxFileSize) {
               $fileContent = file_get_contents($file['tmp_name']);

    // Send the file content to the textarea using JavaScript
    echo $fileContent;
        } else {
            // File size exceeds the limit
            echo "File size exceeds the maximum limit of 10MB.";
        }
    } else {
        // Error occurred during the upload
        echo "File upload failed.";
    }
	
	
	
   

}
?>
	