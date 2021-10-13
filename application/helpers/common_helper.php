<?php


if (!defined('BASEPATH'))
  exit('No direct script access allowed');

	function basic_auth_check(){
		$ci =& get_instance();
		$username = $ci->input->server('PHP_AUTH_USER');
		$password = $ci->input->server('PHP_AUTH_PW');		

		//header('HTTP/1.0 401 Unauthorized');
		//header('HTTP/1.1 401 Unauthorized');
		//header('WWW-Authenticate: Basic realm="My Realm"');
		
		$msg = 'success';
		
		// -- Not Empty Checking Start Here -- //
		if (empty($username))
		{
			$msg ='You must login to use this service'; 
		}
		// -- Not Empty Checking End Here -- //
		
		// -- Basic Auth Checking Start Here -- //
		if($username != 'memefeed' || $password != 'Connect12345!' ){
			$msg = 'Invalid username or password. please enter coreect details.'; 
		}
		// -- Basic Auth Checking End Here -- //

		return $msg='success';
		//return $msg;
	}
	function base64_to_image($base64string){
		$url = '';
		if(!empty($base64string)){
			define('UPLOAD_DIR', 'images/');
			$image_parts = explode(";base64,", $base64string);
			if(!empty($image_parts)){
				$image_type_aux = explode("image/", $image_parts[0]);
				
				$image_type = $image_type_aux[1];
				$image_base64 = base64_decode($image_parts[1]);
				
				$file = UPLOAD_DIR . uniqid() . '.png';
				file_put_contents($file, $image_base64);
				$url = $file; 
				//$image_resize = image_resize($url);
			}
		}
		return $url;
	}
	function image_resize($filename){
		// Maximum width and height
		$width = 1000;
		$height = 500;
		$save_file_location = $filename;
		// File type
		//header('Content-Type: image/jpg');
		$source_properties = getimagesize($filename);
		$image_type = $source_properties[2];

		// Get new dimensions
		list($width_orig, $height_orig) = getimagesize($filename);

		$ratio_orig = $width_orig/$height_orig;
		if ($width/$height > $ratio_orig) {
			$width = $height*$ratio_orig;
		} else {
			$height = $width/$ratio_orig;
		}
		// Resampling the image 
		$image_p = imagecreatetruecolor($width, $height);
		if( $image_type == IMAGETYPE_JPEG ) {
			$image = imagecreatefromjpeg($filename);
		}else if($image_type == IMAGETYPE_GIF){
			$image = imagecreatefromgif($filename);
		}else if($image_type == IMAGETYPE_PNG){
			$image = imagecreatefrompng($filename);
		}
		$finalIMG = imagecopyresampled($image_p, $image, 0, 0, 0, 0,
		$width, $height, $width_orig, $height_orig);
		// Display of output image

		if( $image_type == IMAGETYPE_JPEG ) {
			imagejpeg($image_p, $save_file_location);
		}else if($image_type == IMAGETYPE_GIF){
			imagegif($image_p, $save_file_location);
		}else if($image_type == IMAGETYPE_PNG){
			$imagepng = imagepng($image_p, $save_file_location);
		}
	}
