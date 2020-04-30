<?php
// display the table if the number of assignments retrieved was greater than zero
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>Assignment</th>";
        echo "<th>Description</th>";
        echo "<th>Course(s)</th>";
        echo "<th>Created</th>";
        echo "<th>Deadline</th>";
    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            /*echo "<td>{$ass_name}</td>";
            echo "<td>{$ass_desc}</td>";
            echo "<td>{$course_name}</td>";
            echo "<td>{$created_at}</td>";
            echo "<td>{$ass_deadline}</td>";*/
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="index.php?";
    $total_rows = $user->countAll();
 
    // actual paging buttons
    include_once 'admin/paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-success'>
        <strong>No assignments found.</strong>
    </div>";
}
?>