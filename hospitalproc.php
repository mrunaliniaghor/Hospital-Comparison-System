

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hospitals</title>
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
        <h1>hospital</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
        <div class="content">
          
          
		  
		   <?php
		    ini_set('max_execution_time', 300);
$mysqli=new MySQLi('localhost','root','','mydb');

$age=$_POST['age'];
$gen=$_POST['gender'];
$pro=$_POST['procedure'];
$resultSet = $mysqli->query("select distinct(nip)
from 
(select pat_id,nip
from texas1
where age=$age
and sex=$gen)as T
where pat_id in
(select pat_id from pat_proc
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
or procedure_code_25=$pro)"); // Run your query

echo "<form action=\"hospitals1.php\" method=\"post\"/>";
echo "<br/><h2>Age Group:</h2><input type=\"text\" name=\"age\" value=\"$age\" /><br/>";
echo "<br/><h2>Gender:</h2><input type=\"text\" name=\"gender\" value=\"$gen\" /><br/>";
echo "<br/><h2>Procedure Code:</h2><input type=\"text\" name=\"procedure\" value=\"$pro\" /><br/>";
echo "<br/><h2>Select the required hospital</h2><br/>";
if($resultSet->num_rows !=0)
{

// Loop through the query results, outputing the options one by one
while ($row = $resultSet->fetch_assoc()) {
  $nip=$row['nip'];
  echo "<br/><input type=\"radio\" name=\"hospital\" value=\"$nip\" /> $nip";
}
}
else 
{
	echo "no results";
}	
echo "<br/><br/><input type=\"submit\" name=\"Details\" value=\"submit\" />";
echo "<br/><button type=\"submit\" formmethod=\"post\" formaction=\"hospitalcompare2.php\">Compare</button>"
?>
        </div>
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
