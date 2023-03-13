<?php

session_start();

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    if ( empty( $name ) || empty( $email ) || empty( $password ) ) {
        die( "Error: Must fillup the required fields." );
    }
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        die( "Error: Invalid email address." );
    }
    if ( isset( $_FILES["profile_image"] ) ) {
        $target_dir = "uploads/";
        $target_file = $target_dir . date( "YmdHis" ) . "_" . basename( $_FILES["profile_image"]["name"] );
        if ( move_uploaded_file( $_FILES["profile_image"]["tmp_name"], $target_file ) ) {
            $file = fopen( "users.csv", "a" );
            fputcsv( $file, array( $name, $email, $target_file ) );
            fclose( $file );
            setcookie( "username", $name, time() + 86400 );
            header( "Location: display.php" );
            exit();
        } else {
            die( "Failed to upload profile picture." );
        }
    } else {
        die( "Profile picture is required." );
    }
}
?> 
