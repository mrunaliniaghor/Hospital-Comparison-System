<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hospitalcompare2</title>
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

$pro=$_POST['procedure'];
$resultSet = $mysqli->query("select distinct(nip), avg(stay_length) as stay,avg(total_charges) as total,avg(total_accharges) as totalacc
from texas1
where pat_id IN
( select pat_id from pat_proc
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
or procedure_code_25=$pro)
group by nip");

?>
<table width="500" border="1" cellpadding="0" cellspacing="1">
<tr>
<th>NIP</th>
<th>Average Stay</th>
<th>Average Total Charges</th>
<th>Average Accomodation Charges</th>
<tr>
<?php


echo "<form action=\"hospitals2.php\" method=\"post\"/>";
if($resultSet->num_rows !=0)
{

// Loop through the query results, outputing the options one by one
while ($row = $resultSet->fetch_assoc()) {

	echo "<tr>";
	echo "<td>".$row['nip']."</td>";
	echo "<td>".$row['stay']."</td>";
	echo "<td>".$row['total']."</td>";
	echo "<td>".$row['totalacc']."</td>";
	echo "</tr>)";
}
}
else 
{
	echo "$mysqli->error ";
	echo "no results";
}	

?>
</table>
  


    

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
