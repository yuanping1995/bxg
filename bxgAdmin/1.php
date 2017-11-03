<?php
$num = 0;
echo 1/$num;
try {


    echo 1/$num;
      } catch (Exception $e){
    echo $e->getMessage();
}
