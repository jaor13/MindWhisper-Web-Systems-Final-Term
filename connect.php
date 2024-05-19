<?php
        $hostname = "localhost";
        $dbUser = "root";
        $dbPassword = "";
        $dbName = "login";

        $conn = new mysqli($hostname, $dbUser, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
