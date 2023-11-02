<?php

$con = mysqli_connect('localhost', 'root', '', '');

if (!$con) {
    echo "unsuccessfully ";
    die(mysqli_connect_error());
}
