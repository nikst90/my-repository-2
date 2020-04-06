<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $file = 'comments.txt';
    $info = array(
        'username' => $username,
        'email' => $email,
        'comment' => $comment,
        'time' => date("Y-m-d H:i:s")
    );

    $arrdata = array();

    if (file_exists($file)) {
        $jsondata = file_get_contents($file);
        $arrdata = json_decode($jsondata, true);
    }

    $arrdata[] = $info;
    $infosend = json_encode($arrdata, JSON_PRETTY_PRINT);
    file_put_contents($file, $infosend);
}