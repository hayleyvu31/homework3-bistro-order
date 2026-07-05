<?php require "order_functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Bistro Order Form</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <h1>Create your order</h1>

   <form action="process_order.php" method="POST">

      <label for="dessert">Dessert</label>
      <select name="dessert" id="dessert">
         <option value="none">Select one...</option>
         <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
         <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
         <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
         <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
      </select>

      <br><br>

      <label for="drink">Drink</label>
      <select name="drink" id="drink">
         <option value="none">Select one...</option>
         <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
         <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
         <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
         <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
         <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
      </select>

      <br><br>

      <fieldset>
         <legend>Drink size</legend>
         <input type="radio" name="drinkSize" value="Small" id="sizeSmall" <?= drinkSizeSelected("Small"); ?>>
         <label for="sizeSmall">Small</label>

         <input type="radio" name="drinkSize" value="Medium" id="sizeMedium" <?= drinkSizeSelected("Medium"); ?>>
         <label for="sizeMedium">Medium</label>

         <input type="radio" name="drinkSize" value="Large" id="sizeLarge" <?= drinkSizeSelected("Large"); ?>>
         <label for="sizeLarge">Large</label>
      </fieldset>

      <br>

      <button type="submit">Submit Order</button>

   </form>

   <p><a href="forget_order.php">Forget Saved Order</a></p>

   <section class="insight-card">
      <h2>Live guidance</h2>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </section>

   <section class="insight-card">
      <h2>Estimated total</h2>
      <p><?= htmlspecialchars(formattedTotal()); ?></p>
      <h2>Order profile</h2>
      <p><?= htmlspecialchars(orderProfile()); ?></p>
   </section>

</body>
</html>