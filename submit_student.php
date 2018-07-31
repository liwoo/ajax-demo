<?php
  $name = $_POST['name'];
  $class = $_POST['class'];

  if (isset($name) && isset($class)) {
      echo json_encode(['name' => $name, 'class' => $class]);
  }
