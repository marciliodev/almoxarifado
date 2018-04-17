<?php

$config['anexos']['encrypt_name'] = TRUE;
$config['pdf']['upload_path'] = './uploads/';
//$config['anexos']['allowed_types'] = 'pdf|doc|docx|odt|png|jpg|jpeg';
$config['anexos']['allowed_types'] = 'pdf|doc|docx|odt|png|jpg|jpeg|xls|xlsx';
$config['anexos']['max_size'] = '153600';

$config['modelo']['encrypt_name'] = TRUE;
$config['modelo']['upload_path'] = './uploads/modelos';
$config['modelo']['allowed_types'] = 'doc|docx|odt|xls|xlsx';
$config['modelo']['max_size'] = '4096';
