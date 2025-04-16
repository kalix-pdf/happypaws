<?php
// For security: only allow expected files
$allowed_dir = realpath("catalog/controller/account/customerpartner/download_inv/");
$filename = basename($_GET['file']); // Safe filename
$filepath = realpath($allowed_dir . '/' . $filename);

// Check if file exists and is inside allowed directory
if ($filepath && strpos($filepath, $allowed_dir) === 0 && file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    readfile($filepath);
    exit;
} else {
    echo "File not found or access denied.";
}
