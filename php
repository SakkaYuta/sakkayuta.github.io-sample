<?php
$input = intval($_GET["num"]);  // 入力値を取得する

if ($input % 15 == 0) {
  echo "Fizz Buzz";
} elseif ($input % 3 == 0) {
  echo "Fizz";
} elseif ($input % 5 == 0) {
  echo "Buzz";
} else {
  echo $input;
}
?>
