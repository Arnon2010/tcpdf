<?php
 // Initialize a file URL to the variable
//  $url = 
//  'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
   
//  // Use basename() function to return the base name of file
//  $file_name = basename($url);
   
//  // Use file_get_contents() function to get the file
//  // from url and use file_put_contents() function to
//  // save the file by using base name
//  if (file_put_contents($file_name, file_get_contents($url)))
//  {
//      echo "File downloaded successfully";
//  }
//  else
//  {
//      echo "File downloading failed.";
//  }

$url        =   'https://neilpatel.com/wp-content/uploads/2019/08/google.jpg'; 
$urlPdf     =   'http://www.africau.edu/images/default/sample.pdf';
$file_name  =   basename($url); 
 
//save the file by using base name 
if(file_put_contents( $file_name,file_get_contents($url))){
    echo "File downloaded successfully!"; 
}else{
    echo "File downloading failed!"; 
}

?>