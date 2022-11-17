



<?php 

include("include/DbConnect.php");


if (isset($_POST['id']) && !empty($_POST['id'])) {
	
	$id = intval($_POST['id']);


 	 $stmt = $pdo->query("SELECT * FROM `model` WHERE `model_id` = $id");

 	 echo "<select name='command'";

            while ($row =$stmt->fetch()) {

              echo "<option>".$row['model']."</option>";
            }

echo "</select>";
}else{
	
	echo "<select name='command' disabled><option value='0' >---Пошол найхуй----</option></select>";


}

 ?>