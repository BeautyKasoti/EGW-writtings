<html>
<head>
	<title>Results for the Search</title>
</head>
<body>
	<?php
	// connecting to the database
	$connect= new mySQLi('localhost','root','','MUST');
	if ($connect == false){
	
	echo "Failed to connect to the database";
	}
	
	//declaring variables to store data from html
	$searchType=$_POST['searchType'];
	$DataEntered=$_POST['details'];
	
	//declaring the query on what the database must do
	$query = SELECT * FROM books WHERE $searchType = $DataEntered;
	
	//the command below process or executes the query
	$results= $connect-> query($query);
	
	//states the number of rows
	$num_results=$results->num_rows;
	echo "Number of books found: $num_results";
	
	if($results.num_rows > 0){
	 //display the results...
	echo $results;
	} else {
	echo "No results found!!!"
	}
	?>
</body>
</html>
