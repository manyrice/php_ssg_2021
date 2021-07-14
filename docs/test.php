<meta charset="UTF-8">
<?php
$name = $_GET['name'];
$age = $_GET['age'];

if ($age < 20) {
  echo "넌 들어오지마!";
  exit;
}
?>

안뇽. 나는 <?=$age?>살이고, <?=$name?>이라고 해.
