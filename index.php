<?php 
include("include/DbConnect.php");

include("include/do_search.php");
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Prime</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

</head>

<body>


<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>



<?php 
include("include/header.php");
 ?>

 <?php
include("include/block-category.php");
 ?>

 <?php
include("include/forms.php");
?>

 <?php 
include("include/footer.php");

  ?>

</body>
</html>