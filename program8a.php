<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitor Counter</title>
<style> 
body {
font-family: Arial, sans-serif; line-height: 1.6;
margin: 0; padding: 20px;

background-color: #f4f4f4;
}
.container {
max-width: 600px; margin: auto;
background: white; padding: 20px;
 
border-radius: 5px;
box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
h1 {
color: #333;
text-align: center;
}
.counter {
font-size: 24px; text-align: center; margin-top: 20px;
}


</style>

</head>
<body>
<div class="container">
<h1>Welcome to Our Website</h1>
<div class="counter">
  
<?php
// File where the visitor count will be stored
$count_file = "count.txt";

// Check if the count file exists
if (!file_exists($count_file)) {
    // If the file doesn't exist, create it and initialize the count to 0
    file_put_contents($count_file, 0);
}

// Read the current visitor count from the file
$count = (int) file_get_contents($count_file);

// Increment the count
$count++;

// Save the updated count back to the file
file_put_contents($count_file, $count);

// Display the current visitor count
echo "<h4>VISITOR COUNT</h4>";
echo "This page has been visited $count times.";
?>
</div>
</div>
</body>
</html>
