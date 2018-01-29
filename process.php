<?php 

  ini_set('error_reporting', -1);
  if($_POST['create_slides'] != ''){

	//get slide and download dir

	$d_dir = 'images/source';
	$trg_dir = 'images/target';

	$file_path = $_FILES['img']['tmp_name']; 
	if(file_exists($file_path) && is_file($file_path)){

	    //request conversion parameters
	    $img_resolution = intval($_POST['img_resolution']);
	    $img_format = $_POST['img_format']; 
	    $img_cmpquality = intval($_POST['img_cmpquality']);
	    $img_count = (intval($_POST['img_count']) > 0) ? intval($_POST['img_count']) : 1;
	    $img_name_pre = ($_POST['img_name_pre'] != '') ? $_POST['img_name_pre'] : 'slide';

	    $im = new Imagick(); 
	     

	      $im->readimage($file_path); 

	      if($img_cmpquality > 0){
	        $im->setCompressionQuality($img_cmpquality);
	      }
	      if($img_format != ''){
	        $im->setImageFormat($img_format);
	        $ext = ($img_format == 'jpeg') ? 'jpg' : $img_format ;
	      }
	      else
	      {
	        $im->setImageFormat('jpeg'); 
	        $ext = 'jpg';
	      }
	      $im->setImageColorspace(255);
	      //give unique name to each slide
	      	$uniq_sno = "001";
			
	      $filename = $img_name_pre.'_'.$uniq_sno;
	      $fullfilename = $img_name_pre.'_'.$uniq_sno.'.'.$ext;
	      $fullfilepath = $trg_dir.'/'.$img_name_pre.'_'.$uniq_sno.'.'.$ext;
	      
	      if($img_resolution != ''){
	      
	      $crop_width = $im->getImageWidth();
	        $crop_height = $im->getImageHeight();
	        $new_height = intval(($crop_height / $crop_width) * $img_resolution);
	      $im->resizeImage($img_resolution,$new_height,Imagick::FILTER_LANCZOS,1);
	      }
	      $im->writeImage($fullfilepath); 
	      $im->clear(); 
	      $im->destroy();

	      echo '<p>Images created, please find inside images/target folder.</p>'
	 
	  }
	  else{
	  	  echo '<p>Something went wrong, please try again.</p>'
	  }
}

		    
