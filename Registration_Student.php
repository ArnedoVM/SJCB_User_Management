<?php
    include("DB_Config.php");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>


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

        <label>Level</label><br>
        <select name="level" id="level">
            <option value="Grade 1">Grade 1</option>
            <option value="Grade 2">Grade 2</option>
            <option value="Grade 3">Grade 3</option>
            <option value="Grade 4">Grade 4</option>
            <option value="Grade 5">Grade 5</option>
            <option value="Grade 6">Grade 6</option>
            <option value="Grade 7">Grade 7</option>
            <option value="Grade 8">Grade 8</option>
            <option value="Grade 9">Grade 9</option>
            <option value="Grade 10">Grade 10</option>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
            <option value="5th Year">5th Year</option>
        </select> 

        <label>Taking</label><br>
        <select name="taking" id="taking">
            <option value="STEM">STEM</option>
            <option value="GAS">GAS</option>
            <option value="HUMSS">HUMSS</option>
            <option value="ABM">ABM</option>
            <option value="BSIT">BSIT</option>
            <option value="BLIS">BLIS</option>
            <option value="BEED">BEED</option>
            <option value="BSCrim">BSCrim</option>
            <option value="BSBM">BSBM</option>
        </select> 

        <button type="submit"  name="add_Student">ADD STUDENT</button>
    </form>

    <?php
		if (array_key_exists('add_Student',$_POST))
		{
				$last_Name= $_POST ['Last_Name'];
				$first_Name= $_POST ['First_Name'];
				$middle_Name= $_POST ['Middle_Name'];
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

                
                $level= $_POST ['level'];
                $taking= $_POST ['taking'];
                //EVERYTHING ABOVE IS WORKING
                
                //$insert_person= "INSERT INTO `person`  (`last_Name`, `first_Name`, `middle_Name`, `extension_Name`, `Sex`, `birth_Date`, `age`, `home_Address`, `civil_Status`, `religion`, `nationality`, `boarding_Address`, `contact_Number`, `email_Address`) VALUES ('$Last_Name','$First_Name','$Middle_Name','$extension_Name','$sex','$birth_Date', $age,'$home_Address','$civil_Status','$religion','$nationality','$boarding_Address','$contact_Number','$email_Address');";
                
                // $insert_person="INSERT INTO `person` (`last_Name`, `first_Name`, `middle_Name`, `extension_Name`, `Sex`, `birth_Date`, `age`, `home_Address`, `civil_Status`, `religion`, `nationality`, `boarding_Address`, `contact_Number`, `email_Address`) VALUES ('Arnedo','Vince Mark','Esteban','','M','1998-02-15',25,'San Jose','Single','N/A','Filipino','N/A','091111111','vincemark@gmail.com');";
                // $db_connect->query("SET @Input_Last_Name ='" .$last_Name. "'");
                // $db_connect->query("SET @Input_First_Name ='" .$first_Name. "'");
                // $db_connect->query("SET @Input_Middle_Name ='" .$middle_Name. "'");
                // $db_connect->query("SET @Input_Extension_Name ='" .$extension_Name. "'");
                // $db_connect->query("SET @Input_Sex ='" .$sex. "'");
                // $db_connect->query("SET @Input_Birth_Date ='" .$age. "'");
                // $db_connect->query("SET @Input_Age ='" .$home_Address. "'");
                // $db_connect->query("SET @Input_Home_Address ='" .$civil_Status. "'");
                // $db_connect->query("SET @Input_Civil_Status ='" .$religion. "'");
                // $db_connect->query("SET @Input_Religion ='" .$nationality. "'");
                // $db_connect->query("SET @Input_Nationality ='" .$boarding_Address. "'");
                // $db_connect->query("SET @Input_Boarding_Address ='" .$contact_Number. "'");
                // $db_connect->query("SET @Input_Contact_Number ='" .$email_Address. "'");
                // $db_connect->query("SET @Input_Email_Address ='" .$level. "'");
                // $db_connect->query("SET @Input_Student_Level ='" .$taking. "'");
                // $db_connect->query("SET @Input_Taking ='" .$taking. "'");
                //$db_connect->query("CALL SP_Add_New_Student(@Input_Last_Name,@Input_First_Name, @Input_Middle_Name,@Input_Extension_Name,@Input_Sex,@Input_Birth_Date, @Input_Age, @Input_Home_Address, @Input_Civil_Status, @Input_Religion, @Input_Nationality, @Input_Boarding_Address, @Input_Contact_Number, @Input_Email_Address, @Input_Student_Level, @Input_Taking)");
                
                $db_connect->query("CALL SP_Add_New_Student('$last_Name','$first_Name','$middle_Name','$extension_Name','$sex','$birth_Date','$age','$home_Address','$civil_Status','$religion','$nationality','$boarding_Address','$contact_Number','$email_Address','$level','$taking')");



                // $db_connect->query("SET @Input_User_Name ='" .$userName. "'");
                // $db_connect->query("SET @Input_Password ='" .$password. "'");
                // $insert_new_Account=$db_connect->query("CALL SP_Add_New_Student(@Input_User_Name,@Input_Password)");

                // $result= $db_connect->query($insert_new_Account);
        }
	?>
</body>
</html>