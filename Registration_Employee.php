<?php
    include("DB_Config.php");
    $IsEmployee = true;

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>


</head>
<body>
    
    <form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="Extension Name" name="extension_Name">

        <label>Sex</label><br>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="birth_Date" name="birth_Date">

        <label>Age</label><br>
        <input type="number" id="age" name="age">

        <label>Home Address</label><br>
        <input type="text" id="home_Address" name="home_Address">

        <label>Civil Status</label><br>
        <select name="civil_Status" id="civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="nationality" name="nationality">

        <label>Religion</label><br>
        <input type="text" id="religion" name="religion">

        <label>Boarding Address</label><br>
        <input type="text" id="boarding_Address" name="boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="contact_Number" name="contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="email_Address" name="email_Address">


        <label>Date Started</label><br>
        <input type="date" id="date_Started" name="date_Started">

        <button type="submit"  name="add_Employee">ADD NEW EMPLOYEE</button>
    </form>

    <?php
		if (array_key_exists('add_Employee',$_POST))
		{
				$Last_Name= $_POST ['Last_Name'];
				$First_Name= $_POST ['First_Name'];
				$Middle_Name= $_POST ['Middle_Name'];
                $extension_Name= $_POST ['extension_Name'];
                $sex= $_POST ['sex'];
                $birth_Date= $_POST ['birth_Date'];
                $age= $_POST ['age'];
                $home_Address= $_POST ['home_Address'];
                $civil_Status= $_POST ['civil_Status'];
                $religion= $_POST ['religion'];
                $nationality= $_POST ['nationality'];
                $boarding_Address= $_POST ['boarding_Address'];
                $contact_Number= $_POST ['contact_Number'];
                $email_Address= $_POST ['email_Address'];

                $date_Started= $_POST ['date_Started'];
                echo $date_Started;
                //EVERYTHING ABOVE IS WORKING

                //$insert_person= "INSERT INTO `person` (`Last_Name`, `First_Name`, `Middle_Name`, `Contact_Number`) VALUES ('$Last_Name', '$First_Name', '$Middle_Name', '$Contact_Number');";
                $insert_person= "INSERT INTO `person`  (`last_Name`, `first_Name`, `middle_Name`, `extension_Name`, `Sex`, `birth_Date`, `age`, `home_Address`, `civil_Status`, `religion`, `nationality`, `boarding_Address`, `contact_Number`, `email_Address`) VALUES ('$Last_Name','$First_Name','$Middle_Name','$extension_Name','$sex','$birth_Date', $age,'$home_Address','$civil_Status','$religion','$nationality','$boarding_Address','$contact_Number','$email_Address');";
                // $insert_person="INSERT INTO `person` (`last_Name`, `first_Name`, `middle_Name`, `extension_Name`, `Sex`, `birth_Date`, `age`, `home_Address`, `civil_Status`, `religion`, `nationality`, `boarding_Address`, `contact_Number`, `email_Address`) VALUES ('Arnedo','Vince Mark','Esteban','','M','1998-02-15',25,'San Jose','Single','N/A','Filipino','N/A','091111111','vincemark@gmail.com');";
                $result= $db_connect->query($insert_person);


                $retrieveLastRecord="SELECT `Person_ID` FROM `person` ORDER BY `Person_ID` DESC LIMIT 1";
                $retrieveLastRecordResult= $db->query($retrieveLastRecord);


                if ($retrieveLastRecordResult && $lastRecord = $retrieveLastRecordResult->fetch_assoc()) {
                    echo "Last inserted Person ID: " . $lastRecord['Person_ID'];
                    $Person_ID=$lastRecord['Person_ID'];
                    $Insert_Employee = "INSERT INTO `employee` (`Person_ID`,`date_Started`,`rank`) VALUES($Person_ID,$date_Started,'1')";
                    $Insert_EmployeeQueryResult = $db->query($Insert_Employee);
                } 
        }




        if (array_key_exists('add_user', $_POST)) {
            // 1. Check if the 'add_user' button in the form was clicked
            // 2. This condition verifies if the form was submitted with this specific button name

            // 3. Retrieve user input
            $username = $_POST['username'];
            $password = $_POST['password'];

            // 4. Construct an SQL query to insert user account details into the 'user_accounts' table
            // 5. Values for 'username' and 'password' are taken from the form input
            $insertUserAccountQuery = "INSERT INTO `user_accounts` (`username`, `password`) VALUES ('$username', '$password');";

            // 6. Execute the SQL query to insert the user account into the database
            $conn->query($insertUserAccountQuery);
            // 7. This line sends the query to the database for execution

            // 8. After execution, the user account data is inserted into the database
        }


	?>
</body>
</html>