<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "sjanowiak", "gLf8xuK4AxKRSzg!", "linkshorten");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$url = mysqli_real_escape_string($link, $_REQUEST['url']);
 
// Attempt insert query execution
if ($url){
	$sql = "INSERT INTO reviews (user) VALUES ('$url')";
	if(mysqli_query($link, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
} else {
	echo "fuhhh";
}
 
// Close connection
mysqli_close($link);

// create new page
$file = $url . '.php';
$filecontents = '<a href="/linkshortener">Home</a><br><br>' 
	. "Generated URL: " . $url
	. '<br><br>';
file_put_contents($file, $filecontents);
file_put_contents('info/' . $file, $filecontents);

header('Location: info/' . $file);
?>