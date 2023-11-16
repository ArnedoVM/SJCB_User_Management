<?php
    include("DB_Config.php");
    $IsEmployee = true;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUN MANAGEMENT</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Identification" name="Identification">
        <label for="Identification">Identification No.</label><br>

        <input type="text" id="password" name="password">
        <label for="password">Password</label><br>

        <button type="submit"  name="add_Account">ADD ACCOUNT</button>
    </form>


    <?php
        if (array_key_exists('add_Account',$_POST))
        {
            $Identification= $_POST ['Identification'];
            $password= $_POST ['password'];


            $get_Person_ID_Employee="SELECT `person`.`person_ID` FROM `person` LEFT JOIN `employee` ON `person`.`person_ID` = `employee`.`person_ID` WHERE `employee_ID` = '$Identification';";
            $result_Employee = $db_connect->query($get_Person_ID_Employee);
            if ($result_Employee->num_rows > 0) {
                $row = $result_Employee->fetch_assoc();  // Fetch a row from the result
                $person_ID = $row['person_ID'];
                $add_Account="INSERT INTO `user_account`(`Password`, `person_ID`) VALUES ('$password','$person_ID')";
                $result2 = $db_connect->query($add_Account);
                // echo "Person ID: " . $person_ID;
            } else {
                echo "No matching record found.";
            }
        }
    ?>
</body>
</html>