<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$mysql_db = 'sample_database_file';
	$conn_error = 'Could not connect.';

	if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)) {
		die($conn_error);
	} else {
		//echo 'Connected.';
	}

	$display = mysql_query("SELECT message FROM users") or die($conn_error);
	$result_count = mysql_num_rows($display);

	while ($result_row = mysql_fetch_assoc($display)) {
		echo '<strong>'. $result_row['message']. '</strong>';
	}

	
	

?>