<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ETHICAL SHADOWS  - YOUR MONEY PLANNER</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
<!--=============== SWIPER CSS ===============-->
<link rel="stylesheet" href="assets1//css/swiper-bundle.min.css">

<!--=============== CSS ===============-->
<link rel="stylesheet" href="assets1//css/styles.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <style>
    * {
      box-sizing: border-box;
    }
    header{
      font-family: Arial, sans-serif;
      padding: 40px;
      background:rgb(11, 10, 10);
      text-align: center;
       }
    

    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background:rgb(85, 154, 140);
      text-align: center;
      /* background-image: url(./asset1/image/bg.png) ; */
      
    }

    h1 {
      margin-bottom: 20px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    .inputs {
      margin-bottom: 30px;
    }

    .input-row {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 10px;
    }

    .input-row input[type="text"],
    .input-row input[type="number"],
    .input-row input[type="color"] {
      padding: 5px;
      font-size: 14px;
    }

    .input-row button {
      padding: 4px 8px;
      background: #e74c3c;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    #addBtn {
      margin-top: 10px;
      padding: 8px 16px;
      font-size: 16px;
      background: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .pie-chart {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      margin: 30px auto;
      background-image: conic-gradient(#ddd 0% 100%);
      position: relative;
      box-shadow: 0 0 8px rgba(0,0,0,0.2);
    }

    .total-center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }

    .legend {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 20px;
    }

    .legend-item {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 14px;
    }

    .legend-color {
      width: 14px;
      height: 14px;
      display: inline-block;
    }
  </style>
</head>

<body id="top">

  <!-- 
    - #HEADER
  --><?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    .

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
            <a href="./PLANNER.PHP" class="navbar-link"> Planner</a>
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
  </header>
  <!-- <background-image: url(./assets/images/bg.jpeg );></background-image:> -->

             <section class="home" id="home">
             <!-- <img src="./assets1/images/bg.png" alt="" class="home__img"> -->

                <div class="home__container container grid">
                    <div class="home__data"> WELCOMES YOU TO THE    </span>
                        <h1 class="home__data-title"> Ethical shadows <br>Money Mamangement calculator  <br><b> <br> Go and Explore  <br> </b></h1>
                        <!-- <a href="#container" class="button">Explore</a> -->

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
<!-- 
                    <div class="home__info">
                        <div>
                            <span class="home__info-title">today's most viral photo</span>
                            <a href="blog.php" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="assets1//img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div> -->
                </div>
            </section>

  <div class="container">
    <h1>Pie Chart Calculator</h1>

    <div class="inputs" id="inputContainer"></div>
    <button id="addBtn">Add Category</button>

    <div class="pie-chart" id="pieChart">
      <div class="total-center" id="totalAmount">0</div>
    </div>

    <div class="legend" id="legend"></div>
  </div>

  <script>
    const inputContainer = document.getElementById('inputContainer');
    const pieChart = document.getElementById('pieChart');
    const totalAmount = document.getElementById('totalAmount');
    const legend = document.getElementById('legend');
    const addBtn = document.getElementById('addBtn');

    function createInput(label = '', value = '', color = '#'+Math.floor(Math.random()*16777215).toString(16)) {
      const row = document.createElement('div');
      row.className = 'input-row';

      row.innerHTML = `
        <input type="text" placeholder="Label" value="${label}">
        <input type="number" placeholder="Value" value="${value}">
        <input type="color" value="${color}">
        <button onclick="removeInput(this)">✕</button>
      `;

      inputContainer.appendChild(row);
      updateChart();
      row.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', updateChart);
      });
    }

    function removeInput(button) {
      button.parentElement.remove();
      updateChart();
    }

    function updateChart() {
      const rows = document.querySelectorAll('.input-row');
      const data = [];
      let total = 0;

      rows.forEach(row => {
        const label = row.children[0].value || 'Unnamed';
        const value = parseFloat(row.children[1].value) || 0;
        const color = row.children[2].value;

        if (value > 0) {
          data.push({ label, value, color });
          total += value;
        }
      });

      let current = 0;
      const segments = data.map(item => {
        const start = current;
        const percent = (item.value / total) * 100;
        current += percent;
        return `${item.color} ${start}% ${current}%`;
      });

      pieChart.style.backgroundImage = `conic-gradient(${segments.join(',')})`;
      totalAmount.textContent = total;

      // Update legend
      legend.innerHTML = '';
      data.forEach(item => {
        const div = document.createElement('div');
        div.className = 'legend-item';
        div.innerHTML = `<span class="legend-color" style="background:${item.color}"></span>${item.label} (${((item.value / total) * 100).toFixed(1)}%)`;
        legend.appendChild(div);
      });
    }

    // Initial categories
    
    createInput('enter category', 30);
    createInput('enter category', 50);
    createInput('enter category ', 20);
    addBtn.addEventListener('click', () => createInput());
  </script>
    </body>


