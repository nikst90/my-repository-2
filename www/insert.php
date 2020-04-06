<?php
// Saving data from form in text file in JSON format

// check if all form data are submited, else output error message
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {
    // if form fields are empty, outputs message, else, gets their data
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
        echo 'All fields are required';
    } else {
        // adds form data into an array
        $data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'comment' => $_POST['comment'],
            'time' => date("Y-m-d H:i:s"),
        );

        $filetxt = 'comment.txt';

        $arr_data = array();        // to store all form data

        // check if the file exists
        if (file_exists($filetxt)) {
            // gets json-data from file
            $jsondata = file_get_contents($filetxt);

            // converts json string into array
            $arr_data = json_decode($jsondata, true);
        }

        // appends the array with new form data
        $arr_data[] = $data;

        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        // saves the json string in "formdata.txt" (in "dirdata" folder)
        // outputs error message if data cannot be saved
        if (file_put_contents('comment.txt', $jsondata)) {
            echo 'Data successfully saved';
        } else {
            echo 'Unable to save data in "comment.txt"';
        }
    }
} else {
    echo 'Form fields not submited';
}
header('location:hmw15.php');

