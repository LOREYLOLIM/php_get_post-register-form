<?php
$connect = mysqli_connect('localhost', 'root', '', 'registerform');

if ($connect) {
    echo '';
}else(
    die('No Connection' .mysqli_error($connect))
)

?>