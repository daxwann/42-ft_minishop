<?php
$db_link = mysqli("localhost:1433", "root", "root", "db_minishop");

function getCats($link)
{
  $get_cats = "SELECT * FROM categories";
  $run_cats = mysqli_query($link, $get_cats);

  while ($row_cats=mysqli_fetch_array($run_cats))
  {
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
  }
}
