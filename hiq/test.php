<?php  
require_once('getDept.php');

$obj = new getDept;

$obj->setData($_GET['cond']);

$dept = $obj->get_the_dept();

echo 'Condition : '.$_GET['cond'].'<br />';
echo 'Department : '.$dept;
?>