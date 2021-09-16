<?php
$connect = mysqli_connect("localhost", "root", "", "university_ms_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM payroll
	WHERE NAME LIKE '%".$search."%'
  OR ID LIKE '%".$search."%'
	";
}
else
{
	$query = "
		SELECT * FROM payroll ORDER BY NAME";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>NAME</th>
							<th>ID</th>
							<th>AMOUNT</th>
							<th>DATE</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["NAME"].'</td>
				<td>'.$row["ID"].'</td>
				<td>'.$row["AMOUNT"].'</td>
				<td>'.$row["DAT"].'</td>
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
