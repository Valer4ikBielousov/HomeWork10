<?php
$files = $_FILES;

echo "<pre>";
print_r($files);
echo "<pre>";

$uploads_dir = 'files';
$phpFileUploadErrors = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);
if ($files) {
    foreach ($files as $file) {
        if (is_array($file['name'])) {
            foreach ($file['name'] as $key => $filemultiply) {
                if (($file['error'][$key])) {
                    echo($phpFileUploadErrors[$file['error'][$key]]);
                    exit;
                }
                $filename = $file['name'][$key];
                $tmp_name = $file['tmp_name'][$key];
                if (!is_dir($uploads_dir)) {
                    mkdir($uploads_dir, 0700);
                }
                move_uploaded_file($tmp_name, "$uploads_dir/$filename");
            }
        } else {
            if (($file['error'])) {
                echo($phpFileUploadErrors[$file]['error']);
                exit;
            }
            $filename = $file['name'];
            $tmp_name = $file['tmp_name'];
            if (!is_dir($uploads_dir)) {
                mkdir($uploads_dir, 0700);
            }
            move_uploaded_file($tmp_name, "$uploads_dir/$filename");
        }
    }
}
    

