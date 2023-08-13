<?php
global $db_url_, $db_user_, $db_pass_;
include("cfg.php");
$p="";
print("<html lang='ru'>
<head>
<title>title</title>
</head>
<body>");
$mysql   = new mysqli($db_url_, $db_user_, $db_pass_, "my_db");


if (isset($_GET['p'])) {
	$p = $_GET['p'];
	if ($p === 'add') {
		print("add");
	}
	elseif ($p==='add_content') {
		print("add_content");
	}
	elseif($p==='del') {
		print("del");
	}

} else {
	print("index");

	print("
		<table >
			<tr>
				<td>k<td>
				<td>k</td>
			</tr>
</table>
	
	");
	$result = $mysql->query("SELECT `id`,`date`,`a`,`b`,`source`,`comment` FROM my_finance");
	if ($result) {
		while ($row = $result->fetch_assoc()) {
			print($row["id"]);
			print($row["comment"]);
			print("<br>");
		}
	}
}


$mysql->close();
print("<h5>hello</h5>");
print("</body>
</html>");