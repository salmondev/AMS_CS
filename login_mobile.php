<?php
    header ('Content-type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = hash("sha512", $password);

    $conn = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");

    $sql = "SELECT * FROM USER INNER JOIN REFER ON USER.REFERID = REFER.REFERID WHERE USER_USERNAME='$username' AND USER_PASSWORD = '$password'";
    mysqli_set_charset($conn,'utf8');
    mysqli_query($conn,"SET CHARACTER SET UTF8");
    $response = mysqli_query($conn, $sql);
    mysqli_set_charset($conn,'utf8');
    mysqli_query($conn,"SET CHARACTER SET UTF8");

    $result = array();
    $result['login'] = array();
    
    if ( mysqli_num_rows($response) === 1 ) {

        if ($row = mysqli_fetch_assoc($response) ) {
            
            $index['USER_USERNAME'] = $row['USER_USERNAME'];
            $index['REFERID'] = $row['REFERID'];
            $index['REFERNAME'] = $row['REFERNAME'];
            $index['AUTH'] = $row['AUTH'];

            array_push($result['login'], $index);

            $result['success'] = "1";
            $result['message'] = "success";
            echo json_encode($result);

            mysqli_close($conn);

        } else {

            $result['success'] = "0";
            $result['message'] = "error";
            echo json_encode($result);

            mysqli_close($conn);

        }

    }

}

?>﻿