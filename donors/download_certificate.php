<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $id = $_GET['id'];
    $filename = $name . '_' . $id . '.pdf';
    $filepath = "../admin/certificates/" . $filename;

    if (file_exists($filepath)) {
        
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Content-Length: ' . filesize($filepath));

        
        readfile($filepath);
        exit; 
    } else {
        
        die('Error: File not found , please contact the admin!');
    }
} else {
    
    die('Invalid request.');
}
?>