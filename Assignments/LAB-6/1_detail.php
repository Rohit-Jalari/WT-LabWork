<?php
require_once("./1_Company.php");
require_once("./1_Employee.php");

$gces = new Company;
$gces->name = "Gandaki College Of Engineering And Science";
$gces->address = "Lamachaur";
array_push($gces->employees , new Employee("Bijan","Bagar"));
array_push($gces->employees , new Employee("Sajan","Hemja"));
array_push($gces->employees , new Employee("Rohan","Mahendrapool"));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Name</th>
			<th>Address</th>
		</tr>
		<tr>
			<?php
			foreach ($gces->employees as $employee) {
				?>
				<tr>
					<td><?=$employee->name?></td>
					<td><?=$employee->address?></td>
				</tr>
			<?php } ?>
		</tr>
	</table>
</body>
</html>