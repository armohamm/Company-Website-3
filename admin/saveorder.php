<?php
$orderlist = explode(',', $_POST['order']);
foreach ($orderlist as $k=>$order) {
  echo 'Sijainnissa ' . $k . ' on referenssi ' . $order . ", ";
}     
?>