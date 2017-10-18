<?php

$conn = mysqli_connect('localhost', 'root', '', 'c23');

if (!$conn) {
  die("Connectiion failed:  ".mysqli_connect_error());
}
