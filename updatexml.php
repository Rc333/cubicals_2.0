
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cubicaldata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT firstname, cubical_id FROM employeeCubicals";
$result = $conn->query($sql)or die ("Error in query: $conn. " . 
mysql_error());





if ($result->num_rows > 0)
{
   // create DomDocument object
   $doc = new DOMDocument('1.0', 'iso-8859-1');
   
   // add root node
//   $root = $doc->add_root("cubicals");
   // create root element
$root = $doc->createElement("cubicals");
$doc->appendChild($root);


// create child element






   
   // iterate through result set
   while(list($firstname, $cubical_id) = mysqli_fetch_row($result))
   {
      // create item node
      //$record = $root->new_child("employee", "");
	  $item = $doc->createElement("employee");
	  $root->appendChild($item);
	  
	  
	  
	  $item1 = $doc->createElement("firstname");
	  $item->appendChild($item1);
	  $item2 = $doc->createElement("cubical_id");
	  $item->appendChild($item2);
	 
	  
	  
	  // create text node
	  $text = $doc->createTextNode($firstname);
	  $item1->appendChild($text);
      $text1 = $doc->createTextNode($cubical_id);
	  $item2->appendChild($text1);
      // attach title and artist as children of item node
      //$record->new_child("firstname", $firstname);
      //$record->new_child("cubical_id", $cubical_id);
   }

// print the tree 
//echo $doc->dumpmem();
$doc->save("order1.xml");

//echo $doc->saveXML();


//echo "dfnd";
}








$conn->close();
?>





