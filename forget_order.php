<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Order Forgotten</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <h1>Saved order cleared</h1>

   <p>Your previous bistro order has been forgotten. Returning to the form will now show the default options instead of the last saved choices.</p>

   <a href="index.php">Start a New Order</a>

</body>
</html>