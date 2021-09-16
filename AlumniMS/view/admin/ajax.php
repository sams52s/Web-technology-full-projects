<?php
$connect = mysqli_connect("localhost", "root", "", "alumnims");
$output = '';
if(isset($_POST["search"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["search"]);
	$query = "
	SELECT * FROM users
	WHERE username LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY username";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>fname</th>
							<th>username</th>
							<th>email</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["ID"].'</td>
				<td>'.$row["fname"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["email"].'</td>
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
