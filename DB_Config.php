<?php
    //setup database configuration by creating a constant variable through define method
	define( 'DB_HOST', 'localhost');
	define( 'DB_USER', 'root');
	define( 'DB_PASSWORD','');
	define( 'DB_NAME', 'sjcb');


	//connect to the database using the configuration through mysqli_connect method
	$db_connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			
	if(!$db_connect){
		echo "Electric Interruption";
	}
	else {
		echo "Power Restored";
	}

?>

