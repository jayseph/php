<?php
$db = new \mysqli('localhost', 'yoinksun_testuser', 'test_PA55W0RD', 'yoinksun_testdb');
$res = $db->query('SELECT * FROM testtbl');
while($row = $res->fetch_assoc()) {
	echo '<div>';
	echo '<h3>' . $row['username'] . '</h3>';
	echo '<p>' . $row['email'] . '</p>';
	echo '</div>';
}
echo "I need a beer on " . Date('Y-m-d H:i:s');