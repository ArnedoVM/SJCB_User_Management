<?php
    session_start(); // Start or resume the session

    // Check if the user is logged in
    if (!isset($_SESSION['Account_ID'])) {
        header("Location: Log_In.php"); // Redirect to the login page if not logged in
        // exit();
    }

    // Retrieve the user's assignments and allowed features (similar to the previous code)

    // Display allowed features on the homepage
    $featureNames = [
        'feature_1' => 'Employee DTR',
        'feature_2' => 'Payroll Records',
        // ... Add more features
    ];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['Person_Type']; ?>!</h1>
    <form>


        <button type="submit"  name="logout">LOG OUT</button>
    </form>

    <?php
        if(array_key_exists('logout',$_POST))
		{
            unset($_SESSION['Account_ID']);
            session_destroy();
            header("Location: Log_In.php"); // Redirect to the login page if not logged in
        }
    ?>
</body>
</html>

<?php



     
?>

