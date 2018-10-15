<?php 
$json_url = "http://localhost/betaar/"; //change the url to your needs
$data = file_get_contents($json_url); //Get the content from url
$json = json_decode($data, true); //Decodes string to JSON Object
$data_to_save=$json["url"]; //Change url to whatever key you want value of
$file = 'm3u8.txt'; //Change File name to your desire
file_put_contents($file, $data_to_save); //Writes to File
?>