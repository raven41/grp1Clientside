<?php

$url = "http://localhost:8000/api/assignments";
$test = file_get_contents($url);
$testarray = json_decode($test, true);

$testarray2 = array(array("ass_name" => "synopse"),array("ass_name" => "ged"));

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
 
    /*  // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$ass_name}</td>";
            echo "<td>{$ass_desc}</td>";
            echo "<td>{$course_name}</td>";
            echo "<td>{$created_at}</td>";
            echo "<td>{$ass_deadline}</td>";
        echo "</tr>";
        } */

        foreach ($testarray as $tester){
            foreach ($tester as $arraynum){
                echo "<tr>";
                    echo "<td>".$arraynum['ass_name']."</td>";
                    echo "<td>".$arraynum['ass_desc']."</td>";
                    echo "<td>".$arraynum['course_id']."</td>";
                    echo "<td>".$arraynum['created_at']."</td>";
                    echo "<td>".$arraynum['updated_at']."</td>";
                echo "</tr>";
            }  
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

echo '<pre>'.print_r($testarray,1).'</pre>';

?>