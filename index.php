<?php

function pizzaOrder()
{
  echo "Welcome to the Pizza Order System!";

  // Select size
  while (true) {
    $size = readline("Please enter the pizza size (Large or Extra Large): ");
    $size = strtolower(trim($size));

    if ($size == "large") {
      $baseCost = 6.00;
      break;
    } elseif ($size == "extra large") {
      $baseCost = 10.00;
      break;
    } else {
      echo "Invalid input. Please enter 'Large' or 'Extra Large'.";
    }
  }

  // Select toppings with error handling
  while (true) {
    $toppings = readline("Please select the number of toppings (0, 1, 2, 3, or 4): ");

    if (!is_numeric($toppings)) {
      echo "Error: Please enter a valid number.";
      continue;
    }

    $toppings = (int)$toppings;
    if ($toppings < 0 || $toppings > 4) {
      echo "Error: Please enter a number between 0 and 4.\n";
    } else {
      break; // valid input, exit the loop
    }
  }

  // Price based on number of toppings
  $toppingCost = 0;
  switch ($toppings) {
    case 1:
      $toppingCost = 1.00;
      break;
    case 2:
      $toppingCost = 1.75;
      break;
    case 3:
      $toppingCost = 2.50;
      break;
    case 4:
      $toppingCost = 3.35;
      break;
  }

  // Calculate subtotal, tax, and total
  $subtotal = $baseCost + $toppingCost;
  $tax = $subtotal * 0.13;
  $totalCost = $subtotal + $tax;

  // Display results
  echo "\nSubtotal: $" . number_format($subtotal, 2).";
  echo "HST (13%): $" . number_format($tax, 2).";
  echo "Total: $" . number_format($totalCost, 2)";
}

pizzaOrder();
