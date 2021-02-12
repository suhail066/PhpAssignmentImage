<?php 
require_once "db.php";
$dbObj = new DB();
$db = $dbObj->db;
    $output = '';
    if(is_array($_FILES)){
	  // print_r($_FILES); die;
	  $i=1;
        foreach ($_FILES['images']['name'] as $key => $value) {
            $file_name = explode(".", $_FILES['images']['name'][$key]);
            $allowed_ext = array("jpg", "jpeg", "png", "gif");
            if(in_array($file_name[1], $allowed_ext))
            {  
                $new_name = time().'-'.$i. '.' . $file_name[1];
                $sourcePath = $_FILES['images']['tmp_name'][$key];
                $targetPath = "images/".$new_name;  
                if(move_uploaded_file($sourcePath, $targetPath))
                {  
				     $sql = "INSERT INTO `images` SET img_name='$new_name'";
                     $db->query($sql);					 
                }
            }
			$i++;
        }
	    $allimg = " Select img_name from images";
	    $show = $db->query($allimg);
	    if( $show->num_rows > 0 ){
	      while($row = $show->fetch_object()){
		  $output .= '<div class="col-md-3"><img src="images/'.$row->img_name.'" width="100%"/></div>';
		}
	   }
        echo $output;
    }
?>