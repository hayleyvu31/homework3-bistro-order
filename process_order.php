<?php
require "order_functions.php";
$orderSummary = order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Your Bistro Receipt</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <h1>Your Bistro receipt</h1>

   <p><?= $orderSummary; ?></p>

   <section class="insight-card">
      <h2>Order feedback</h2>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </section>

   <section class="insight-card">
      <h2>Estimated total</h2>
      <p><?= htmlspecialchars(formattedTotal()); ?></p>
      <h2>Order profile</h2>
      <p><?= htmlspecialchars(orderProfile()); ?></p>
   </section>

   <p>
      <a href="index.php">Order Again</a>
      &nbsp;|&nbsp;
      <a href="forget_order.php">Forget Order</a>
   </p>

</body>
</html>