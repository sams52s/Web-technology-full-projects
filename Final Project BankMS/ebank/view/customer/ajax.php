<?php
$connect = mysqli_connect("localhost", "root", "", "bankms");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM account
	WHERE type LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM account ORDER BY type";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>userid</th>
							<th>type</th>
							<th>balance</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["ID"].'</td>
				<td>'.$row["userid"].'</td>
				<td>'.$row["type"].'</td>
				<td>'.$row["balance"].'</td>
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
