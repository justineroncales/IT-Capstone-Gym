
<?php

session_start();
session_destroy();
session_unset();
//pede na tanggalon tong header para mo reload sa index d naman to ka reload kay g request man cya sa gamit JS.. 
//ang JS na ang pabut on mag reload.
?>