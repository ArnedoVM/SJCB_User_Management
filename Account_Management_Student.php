<?php
    include("DB_Config.php");
    $IsEmployee = true;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT ACCOUNT MANAGEMENT</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Identification" name="Identification">
        <label for="Identification">Student ID:</label><br>

        <input type="text" id="password" name="password">
        <label for="password">Password</label><br>

        <button type="submit"  name="add_Account">ADD ACCOUNT</button>
    </form>


    <?php
        if (array_key_exists('add_Account',$_POST))
        {
            $Identification= $_POST ['Identification'];
            $password= $_POST ['password'];


            $get_Person_ID_Student="SELECT `person`.`person_ID` FROM `person` LEFT JOIN `student` ON `person`.`person_ID` = `student`.`person_ID` WHERE `student_ID` = '$Identification';";
            $result_Student = $db_connect->query($get_Person_ID_Student);
            if ($result_Student->num_rows > 0) {
                $row = $result_Student->fetch_assoc();  // Fetch a row from the result
                $person_ID = $row['person_ID'];
                $Account_ID = $Identification;
                $add_Account="INSERT INTO `user_account`(`Account_ID`,`Password`, `person_ID`) VALUES ('$Account_ID','$password','$person_ID')";
                $result2 = $db_connect->query($add_Account);
                // echo "Person ID: " . $person_ID;
            } else {
                echo "No matching record found.";
            }
        }
    ?>
</body>
</html>