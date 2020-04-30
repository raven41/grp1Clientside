<?php

// Login checker for 'Customer' access lvl

// if access lvl was not 'Admin', redirect them to login page
if (isset($_SESSION['access_level']) && $_SESSION['access_level']=="Admin") {
    header("Location: {$home_url}admin/index.php?action=logged_in_as_admin");
}

// if $reguire_logion was set and value is 'true'
elseif (isset($require_login) && $require_login == true) {
    //if user not yet logged in, redirect to login page
    if (!isset($_SESSION['access_level'])) {
        header("Location: {$home_url}login.php?action=please_login");
    }
}

// if it was the 'login or 'register' or 'sign up' page but the customer was already logged in
elseif (isset($page_title) && ($page_title == "Login" || $page_title == "Sign Up")) {
    //if user not yet logged in, redirect to login page
    if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Customer"){
        header("Location: {$home_url}index.php?action=already_logged_in");
    }
}

else {
    // no problem, stay on current page
}