

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'helpers.php';
require_once 'source/init.php';
require_once 'function.php';
require_once 'data.php';

if (!$link) {
  $error = mysqli_connect_error();
  $content = include_template('error.php', ['error' => $error]);
}
else {
  // запрос на получение списка категорий
  $sql = 'SELECT cat_name, cat_id FROM categories';
  $result = mysqli_query($link, $sql);

    if ($result){
    $categories = mysqli_fetch_all($result, mode: MYSQLI_ASSOC);
    }
    else {
    $error = mysqli_error($link);
    $content = include_template('error.php', ['error' => $error]);
  }

  // запрос на показ лотов
   $sql = 'SELECT l.name, l.start_price, l.img_link, MAX(b.price) AS max_price, c.cat_name FROM lots l '
   . 'LEFT JOIN bet b ON l.id = b.lot_id '
   . 'JOIN categories c ON l.category_id = c.id '
   . 'WHERE l.end_date > NOW() '
   . 'GROUP BY l.id '
   . 'ORDER BY l.сreated_at DESC LIMIT 6 ';

   if ($res = mysqli_query($link, $sql)){
      $lots = mysqli_fetch_all($res, mode: MYSQLI_ASSOC);
      $content = include_template('main.php', ['lots' => $lots]);
   }
   else {
      $content = include_template('error.php', ['error' => mysqli_error($link)]);
}
}
print(include_template('layout.php', ['content' => $content, 'categories' => $categories,'title' => 'Главная страница']));
