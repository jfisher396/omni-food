<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/resources/favicons/omni-food-favicon.ico">
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />
    
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"
    >
  </script>
  <script src="https://kit.fontawesome.com/e64903163a.js" crossorigin="anonymous"></script>
    
    <title>Omni-Food</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="row">
          <img
            src="resources/img/logo-white.png"
            alt="Omnifood logo-white"
            class="logo"
          />
          <img
            src="resources/img/logo.png"
            alt="Omnifood logo"
            class="logo-black"
          />
          <ul class="main-nav js--main-nav">
            <li><a href="#features">Food Delivery</a></li>
            <li><a href="#steps">How it works</a></li>
            <li><a href="#cities">Cities</a></li>
            <li><a href="#plans">Sign up</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon"><i class="fas fa-hamburger"></i></a>
            
        </div>
      </nav>
      <div class="hero-text-box">
        <h1>
          Goodbye junk food.<br />
          Hello super healthy meals.
        </h1>
        <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
        <a class="btn btn-ghost js--scroll-to-features" href="#"
          >Show me more</a
        >
      </div>
    </header>

    <!-- features section -->
    <section class="section-features js--section-features" id="features">
      <div class="row">
        <h2>Get food fast &mdash; not fast food.</h2>
        <p class="long-copy">
          Hello, we're Omnifood, your new premium food delivery service. We know
          you're always busy. No time for cooking. So let us take care of that,
          we're really good at it, we promise!
        </p>
        
      </div>
      <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
          <ion-icon
            name="calendar-outline"
            alt="calendar icon"
            class="features-icon"
          ></ion-icon>
          <h3>Up to 365 days/year</h3>
          <p>
            Never cook again! We really mean that. Our subscription plans
            include up to 365 days/year coverage. You can also choose to order
            more flexibly if that's your style.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon
            name="time-outline"
            alt="clock icon"
            class="features-icon"
          ></ion-icon>
          <h3>Ready in 20 minutes</h3>
          <p>
            You're only twenty minutes away from your delicious and super
            healthy meals delivered right to your home. We work with the best
            chefs in each town to ensure that you're 100% happy.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon
            name="leaf-outline"
            alt="leaf icon"
            class="features-icon"
          ></ion-icon>
          <h3>100% organic</h3>
          <p>
            All our vegetables are fresh, organic and local. Animals are raised
            without added hormones or antibiotics. Good for your health, the
            environment, and it also tastes better!
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <ion-icon
            name="cart-outline"
            alt="shopping cart icon"
            class="features-icon"
          ></ion-icon>
          <h3>Order anything</h3>
          <p>
            We don't limit your creativity, which means you can order whatever
            you feel like. You can also choose from our menu containing over 100
            delicious meals. It's up to you!
          </p>
        </div>
      </div>
    </section>

    <!-- favorite meals section -->
    <section class="section-meals">
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/1.jpg"
              alt="Korean bibimbap with egg and vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/2.jpg"
              alt="Simple italian pizza with cherry tomatoes"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/3.jpg"
              alt="Chicken breast steak with vegetables "
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/4.jpg" alt="Autumn pumpkin soup" />
          </figure>
        </li>
      </ul>

      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/5.jpg"
              alt="Paleo beef steak with vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/6.jpg"
              alt="Healthy baguette with egg and vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/7.jpg"
              alt="Burger with cheddar and bacon "
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/8.jpg"
              alt="Granola with cherries and strawberries"
            />
          </figure>
        </li>
      </ul>
    </section>

    <section class="section-steps" id="steps">
      <div class="row">
        <h2>How it works &mdash; Simple as 1, 2, 3</h2>
      </div>

      <div class="row">
        <!-- left column -->
        <div class="col span-1-of-2 steps-box">
          <img
            src="resources/img/app-iPhone.png"
            alt="Omnifood app on iPhone"
            class="app-screen js--wp-2"
          />
        </div>
        <!-- right column -->
        <div class="col span-1-of-2 steps-box">
          <div class="works-step">
            <div>1</div>
            <p>
              Choose the subscription plan that best fits your needs and sign up
              today.
            </p>
          </div>
          <div class="works-step">
            <div>2</div>
            <p>
              Order your delicious meal using our mobile app or website. Or you
              can even call us!
            </p>
          </div>
          <div class="works-step">
            <div>3</div>
            <p>
              Enjoy your meal after less than 20 minutes. See you the next time!
            </p>
          </div>
          <a href="#" class="btn-app-apple"
            ><img src="resources/img/download-app.svg" alt="app store button"
          /></a>
          <a href="#" class="btn-app-android"
            ><img
              src="resources/img/download-app-android.png"
              alt="play store button"
          /></a>
        </div>
      </div>
    </section>

    <!-- cities section -->
    <section class="section-cities" id="cities">
      <div class="row">
        <h2>We're currently in these cities</h2>
      </div>
      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
          <img src="resources/img/lisbon-3.jpg" alt="Lisbon" />
          <h3>Lisbon</h3>
          <div class="city-feature">
            <ion-icon name="person" class="cities-icon"></ion-icon>
            1600+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon name="star" class="cities-icon"></ion-icon>
            60+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon name="logo-twitter" class="cities-icon"></ion-icon>
            <a href="#">@omnifood_lx</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/san-francisco.jpg" alt="San Francisco" />
          <h3>San Francisco</h3>
          <div class="city-feature">
            <ion-icon name="person" class="cities-icon"></ion-icon>
            3700+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon name="star" class="cities-icon"></ion-icon>
            160+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon name="logo-twitter" class="cities-icon"></ion-icon>
            <a href="#">@omnifood_sf</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/berlin.jpg" alt="Berlin" />
          <h3>Berlin</h3>
          <div class="city-feature">
            <ion-icon name="person" class="cities-icon"></ion-icon>
            2300+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon name="star" class="cities-icon"></ion-icon>
            110+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon name="logo-twitter" class="cities-icon"></ion-icon>
            <a href="#">@omnifood_berlin</a>
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/london.jpg" alt="London"/>
          <h3>London</h3>
          <div class="city-feature">
            <ion-icon name="person" class="cities-icon"></ion-icon>
            1200+ happy eaters
          </div>
          <div class="city-feature">
            <ion-icon name="star" class="cities-icon"></ion-icon>
            50+ top chefs
          </div>
          <div class="city-feature">
            <ion-icon name="logo-twitter" class="cities-icon"></ion-icon>
            <a href="#">@omnifood_london</a>
          </div>
        </div>
      </div>
    </section>

    <!-- testimonial section -->
    <section class="section-testimonials">
      <div class="row">
        <h2>Our customers can't live without us</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <blockquote>
            Omnifood is just awesome! I just launched a startup which leaves me
            with no time for cooking, so Omnifood is a life-saver. Now that I
            got used to it, I couldn't live without my daily meals!
          </blockquote>
          <p class="customer">
            <img
              src="resources/img/customer-1.jpg"
              alt="Alberto Duncan"
            />Alberto Duncan
          </p>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            Inexpensive, healthy and great-tasting meals, delivered right to my
            home. We have lots of food delivery here in Lisbon, but no one comes
            even close to Omnifood. Me and my family are so in love!
          </blockquote>
          <p class="customer">
            <img src="resources/img/customer-2.jpg" alt="Joana Silva" />Joana
            Silva
          </p>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            I was looking for a quick and easy food delivery service in San
            Franciso. I tried a lot of them and ended up with Omnifood. Best
            food delivery service in the Bay Area. Keep up the great work!
          </blockquote>
          <p class="customer">
            <img
              src="resources/img/customer-3.jpg"
              alt="Milton Chapman"
            />Milton Chapman
          </p>
        </div>
      </div>
    </section>

    <!-- plans section -->
    <section class="section-plans js--section-plans" id="plans">
      <div class="row">
        <h2>Start eating healthy today</h2>
      </div>
      <div class="row">
        <div class="col span-1-of-3">
          <div class="plan-box js--wp-4">
            <div>
              <h3>Premium</h3>
              <p class="plan-price">$399 <span>/ month</span></p>
              <p class="plan-price-meal">That's only $13.30 per meal</p>
            </div>
            <div>
              <ul>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>1
                  meal every day
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>Order
                  24/7
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon
                  >Access to newest creations
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>Free
                  delivery
                </li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-full">Sign up now</a>
            </div>
          </div>
        </div>

        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Pro</h3>
              <p class="plan-price">$149 <span>/ month</span></p>
              <p class="plan-price-meal">That's only $14.90 per meal</p>
            </div>
            <div>
              <ul>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>1
                  meal 10 days/month
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>Order
                  24/7
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon
                  >Access to newest creations
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>Free
                  delivery
                </li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-ghost">Sign up now</a>
            </div>
          </div>
        </div>

        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Starter</h3>
              <p class="plan-price">$19 <span>/ meal</span></p>
              <p class="plan-price-meal">&nbsp;</p>
            </div>
            <div>
              <ul>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>1
                  meal
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>Order
                  from 8am to 12pm
                </li>
                <li>
                  <ion-icon name="close" class="plan-icons"></ion-icon>
                </li>
                <li>
                  <ion-icon name="checkmark" class="plan-icons"></ion-icon>Free
                  delivery
                </li>
              </ul>
            </div>
            <div>
              <a href="#" class="btn btn-ghost">Sign up now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact form section -->
    <section class="section-form" id="form">
      <div class="row">
        <h2>We're happy to hear from you!</h2>
      </div>

      
      <div class="row">
        <?php
        if($GET['success'] == 1) {
            echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>"
        }
        
        if($GET['success'] == -1) {
            echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div>"
        }
        
        ?>
      </div>
      

      <div class="row">
        <form method="post" action="mailer-new.php" class="contact-form">
          <div class="row">
            <div class="col span-1-of-3">
              <label for="name">Name</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Your name"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label for="email">Email</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Your email"
                required
              />
            </div>
          </div>
          
          <div class="row">
            <div class="col span-1-of-3">
              <label for="find-us">How did you find us?</label>
            </div>
            <div class="col span-2-of-3">
              <select name="find-us" id="find-us">
                <option value="friends" selected>Friend referral</option>
                <option value="search">Search engine</option>
                <option value="advertisement">Ad</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>Newsletter?</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="checkbox"
                name="newsletter"
                id="newsletter"
                checked
              />
              Yes, please
            </div>
          </div>
          <div class="row">
            <div class="col span-1-of-3">
              <label>Drop us a line</label>
            </div>
            <div class="col span-2-of-3">
              <textarea
                name="message"
                placeholder="Your message here"
              ></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col span-1-of-3">
              <label>&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <input type="submit" value="Send it!" />
            </div>
          </div>
        </form>
      </div>
    </section>

    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">iOS App</a></li>
            <li><a href="#">Android App</a></li>
          </ul>
        </div>

        <div class="col span-1-of-2">
          <ul class="social-links">
            <li>
              <a href="#"
                ><ion-icon
                  name="logo-facebook"
                  class="footer-icon facebook-icon"
                ></ion-icon
              ></a>
            </li>
            <li>
              <a href="#"
                ><ion-icon
                  name="logo-twitter"
                  class="footer-icon twitter-icon"
                ></ion-icon
              ></a>
            </li>
            <li>
              <a href="#"
                ><ion-icon
                  name="logo-instagram"
                  class="footer-icon instagram-icon"
                ></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <p>Copyright &copy; 2020 Omnifood. All rights reserved.</p>
        <p>Designed by Jonas Schmedtmann</p>
        <p>
          <a
            href="https://james-fisher-react-portfolio.herokuapp.com/"
            target="_blank"
            >Built by James Fisher Web Developer</a
          >
        </p>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
  </body>
</html>

<!-- End of line -->
