<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hospitals1</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<!----menu--->
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
</head>
<body>



<div class="wrap1">
<div class="container">
  <div class="header">
    <div class="logo">
      <h1>HEALTH CARE</h1>
    </div>
    <div class="menu">
      <ul class="sf-menu" id="example">
        <li><a href="index.html">Home</a></li>
        <li class="current"> <a href="procedures.php">Procedures</a></li>
        <li> <a href="symptoms.php">Symptoms</a></li>
        <li> <a href="#">Blog </a> </li>
        <li> <a href="#">Contact</a> </li>
      </ul>
    </div>
  </div>
  <div class="clearing"></div>
</div>
<div class="clearing"></div>
</div>
<div class="wrap2">
  <div class="container">
    <div class="leftcol">
      <div class="title">
        <h1>hospital details</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
 <?php
  ini_set('max_execution_time', 300);
$mysqli=new MySQLi('localhost','root','','mydb');

$nip= $_POST['hospital'];
$age= $_POST['age'];
$gen= $_POST['gender'];
$pro= $_POST['procedure'];


$resultSet = $mysqli->query("select pat_id, city, state, Avg(length_of_stay) as stay, AVG(total_accommodation_charges) as acc, Avg(total_charges) as charg 
from texas1 where national_provider_id=$national_provider_id and age=$age and sex=$gen 
and pat_id IN (select pat_id 
from pat_proc1 
where procedure_code_1=$pro
or procedure_code_2=$pro
or procedure_code_3=$pro
or procedure_code_4=$pro
or procedure_code_5=$pro
or procedure_code_6=$pro
or procedure_code_7=$pro
or procedure_code_8=$pro
or procedure_code_9=$pro
or procedure_code_10=$pro
or procedure_code_11=$pro
or procedure_code_12=$pro
or procedure_code_13=$pro
or procedure_code_14=$pro
or procedure_code_15=$pro
or procedure_code_16=$pro
or procedure_code_17=$pro
or procedure_code_18=$pro
or procedure_code_19=$pro
or procedure_code_20=$pro
or procedure_code_21=$pro
or procedure_code_22=$pro
or procedure_code_23=$pro
or procedure_code_24=$pro
or procedure_code_25=$pro)");


echo "<form >";
echo "<br/><h2>Age Group:".$age."</h2>";
echo "<h2>Gender:".$gen." </h2>";
echo "<h2>Procedure Code:".$pro." </h2>";


echo "<form action=\"hospitals1.php\" method=\"post\"/>";
if($resultSet->num_rows !=0)
{

// Loop through the query results, outputing the options one by one
while ($row = $resultSet->fetch_assoc()) {
 echo "<h2>Healthcare Facilty: " . $nip. " <br/><br/> City: " . $row["city"]. " <br/><br/>State: " . $row["state"]." <br/><br/> Average Length of stay: " .$row["stay"]."<br/><br/>Average Total Accomodation Charges: ".$row["acc"]." <br/><br/> Average  Total Charges: ".$row["charg"]."<br/><h2/>";
}
}
else 
{
	echo "no results";
}	

?>
      </div>
      </div>
	  </div>
	  </div>
	  </div>
	  </div>
<!---wrap4--->
<div class="wrap3">
<div class="container">
  <div class="footer"> Copyright (c) websitename. All rights reserved. </div>
<div class="clearing"></div>
</div>
</div>
<div class="shadows2">
</div>
</body>
</html>
