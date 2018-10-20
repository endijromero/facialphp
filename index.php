<?php
	require ('Face_Detector.php');	
    $detector = new Face_Detector('detection.dat');  
    $detector->face_detect('FOTO.jpg');  
    $detector->toJpeg();  
?>