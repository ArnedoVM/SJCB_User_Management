<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="checkbox" id="Instructor" name="Instructor" value="Instructor">
        <label for="Instructor">Instructor</label><br>

        <input type="checkbox" id="Academic_Head" name="Academic_Head" value="Academic_Head">
        <label for="Academic_Head">Dean/Principal</label><br>

        <input type="checkbox" id="Registrar" name="Registrar" value="Registrar">
        <label for="Registrar">Registrar</label><br>

        <input type="checkbox" id="Finance" name="Finance" value="Finance_Officer">
        <label for="Finance">Finance Officer</label><br>

        <input type="checkbox" id="Human_Resource" name="Human Resource" value="Human Resource">
        <label for="Human Resource">Human Resource</label><br>

        <input type="checkbox" id="VP_Admin" name="VP_Admin" value="VP Administration">
        <label for="VP_Admin">VP Administration</label><br>

        <input type="checkbox" id="VP_Academics" name="VP_Academics" value="VP Academic Affairs">
        <label for="VP_Academics">VP Academic Affairs</label><br>

        <input type="checkbox" id="President" name="President" value="President">
        <label for="President">President</label><br>

        <input type="checkbox" id="Nurse" name="Nurse" value="Nurse">
        <label for="Nurse">Nurse</label><br>
    
        <input type="checkbox" id="Guidance" name="Guidance" value="Guidance">
        <label for="Guidance">Guidance</label><br>

        <input type="checkbox" id="Canteen" name="Canteen" value="Canteen">
        <label for="Canteen">Canteen</label><br>

        <input type="checkbox" id="Guard" name="Guard" value="Security Guard">
        <label for="Guard">Security Guard</label><br>

        <input type="checkbox" id="Director_of_Student_Affairs" name="Director_of_Student_Affairs" value="Director of Student Affairs">
        <label for="Director_of_Student_Affairs">Director of Student Affairs</label><br>
    
        <input type="checkbox" id="CE_Director" name="CE_Director" value="Community Engagement Director">
        <label for="CE_Director">Community Engagement Director</label><br>

        <input type="checkbox" id="CM_Director" name="CM_Director" value="Campus Ministry Director">
        <label for="CM_Director">Campus Ministry Director</label><br>

        <input type="checkbox" id="Sports_Coordinator" name="Sports_Coordinator" value="Sports Coordinator">
        <label for="Sports_Coordinator">Sports Coordinator</label><br>

        <input type="checkbox" id="ICT_Officer" name="ICT_Officer" value="ICT Officer">
        <label for="ICT_Officer">ICT Officer</label><br>

        <input type="checkbox" id="Librarian" name="Librarian" value="Librarian">
        <label for="Librarian">Librarian</label><br>

        <input type="checkbox" id="Alumni_Director" name="Alumni_Director" value="Alumni Director">
        <label for="Alumni_Director">Alumni Director</label><br>

        <input type="checkbox" id="System_Administrator " name="System_Administrator " value="System_Administrator">
        <label for="System_Administrator ">System Administrator </label><br>
    </form>


<?php
    // Get employee ID (replace this with the actual way you get the employee ID)
    $employeeID = 12;

    // Iterate through the posted data
    foreach ($_POST as $key => $value) {
        if ($value == "on") {
            // $key represents the designation, store it in the database
            $designation = $key;
            // Insert the employee's designation into the database
            $insertQuery = "INSERT INTO employee_designation (employee_id, designation) VALUES ($employeeID, '$designation')";
            $db->query($insertQuery);
        }
    }

?>
</body>
</html>