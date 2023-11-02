<?php

  include_once'coocki/coocki.php';

  $coocki = new \coocki\Vid();
  $tuk = new \coocki\Vid();
  $krec = new \coocki\Vid();
  // echo $coocki->getType();

  // $coocki->setType('Крекеры');
  // echo $coocki->getType();
 

?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
  <?php   $coocki->setType('Сдобное');
          $tuk->setType('Затяжное');
          $krec->setType('Крекеры');
  ?>
  <p><?php echo $coocki->getType();?></p>
  <p><?php echo $tuk->getType();?></p>
  <p><?php echo $krec->getType();?></p>
</div>