<?php
// core configuration
include_once "config/core.php";

// set page title
$page_title="Assignments";

// include login checker
$require_login=true;
include_once "login_checker.php";

// include classes
include_once 'config/database.php';
include_once 'objects/user.php';

// include page header HTML
include_once 'layout_head.php';

echo "<div class='col-md-12'>";

// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";

// if login was successful
if($action=='login_success'){
    echo "<div class='alert alert-info'>";
    echo "<strong>Hi " . $_SESSION['firstname'] . ", welcome back!</strong>";
    echo "</div>";
}

// if user is already logged in, shown when user tries to access the login page
else if($action=='already_logged_in'){
    echo "<div class='alert alert-info'>";
    echo "<strong>You are already logged in.</strong>";
    echo "</div>";
}

// content once logged in
echo "<div>";

// get database connection
$database = new Database();
$db = $database->getConnection();

// initialize objects
$user = new User($db);

// read all users from the database
$stmt = $user->readAll($from_record_num, $records_per_page);
 
// count retrieved users
$num = $stmt->rowCount();

// to identify page for paging
$page_url="index.php?";

// include products table HTML template
include_once "read_assignments_template.php";


echo "</div>";

echo "</div>";

// footer HTML and JavaScript codes
include 'layout_foot.php';
?>