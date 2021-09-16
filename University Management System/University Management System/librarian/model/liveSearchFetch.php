<?php
$connect = mysqli_connect("localhost", "root", "", "university_ms_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM book
	WHERE NAME LIKE '%".$search."%'
  OR CODE LIKE '%".$search."%'
	";
}
else
{
	$query = "
		SELECT * FROM book ORDER BY NAME";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>NAME</th>
							<th>CODE</th>
							<th>AVAILABLE</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["NAME"].'</td>
				<td>'.$row["CODE"].'</td>
				<td>'.$row["AMOUNT"].'</td>
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
