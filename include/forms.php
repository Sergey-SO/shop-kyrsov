
<?php 
include("include/do_search.php");
 ?>

 

<style type="text/css">
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    font-family: Arial,Helvetica,sans-serif;
}

label {
    padding: 12px 12px 12px 10px;
    display: inline-block;
    font-family: Arial,Helvetica,sans-serif;
    float: left;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 15px 121px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    float: right;
      font-family: Arial,Helvetica,sans-serif;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
	width: 900px;
	margin-left: auto;
    margin-right: auto;
    border-radius: 25px ;
    background-color: #f2f2f2;
    border: 1px solid red;
    padding: 25px;
}

.col-25 {
    
    width: 110%;
    margin-top: 6px;
   
}

.col-75 {
  
    width: 195%;
    margin-top: 6px;
 
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
  
}


.test{
	float: left;
}
.object{
	float: left;
	margin-left: 240px;
	width: 20%;
}
.object2{


margin-left: 350px;
 
  padding: 50px;


}

@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
<br>
<br>
<br>

<div class="form">
<br>
<br>
	
	<h2>В честных продавцов и каменты норм</h2>
<p>"Автомобиль — не роскошь, а средство передвижения"
</p>

<div class="container">

  <form method="post" action="do_search.php">
  	<div class="test">
    <div class="row">
      <div class="col-25">
        <label for="fname">Кузов</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Легковые</option>
          <option value="canada">Мото</option>
          <option value="usa">Грузовики</option>
           <option value="australia">Легковые</option>
          <option value="canada">Прицепы</option>
          <option value="usa">Спецтехника</option>
            <option value="usa">Грузовики</option>
           <option value="australia">Автобусы</option>
          <option value="canada">Сельхозтехника</option>
          <option value="usa">Водный транспорт</option>
          <option value="usa">Автодома</option>


        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Марка</label>
      </div>
      <div class="col-75">

<?php  

                       $stmt = $pdo->query("SELECT marka FROM `car` ORDER BY id  ");


echo '<select id="country" name="country" class="country">';
 echo '<option value="marka id="ff"></option>';
while($row = $stmt->fetch(PDO::FETCH_BOTH)){


 echo '<option value="marka" id="rt"> '.$row['marka'].'</option>';
                                               
                        }
                        
                         echo '</select>';




?>

      </div>
    </div>
 <div class="row">
      <div class="col-25">
        <label for="country">Модель</label>
      </div>
      <div class="col-75">

       <input type="text" name="">

      </div>


    </div>



   
      <div class="row">
      <div class="col-25">
        <label for="country">Регион</label>
      </div>
      <div class="col-75">

       
<?php  

                       $stmt = $pdo->query("SELECT gorod FROM `region` ORDER BY id  ");


echo '<select id="country" name="country" class="country">';
 echo '<option value="gorod id="ff"></option>';
while($row = $stmt->fetch(PDO::FETCH_BOTH)){


 echo '<option value="gorod" id="rt"> '.$row['gorod'].'</option>';
                                               
                        }
                        
                         echo '</select>';




?>

      </div>


    </div>
</div>















<div class="object">

	<div class="row">
      <div class="col-25">
        <label for="country">Год</label>
      </div>
      <div class="col-75">
        <table>
    <tr>
        
        <td>
             
<input type="text" name="">
      </td>
    
   
       
        <td>
         <input type="text" name="">
        </td>
    </tr>
</table>
      </div>

    </div>

</div>

<div class="object2">

<div class="row">
      <div class="col-25">
        <label for="country">Цена, $</label>
      </div>
      <div class="col-75">
        <table>
    <tr>
        
        <td>
        <?php  

                       $stmt = $pdo->query("SELECT price FROM `price` ORDER BY id  ");


echo '<select id="country" name="country" class="country">';
echo ' <option value="0">От</option>';
 echo '<option value="price id="ff"></option>';
while($row = $stmt->fetch(PDO::FETCH_BOTH)){


 echo '<option value="price" id="rt"> '.$row['price'].'</option>';
                                               
                        }
                        
                         echo '</select>';




?>
      </td>
    
   
       
        <td>
          <?php  

                       $stmt = $pdo->query("SELECT price FROM `price` ORDER BY id  ");


echo '<select id="country" name="country" class="country">';
echo ' <option value="0">До</option>';
 echo '<option value="price id="ff"></option>';
while($row = $stmt->fetch(PDO::FETCH_BOTH)){


 echo '<option value="price" id="rt"> '.$row['price'].'</option>';
                                               
                        }
                        
                         echo '</select>';




?>
        </td>
    </tr>
</table>
      </div>

    </div>

</div>
<br>
<br>
<div class="obyava">

  <a href=""><span>→</span><span>+</span>Продать авто
        <span>←</span></a>
</div>

<div class="row">
      <input type="submit" value="Поиск" class="search_button">
    </div>
 
    
  </form>
  
</div>






<table class="table">
  <thead>
    <tr>
 <td>ID;</td>

<td>Название книги</td>

<td>Автор</td>

    </tr>

  </thead>
  <tbody>


<?php 

$stmt = $pdo->query("SELECT * FROM  `model`
  LEFT JOIN car ON model.model_id = car.id ");

$stmt->execute();

if($stmt->rowCount() > 0){

    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
       echo "<tr>\n<td>".$row["id"]."</td>"."\n"."<td>"."".$row["marka"]."

</td>"."\n"."<td>"."".$row["model"]."</td>"."\n"."</tr>"."\n";
    }
}
 ?>





</tbody>
</table>


    


</div>