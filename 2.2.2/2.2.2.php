<?php 
 if(isset($_FILES)) {
    $uploadOk = 1;
    
    $theFile = $_FILES['uploadedFile']['tmp_name'];

    $fileName = $_FILES['uploadedFile']['name'];
    $fileType = mime_content_type($theFile);
    $fileSize = filesize($theFile);

    if ($fileSize < 1000000)
    {
        if ($fileType == "text/plain") {
            header('Content-type:' . $fileType);
            print file_get_contents($theFile);
            unlink($theFile);
        } else if ($fileType == "image/jpeg") {
            header('Content-type:' . $fileType);
            $imageJPEG = imagecreatefromjpeg($theFile);
            imagejpeg($imageJPEG);
            imagedestroy($imageJPEG);
            unlink($theFile);
        } else if ($fileType == "image/png") {
            header('Content-type:' . $fileType);
            $imagePNG = imagecreatefrompng($theFile);
            imagepng($imagePNG);
            imagedestroy($imagePNG);
            unlink($theFile);
        } else {
            printFileInfo($fileName, $fileType, $fileSize);
        }
    } else {
        printFileInfo($fileName, $fileType, $fileSize);
    }   
} else {
    echo "File upload failed!";
    $uploadOk = 0;
}

function printFileInfo($fileName, $fileType, $fileSize) {
    echo "Name: " . $fileName . "<br>";
    echo "Type: " . $fileType . "<br>";
    echo "Size: " . $fileSize;
}
?>
