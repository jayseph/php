<?php
	$con = mysqli_connect("localhost", "yoinksun_testuser", "test_PA55W0RD")
	or die("<p>error connecting to database: " . mysqli_error($con) . "</p>");

	echo("<p>Connected to MySQL!</p>");
	echo __DIR__;
?>