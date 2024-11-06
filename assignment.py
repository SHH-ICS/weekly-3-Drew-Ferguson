def pizza_order():
    print("Welcome to the Pizza Order System!")
    
    # Select size
    size = input("Please enter the pizza size (Large or Extra Large): ").strip().lower()
    while size not in ['large', 'extra large']:
        size = input("Invalid input. Please enter 'Large' or 'Extra Large': ").strip().lower()
    
    # Price based on size
    if size == "large":
        base_cost = 6.00
    else:
        base_cost = 10.00

    # Select toppings with error handling
    while True:
        try:
            toppings = int(input("Please select the number of toppings (0, 1, 2, 3, or 4): "))
            if toppings not in [0, 1, 2, 3, 4]:
                print("Error: Please enter a number between 0 and 4.")
            else:
                break  # valid input, exit the loop
        except ValueError:
            print("Error: Please enter a valid number.")

    # Price based on number of toppings
    topping_cost = 0
    if toppings == 1:
        topping_cost = 1.00
    elif toppings == 2:
        topping_cost = 1.75
    elif toppings == 3:
        topping_cost = 2.50
    elif toppings == 4:
        topping_cost = 3.35

    # Calculate subtotal, tax, and total
    subtotal = base_cost + topping_cost
    tax = subtotal * 0.13
    total_cost = subtotal + tax

    # Display results
    print(f"\nSubtotal: ${subtotal:.2f}")
    print(f"HST (13%): ${tax:.2f}")
    print(f"Total: ${total_cost:.2f}")

pizza_order()
