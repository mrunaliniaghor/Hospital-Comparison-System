
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Symptoms</title>
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
<!---header-wrap--->
<div class="wrap4">
  <div class="container">
    <div class="leftcol">
      <div class="title">
        <h1>Symptoms</h1>
      </div>
      <div class="page-content">
      <div class="panel borderbotm-none">
        <div class="content">
		
		 <form action="hospitalssymp.php" method="post">
          <h2>Select the Symptom of the Patient</h2>
		  
		  <?php
 ini_set('max_execution_time', 300);
mysql_connect("localhost","root","") or die("could not connect");
mysql_select_db("mydb")or die("could not find database");


$query = mysql_query("select diagnosiscode,ShortDescription from procedure_description1"); // Run your query

echo '<select name="Symptoms">'; // Open your drop down box

// Loop through the query results, outputing the options one by one
while ($row = mysql_fetch_array($query)) {
   echo '<option value="'.$row['diagnosiscode'].'">'.$row['ShortDescription'].'</option>';
}

echo '</select>';
?>
<br><br><h2>Age</h2>
		  
		 
  <select name="age">
	<option value="0">0-9</option>
    <option value="1">10-19</option>
    <option value="2">20-29</option>
    <option value="3">30-39</option>
	<option value="4">40-49</option>
    <option value="5">50-59</option>
    <option value="6">60-69</option>
	<option value="7">70-79</option>
    <option value="8">80-89</option>
    <option value="9">90-100</option>
  </select>
		  
		<br> <br> <h2>Gender</h2>
 <select name="gender">
	<option value="1">male</option>
    <option value="2">female</option>
	</select><br><br>
	 <input type="submit" value="Submit">
	 
</form>
		

        </div>
      </div>
      </div>
      
    </div>
  <div class="clearing"></div>  
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
