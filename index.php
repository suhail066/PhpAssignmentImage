<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
require_once "db.php";
$dbObj = new DB();
$db = $dbObj->db;
?>
<div class="container">
  <h1>PHP Assignment</h1>
  <div class="input-group">
  <div class="form-outline">
    <input type="text" id="no_of_img" class="form-control" />
  </div>
  <button type="button" class="btn btn-primary" onClick= "addImagesFields()">Submit</button>
</div>
<div class="image-section">
<h2>Browse Image</h2>
<div id="browse" class="col-md-4">

</div>
<h3>All Images</h3>
<div id="allimages" class="col-md-12">
<?php 
$sql = " Select img_name from images";
$show = $db->query($sql);
if( $show->num_rows > 0 ){
   while($row = $show->fetch_object()){ ?>
   <div class="col-md-3">
    <img src="images/<?php echo $row->img_name; ?>" width="100%">
   </div>
   
<?php     
   }
}
?>

</div>
</div>
</div>
<script type="text/javascript">
function addImagesFields(){
   var totalimg = document.getElementById("no_of_img").value;
   var html = '';
   html = "<form class='form-horizontal' id='submitform' method='post' enctype='multipart/form-data'>";
   if(totalimg > 0){
    for(i=1; i<=totalimg; i++){
      html +="<input type='file' name='images[]' class='form-control addImages'>";
    }
	html +="<button type='submit' class='btn btn-success btn-sm'>Upload</button></form>";
	document.getElementById("browse").innerHTML=html;
}else{
   alert('please enter some value');
 }
}

$(document).ready(function(){ 
$(document).on('submit', '#submitform', function(e){
	e.preventDefault();
//alert('hello upload');
	$.ajax({
		url : "upload.php",
		type : "post",
		data : new FormData(this),
		contentType:false,
		processData:false,
		success: function(data){
		     console.log(data);
			//$("#showimages").html(data);
			//alert(data);
			$('#allimages').empty();
			$('#allimages').html(data);
			$('#submitform').trigger("reset");
		}

	});
});
});


</script>
</body>
</html>