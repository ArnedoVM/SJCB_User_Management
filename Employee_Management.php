<?php
    include("DB_Config.php");
    $IsEmployee = true;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE MANAGEMENT</title>
</head>
<body>
<form method="post">
        <input type="text" id="employee_ID" name="employee_ID">
        <label for="employee_ID">Employee ID</label><br>
        
        <input type="checkbox" id="Instructor" name="designations[]" value="3">
        <label for="Instructor">Instructor</label><br>

        <input type="checkbox" id="Academic_Head" name="designations[]" value="4">
        <label for="Academic_Head">Dean/Principal</label><br>

        <input type="checkbox" id="Registrar" name="designations[]" value="5">
        <label for="Registrar">Registrar</label><br>

        <input type="checkbox" id="Finance" name="designations[]" value="6">
        <label for="Finance">Finance Officer</label><br>

        <input type="checkbox" id="Human_Resource" name="designations[]" value="7">
        <label for="Human Resource">Human Resource</label><br>

        <input type="checkbox" id="VP_Admin" name="designations[]" value="8">
        <label for="VP_Admin">VP Administration</label><br>

        <input type="checkbox" id="VP_Academics" name="designations[]" value="9">
        <label for="VP_Academics">VP Academic Affairs</label><br>

        <input type="checkbox" id="President" name="designations[]" value="10">
        <label for="President">President</label><br>

        <input type="checkbox" id="Nurse" name="designations[]" value="11">
        <label for="Nurse">Nurse</label><br>
    
        <input type="checkbox" id="Guidance" name="designations[]" value="12">
        <label for="Guidance">Guidance</label><br>

        <input type="checkbox" id="Canteen" name="designations[]" value="13">
        <label for="Canteen">Canteen</label><br>

        <input type="checkbox" id="Guard" name="designations[]" value="14">
        <label for="Guard">Security Guard</label><br>

        <input type="checkbox" id="Director_of_Student_Affairs" name="designations[]" value="15">
        <label for="Director_of_Student_Affairs">Director of Student Affairs</label><br>
    
        <input type="checkbox" id="CE_Director" name="designations[]" value="16">
        <label for="CE_Director">Community Engagement Director</label><br>

        <input type="checkbox" id="CM_Director" name="designations[]" value="17">
        <label for="CM_Director">Campus Ministry Director</label><br>

        <input type="checkbox" id="Sports_Coordinator" name="designations[]" value="18">
        <label for="Sports_Coordinator">Sports Coordinator</label><br>

        <input type="checkbox" id="ICT_Officer" name="designations[]" value="19">
        <label for="ICT_Officer">ICT Officer</label><br>

        <input type="checkbox" id="Librarian" name="designations[]" value="20">
        <label for="Librarian">Librarian</label><br>

        <input type="checkbox" id="Alumni_Director" name="designations[]" value="21">
        <label for="Alumni_Director">Alumni Director</label><br>

        <input type="checkbox" id="System_Administrator " name="designations[]" value="22">
        <label for="System_Administrator ">System Administrator </label><br>

        <button type="submit"  name="assign_designations">ASSIGN designations</button>
    </form>

    <?php

    if (array_key_exists('assign_designations',$_POST))
    {
        // Get employee ID (replace this with the actual way you get the employee ID)
            $employeeID = $_POST ['employee_ID'];
            // Check if the 'designations[]' array exists in the POST data
            $selectedDesignations = $_POST['designations'];
        
            // Loop through the selected designations and create a comma-separated string
            $designationString = implode(", ", $selectedDesignations);
            
            echo "Selected Designations: " . $designationString;

            foreach ($selectedDesignations as $designation) {
                // Prepare your insert query
                $insertQuery = "INSERT INTO `designation` (`Position_ID`, `Employee_ID`) VALUES ('$designation', '$employeeID')";
                // $db_connect->query($insertQuery);

                // Execute the insert query
                if ($db_connect->query($insertQuery) === TRUE) {
                    echo "Record inserted successfully for designation: $designation<br>";
                }
            }

    }


?>


</body>
</html>