<?php
//By G A Rubayat Hyder
//A17CS5335
    session_start();

    function isLoggedIn() {
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
