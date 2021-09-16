<?php
$connect = mysqli_connect("localhost", "root", "", "university_ms_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM result
	WHERE NAME LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM result ORDER BY NAME";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>COURSE</th>
							<th>RESULT</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["NAME"].'</td>
				<td>'.$row["EMAIL"].'</td>
				<td>'.$row["COURSE"].'</td>
				<td>'.$row["RESULT"].'</td>

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
