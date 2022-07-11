<?php
  if(isset($_POST["n"])){
    for($i = 1; $i <= 10; $i++){
      echo $i . " * " . $_POST["n"] . " = " . $i*$_POST["n"];
      echo "<br>";
    }
  }
?>