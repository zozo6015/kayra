<?php
		ini_set ("display_errors", "1"); 
		error_reporting(E_ALL);  
  
        //database host
		$db_host="live.spidb.com";
		//database username
		$db_username="1672";
		//database password
		$db_password="cosxxmin";
		//database name
		$db_name="softwareproject_1672";
		//connect
		$link=mysql_connect($db_host,$db_username,$db_password);
		if (!$link) {
    		die('Could not connect: ' . mysql_error());
		}
		echo 'Connected successfully';
		
		// select database
		$db_selected = mysql_select_db($db_name, $link);
		if (!$db_selected) {
    		die ('Can\'t use  : '.$db_name.' Error' . mysql_error());
		}
		//close connection
		mysql_close($link);

?>