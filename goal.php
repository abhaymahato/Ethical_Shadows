<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaveSmart: Budget Planner</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
<!--=============== SWIPER CSS ===============-->
<link rel="stylesheet" href="assets1//css/swiper-bundle.min.css">

<!--=============== CSS ===============-->
<link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color:rgb(9, 9, 9);
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .input-group {
            margin: 20px 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"], input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .category-input {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .category-input input {
            width: 45%;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        #error {
            color: red;
            text-align: center;
            display: none;
        }
        #result {
            margin-top: 20px;
            text-align: center;
        }
        canvas {
            margin-top: 20px;
        }
        
    </style>
</head>
<body>                    
<header class="header" data-header>
    <div class="container">

      <a href="#">
        <h1 class="logo">Ethical Shadows</h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="./about.html" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="./planner.PHP" class="navbar-link"> Planner</a>
          </li>

          <li>
            <a href="goal.php" class="navbar-link">GOAL</a>
          </li>

          <li>
            <a href="./blog.html" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="./contactpage.html" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        <a href="./FORM123.php" class="btn btn-secondary">Register/login</a>

      </nav>

    </div>
 

    <div class="container">
        <h1>SaveSmart: Plan Your Budget</h1>
        <div class="input-group">
            <label for="salary">Monthly Salary ($):</label>
            <input type="number" id="salary" placeholder="Enter your monthly salary" required>
            
            <label for="itemName">Item You Want to Purchase:</label>
            <input type="text" id="itemName" placeholder="e.g., New Laptop" required>
            
            <label for="itemCost">Cost of the Item ($):</label>
            <input type="number" id="itemCost" placeholder="Enter the cost of the item" required>
        </div>
        
        <div class="input-group">
            <h3>Allocate Your Expenses (%)</h3>
            <div class="category-input">
                <div>
                    <label for="necessities">Necessities (Rent, Bills, etc.):</label>
                    <input type="number" id="necessities" placeholder="e.g., 50" min="0" max="100">
                </div>
                <div>
                    <label for="savings">Savings:</label>
                    <input type="number" id="savings" placeholder="e.g., 20" min="0" max="100">
                </div>
            </div>
            <div class="category-input">
                <div>
                    <label for="leisure">Leisure (Entertainment, Dining, etc.):</label>
                    <input type="number" id="leisure" placeholder="e.g., 20" min="0" max="100">
                </div>
                <div>
                    <label for="others">Others (Miscellaneous):</label>
                    <input type="number" id="others" placeholder="e.g., 10" min="0" max="100">
                </div>
            </div>
        </div>
        
        <button onclick="calculateBudget()">Calculate Budget</button>
        <p id="error"></p>
        <div id="result"></div>
        <canvas id="budgetChart"></canvas>
    </div>

    <script>
        let chart;

        function calculateBudget() {
            // Get input values
            const salary = parseFloat(document.getElementById('salary').value);
            const itemName = document.getElementById('itemName').value;
            const itemCost = parseFloat(document.getElementById('itemCost').value);
            const necessities = parseFloat(document.getElementById('necessities').value) || 0;
            const savings = parseFloat(document.getElementById('savings').value) || 0;
            const leisure = parseFloat(document.getElementById('leisure').value) || 0;
            const others = parseFloat(document.getElementById('others').value) || 0;

            // Validate inputs
            const errorElement = document.getElementById('error');
            if (!salary || salary <= 0) {
                errorElement.textContent = 'Please enter a valid monthly salary.';
                errorElement.style.display = 'block';
                return;
            }
            if (!itemName || !itemCost || itemCost <= 0) {
                errorElement.textContent = 'Please enter a valid item name and cost.';
                errorElement.style.display = 'block';
                return;
            }
            const totalPercentage = necessities + savings + leisure + others;
            if (totalPercentage !== 100) {
                errorElement.textContent = 'The total percentage must equal 100%. Current total: ' + totalPercentage + '%.';
                errorElement.style.display = 'block';
                return;
            }

            errorElement.style.display = 'none';

            // Calculate amounts
            const necessitiesAmount = (necessities / 100) * salary;
            const savingsAmount = (savings / 100) * salary;
            const leisureAmount = (leisure / 100) * salary;
            const othersAmount = (others / 100) * salary;

            // Calculate time to achieve goal
            const monthsToGoal = itemCost / savingsAmount;
            const yearsToGoal = monthsToGoal / 12;

            // Display result
            const resultElement = document.getElementById('result');
            resultElement.innerHTML = `
                <h3>Your Budget Breakdown</h3>
                <p>Necessities: $${necessitiesAmount.toFixed(2)} (${necessities}%)</p>
                <p>Savings: $${savingsAmount.toFixed(2)} (${savings}%)</p>
                <p>Leisure: $${leisureAmount.toFixed(2)} (${leisure}%)</p>
                <p>Others: $${othersAmount.toFixed(2)} (${others}%)</p>
                <h3>Savings Goal: ${itemName}</h3>
                <p>Cost: $${itemCost.toFixed(2)}</p>
                <p>Monthly Savings: $${savingsAmount.toFixed(2)}</p>
                <p>Time to Achieve: ${monthsToGoal.toFixed(1)} months (~${yearsToGoal.toFixed(1)} years)</p>
            `;

            // Create or update bar chart
            const ctx = document.getElementById('budgetChart').getContext('2d');
            if (chart) {
                chart.destroy();
            }
            chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Necessities', 'Savings', 'Leisure', 'Others'],
                    datasets: [{
                        label: 'Budget Allocation ($)',
                        data: [necessitiesAmount, savingsAmount, leisureAmount, othersAmount],
                        backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0'],
                        borderColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0'],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Amount ($)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }
    </script>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets1//js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets1//js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets1//js/main.js"></script>
    </body>
</html>
</body>
</html>