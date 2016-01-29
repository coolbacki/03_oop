<?php
require_once ('./src/counter.php');

echo ("counter ".Counter::GetNo().'<br>');

$c1 = new Counter(3, 6);
$c2 = new Counter(3, 6);
echo ("counter ".Counter::GetNo().'<br>');
$c1 = null;

echo ("counter ".Counter::GetNo().'<br>');

?>