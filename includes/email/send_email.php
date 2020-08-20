<?php
    //Debug - this will output that the form has failed every time - check the javascript console for debug
//    print_r($_POST);

    $rooms = array();
    $files = array();

    //Split rooms from array
    foreach($_POST as $key => $value) {
        if(strpos($key, "room")) {
            $rooms[$key] = $value;
            unset($_POST[$key]);
        }
    }

    //Split files from array
    foreach($_POST as $key => $value) {
        if(strpos($key, "files") && $value !== "") {
            $files[$key] = $value;
            unset($_POST[$key]);
        }
    }

//    $email_to =   'info@wemoveandclean.co.uk';
    $email_to =   'cw@planalink.com';
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    unset($_POST['subject']);

    $message = "";
    foreach($_POST as $key => $value) {
        if($value !== "") {
            $value = ($value == "on" ? "Yes" : $value);
            $message .= ucfirst(str_replace("_", " ", $key)) . ": " . $value . "\r\n";
        }
    }

    if(count($rooms) > 0) {
        $message .= "\r\nRooms:\r\n";
        foreach ($rooms as $room => $val) {
            if ($room == "other_rooms" && !empty($val)) {
                $message .= "\n\tOther Rooms: \r\n" . "\t\t" . $val;
                continue;
            }
            $message .= "\t" . ucfirst(str_replace("_", " ", $room)) . "\r\n";
        }
    }

    if(count($files) > 0) {
        $uploaddir = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on" ? "https://" : "http://") . $_SERVER['SERVER_NAME'] . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
        $message .= "\r\nFiles Attached:\r\n";
        foreach($files as $fileList => $list) {
            $message .= "\t" . ucfirst(str_replace("_", " ", $fileList)) . "\r\n";
            $list = json_decode($list, true);
            foreach($list as $file) {
                $message .= "\t\t" . $uploaddir . $file . "\r\n";
            }
        }
    }

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($email_to, $subject, wordwrap($message, 70, "\r\n"), $headers)) {
        echo 'sent';
    } else {
        echo 'failed';
    }
