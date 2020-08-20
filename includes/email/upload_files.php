<?php
    $output = array();
    $error = false;
    $uploaddir = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;

//    set_error_handler("warning_handler", E_WARNING);

    foreach($_FILES as $file) {
        $file['name'] = str_replace(" ", "-", $file['name']);

        if(file_exists($uploaddir . basename($file['name']))) {
            $append = 1;
            while (file_exists($uploaddir . pathinfo($file['name'], PATHINFO_FILENAME) . "-" . $append . "." . pathinfo($file['name'], PATHINFO_EXTENSION))) {
                $append++;
            }
            $file['name'] = pathinfo($file['name'], PATHINFO_FILENAME) . "-" . $append . "." . pathinfo($file['name'], PATHINFO_EXTENSION);
        }

        if(move_uploaded_file($file['tmp_name'], $uploaddir . basename($file['name']))) {
            $output[] = $file['name'];
        }
    }

//    function warning_handler($errno, $errstr) {
//        echo json_encode(array("errno" => $errno, "errstr" => $errstr));
//    }

    echo json_encode($output);