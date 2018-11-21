//Pseudokod/kod pomocniczy:
<?php
$menu = array('kategoria_1.php'=>'Kategoria_1', ...);
foreach ($menu as $key => $value):
?>
  <li><a href="<?php echo $key?>"><?php echo $value?></a></li>
<?php endforeach ?>