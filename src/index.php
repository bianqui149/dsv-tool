<?php
include_once('./dsv.php');
$directory = @scandir('./dsv_files/');
echo dsv_file_expresssion('dsv_files/example.dsv');

