<?php
  $name = $_POST['name'];
  $classroom = $_POST['class'];
  if (isset($name) && isset($classroom)) {
      echo $name;
      echo '<br />';
      echo $classroom;
  }
