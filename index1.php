<?php

class PostOffice{
	function mailFiler(){
		$handle = fopen('string.txt', "r");
        $contents = '';
        if ($handle) {
            while (!feof($handle)) {
              $contents .= fread($handle, 100); //顯示100字  
              echo $contents;
              exit;
            }
        fclose($handle);
        }
	}
	function mailRegex(){
		$handle = fopen('string.txt', "r");
        $contents = '';
        if ($handle) {
            while (!feof($handle)) {
              $contents .= fread($handle, 100); 
              $standard_E = "/^([0-9A-Za-z]+)$/";
              if(preg_match($standard, $contents, $standard_E)) {

                 return 1;

              } else {

                 return 0;

              }
              exit;
            }
        fclose($handle);
        }
	}
	function spiltroad(){
		$handle = fopen('road.txt', "r");
		$contents = '';
        if ($handle) {
            while (!feof($handle)) {
              $contents .= fread($handle, 500); 
              echo mb_substr($test,'區','路','UTF-8');
              exit;
            }
        fclose($handle);
        }
	}

}
header("Content-Type:text/html; charset=utf-8");
$obj= new PostOffice;

$obj->spiltroad();

    
?>