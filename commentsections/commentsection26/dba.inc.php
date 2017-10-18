<?php

$conn = mysqli_connect('localhost', 'root', '', 'c26');

if (!$conn) {
  die("Connectiion failed:  ".mysqli_connect_error());
}
