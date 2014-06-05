<?php
	
	/* Connect To a MySQL database
	$host = "host_name";
	$username = "username";
	$password = "password";
	$dbname = "database_name";
	
	$connection = mysqli_connect(host,username,password,dbname)
	
	//check for connection failure
	if(mysqli_connect_errno()){
		echo "Failed to connect to mysql" . mysqli_connect_error();
	}
	
	//create database
	$create_db_query = "CREATE DATABASE database";
	
	if(mysqli_query($connection,$create_db_query)){
		echo "Database created";
	} else {
		echo "error creating database" . mysqli_error($connection);
	}
	
	//create table
	$create_table_query = "CREATE TABLE tablename(firstname, email)";
	
	if(mysqli_query($connection,$create_table_query)){
		echo "Table Created";
	} else{
		echo "error creating table" . mysqli_error($connection);
	}
	*/

	$first_name = '';
	$email = '';
	$valid_name = '';
	$valid_email ='';
	$email_error ='';
	$name_error='';

	if($_POST) {
		$first_name = $_POST['first-name'];
		$email = $_POST['email'];
		
		
		
		if(preg_match('/[A-Za-z]/',$first_name)){
			$valid_name = $first_name;
		} else {
			$name_error = 'Enter a valid name';
			
		}
		
		if(preg_match('/[A-Za-z0-9._-]+@[A-za-z0-9._-]+\.([A-Za-z]{2,4})/',$email)){
			$valid_email = $email;
		} else {
			$email_error = 'Enter a valid email address';
		}
		
		/* if first name and username are valid then add information to table
		if(preg_match('/[A-Za-z]/',$first_name) && preg_match('/[A-Za-z0-9._-]+@[A-za-z0-9._-]+\.([A-Za-z]{2,4})/',$email)){
			$add_info_sql = "INSERT INTO tablename(firstname, email) VALUES ('$first_name','$email')";
			mysqli_query($connection, $add_info_sql);
			myqli_close($connection);
		}
		
		*/
	}
?>
