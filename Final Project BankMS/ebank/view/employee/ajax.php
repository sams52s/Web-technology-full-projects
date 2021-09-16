<?php
$connect = mysqli_connect("localhost", "root", "", "bankms");
$output = '';
if(isset($_POST["search"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["search"]);
	$query = "
	SELECT * FROM schedule
	WHERE Name LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM schedule ORDER BY Name";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Statuse</th>
							<th>due Date</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["ID"].'</td>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Statuse"].'</td>
				<td>'.$row["duedate"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
