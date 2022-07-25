<?php
$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/laravel/storage/app/public';
echo $targetFolder."<br>";
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
 symlink($targetFolder,$linkFolder);
echo $linkFolder;
// echo 'Symlink process successfully completed';
?>
