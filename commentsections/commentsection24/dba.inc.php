<?php

$conn = mysqli_connect('localhost', 'root', '', 'c24');

if (!$conn) {
  die("Connectiion failed:  ".mysqli_connect_error());
}
