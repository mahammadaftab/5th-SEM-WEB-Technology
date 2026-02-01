<?php
// Define the file where the visitor count will be stored
$countFile = 'visitor_count.txt';
// Check if the file exists
if (!file_exists($countFile)) {
 // If not, create the file and initialize the count to 0
 file_put_contents($countFile, '0'); // Initialize the count to 0
}
// Read the current count from the file
$count = (int)file_get_contents($countFile);
// Increment the count by 1
$count++;
// Save the new count back to the file
 file_put_contents($countFile, $count); // Save the new count back to the file
// HTML and CSS for displaying the count
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitor Counter</title>
<style>
 body {
 font-family: Arial, sans-serif;
 background-color: blue;
 display: flex;
 justify-content: center;
 align-items: center;
 height: 100vh;
 margin: 0;
 }
 .container {
 background-color: red;
 padding: 20px;
 border-radius: 8px;
 box-shadow: 0 0 10px rgba(0,110,0,0.1);
 text-align: center;
 }
 h1 {
 color: #333;
 }
 p {
 font-size: 1.2em;
 color: #555;
 }
</style>
</head>
<body>
<div class="container">
<h1>Visitor Counter</h1>
<p>Total Visitors:
<?php echo $count; ?>
</p>
</div>
</body>
</html>