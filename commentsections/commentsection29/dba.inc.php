<?php

$conn = mysqli_connect('localhost', 'root', '', 'c29');

if (!$conn) {
  die("Connectiion failed:  ".mysqli_connect_error());
}
