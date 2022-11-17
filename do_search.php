<?php
//получаем данные через $_POST
if (isset($_POST['search'])) {
    // подключаемся к базе
    include("include/DbConnect.php");
    $db = new db();
    // никогда не доверяйте входящим данным! Фильтруйте всё!
    $word = mysql_real_escape_string($_POST['search']);
    // Строим запрос
    $sql = "SELECT * FROM car WHERE content LIKE '%" . $word . "%' ORDER BY model LIMIT 10";
    // Получаем результаты
    $row = $db->select_list($sql);
    if(count($row)) {
        $end_result = '';
        foreach($row as $r) {
            $result         = $r['model'];
            $bold           = '<span class="found">' . $word . '</span>';
            $end_result     .= '<li>' . str_ireplace($word, $bold, $result) . '</li>';
        }
        echo $end_result;
    } else {
        echo '<li>По вашему запросу ничего не найдено</li>';
    }
}
?>