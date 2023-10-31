<?php

$con = mysqli_connect('localhost', 'root', '', 's8109744');

if (!$con) {
    echo "unsuccessfully ";
    die(mysqli_connect_error());
}
