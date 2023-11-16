<?php

include("DB_Config.php");
session_start(); // Start or resume the session
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
		<input type="text" id="Identification_No" name="Identification_No">
        <label for="Identification_No">Identification_No:</label><br>

        <input type="text" id="password" name="Password">
        <label for="password">Password</label><br>

        <button type="submit"  name="login">LOG IN</button>
    </form>

    <?php
		if(array_key_exists('login',$_POST))
		{
			$Identification_No= $_POST ['Identification_No'];
			$Password= $_POST ['Password'];

			$Get_Person_Type="SELECT `Person_Type` FROM `person` LEFT JOIN `user_account` ON `user_account`.`person_ID`=`person`.`person_ID` WHERE `Account_ID` = '$Identification_No' AND `password` = '$Password';";
			$Get_Person_Type= $db_connect->query($Get_Person_Type);
			if ($row=mysqli_fetch_object($Get_Person_Type))
			{
				$Person_Type=$row->Person_Type;
				if($Person_Type == "Student"){
					$select_query= "SELECT * FROM `person` LEFT JOIN `student` ON `student`.`person_ID`=`person`.`person_ID` LEFT JOIN `user_account` ON `user_account`.`person_ID`=`person`.`person_ID` WHERE `student_ID` = '$Identification_No' AND `password` = '$Password';";
					$Login= $db_connect->query($select_query);
					if ($row=mysqli_fetch_object($Login))
					{

                		$_SESSION['Account_ID']=$row->Account_ID;
						$_SESSION['Person_Type']=$row->Person_Type;
                		header("Location: HomePage.php");
					}
					else
					echo '<script>alert("The username and password you entered did not match the records. Please double-check and try again.");</script>';
				}
				else {
					echo "EMPLOYEE";
				}
			}
			
		
		}
	?>
</body>
</html>