

<html>
<body>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>

<h1>The cubical information</h1>

<button type="button" onclick="loadDoc()">Get cubical info...</button>
<br><br>
<table id="demo"></table>


<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "order1.xml", true);
  xhttp.send();
}
function myFunction(xml) {
	
	
  var i;
  var xmlDoc = xml.responseXML;
  //var table="<tr><th>firstname</th><th>cubical_id</th></tr>";
  var x = xmlDoc.getElementsByTagName("employee");
  txt = "";
 // console.log(x);
  for (i = 0; i <x.length; i++) { 
  
	txt = "";
	txt = x[i].getElementsByTagName("firstname")[0].childNodes[0].nodeValue;
	//console.log(txt);
	
	document.getElementById(x[i].getElementsByTagName("cubical_id")[0].childNodes[0].nodeValue).innerHTML = txt;
	document.getElementById(x[i].getElementsByTagName("cubical_id")[0].childNodes[0].nodeValue).style.background = "limegreen";
	
  }
  
}

</script>
</body>
</html>
<?php

$rows = 10; // amout of tr 
$cols = 10;// amjount of td 
function drawTable($rows, $cols){
echo "<table border='2' width = '800' padding = '15px;'>"; 


$x=1;
for($tr=1;$tr<=$rows;$tr++){ 
    echo "<br>"; 
    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td id = ".$x." align='center'>".$x."</td>"; 
			   $x++;
        } 
    echo "</tr>"; 
} 

echo "</table>";
}


drawTable(5,8);

?>