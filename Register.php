<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="FORM123.css">
        
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
          <link rel="shortcut icon" href="assets1/img/favicon.png" type="image/png">
      
          <!--=============== REMIXICONS ===============-->
          <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
          
          <!--=============== SWIPER CSS ===============-->
          <link rel="stylesheet" href="assets1/css/swiper-bundle.min.css">
      
          <!--=============== CSS ===============-->
          <link rel="stylesheet" href="assets1/css/styles.css">
      
          <title>ECHO THE SOCIAL MEDIA </title>
      
        
    </head>
<body>
          <header class="header" id="header">
              <nav class="nav container">
                  <a href="index.php" class="nav__logo" >Ethical shadows</a>
      
                  <div class="nav__menu" id="nav-menu">
                      <ul class="nav__list">
                          <li class="nav__item" >
                              <a href="#home" class="nav__link active-link">Home</a>
                          </li>
                         
                          <li class="nav__item">
                              <a href="goal.php" class="nav__link">Goal</a>
                          </li>
                          <li class="nav__item">
                              <a href="blog.html" class="nav__link">Blog</a>
                          </li>
                          <li class="nav__item">
                              <a href="about.html" class="nav__link">About us </a>
                          </li>
                          <li class="nav__item">
                              <a href="contactpage.php" class="nav__link">Contact</a>
                          </li>
                          <li class="nav__item">
                              <a href="FORM123.php" class="nav__link">Login</a>
                          </li>
                      </ul>
      
                      <div class="nav__dark">
                          <!-- Theme change button -->
                          <span class="change-theme-name">Dark mode</span>
                          <i class="ri-moon-line change-theme" id="theme-button"></i>
                      </div>
      
                      <i class="ri-close-line nav__close" id="nav-close"></i>
                  </div>
      
                  <div class="nav__toggle" id="nav-toggle">
                      <i class="ri-function-line"></i>
                  </div>
              </nav>
          </header>
          <section class="home" id="home">
              <!-- <img src="assets1/img/background.png" alt="" class="home__img"> -->
      
              <div class="home__container container grid">
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="register.php">
                <?php include('error.php'); ?>
                    <h2>REGISTER HERE</h2>
                    <div class="inputbox">
                        <ion-icon name=""></ion-icon>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                        <label for="">User name  </label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" value="<?php echo $email; ?>" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password_1" value="<?php echo $password_1; ?>"required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password_2" value="<?php echo $password_2; ?>"required>
                        <label for="">Confirm password</label>
                    </div>
                   
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me the password <br> <a href="#">Forget Password</a></label>
                      
                    </div>
                    <button type="submit" class="btn" name="reg_user">Register</button>
                    
                    <div class="icons">
                        <a href="Sign in - Google Accounts.html"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </form>
            </div>
        </div>
    </section>



    <!-- <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div class="footer__data">
                    <h3 class="footer__title">Travel</h3>
                    <p class="footer__description">Travel you choose the <br> destination, 
                        we offer you the <br> experience.
                    </p>
                    <div>
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                            <i class="ri-youtube-fill"></i>
                        </a>
                    </div>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">About</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">About Us</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Features</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">New & Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Company</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">Team</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Plan y Pricing</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Become a member</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__data">
                    <h3 class="footer__subtitle">Support</h3>
                    <ul>
                        <li class="footer__item">
                            <a href="" class="footer__link">FAQs</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Support Center</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__rights">
                <p class="footer__copy">&#169; 2021 Bedimcode. All rigths reserved.</p>
                <div class="footer__terms">
                    <a href="#" class="footer__terms-link">Terms & Agreements</a>
                    <a href="#" class="footer__terms-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer> -->

     <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL===============-->
    <script src="asset/js/scrollreveal.min.js"></script>
    
    <!--=============== SWIPER JS ===============-->
    <script src="asset/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="asset/js/main.js"></script>
    
</body>
</html>