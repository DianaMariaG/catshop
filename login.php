<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf8">
    <link href="./signup.css" rel="stylesheet">
</head>
<body>
    <div class="body-container">
        <header class="header-container">
            <div class="header1">
                <div id="logo-container">
                    <img src="./cats/cat-eye.png" alt="logo image" />
                    <h3 id="eye-message">For the cats we love...</h3>
                </div>

                <div id="text-container">
                    <h3>Cats Adoption Sanctuary</h3>
                </div>

                <div id="button-container">
                    <img id="green-cat" src="./cats/green-cat.jpg"/>
                    <button id="login-main-page" class="primary-button">Login</button>
                    <button id="signup-main-page" class="primary-button">Sign Up</button>
                </div>
            </div>

            <div class="header2">
                <nav>
                    <a href="https://www.google.com" target="_blank">
                        <img id="donate-cat" src="./cats/donate-cat.png" height="80"/>
                    </a>
                    <p>Donate for cats!</p>
                </nav>
                <nav>
                    <a href="https://www.youtube.com" target="_blank">
                        <img id="volunteer-cat" src="./cats/volunteer-cat.jpg" height="80"/>
                    </a>
                    <p>Be a volunteer!</p>
                </nav>
                <nav>
                    <a href="https://www.scribd.com">
                        <img id="cat-school" src="./cats/cat-school.jpg" height="80"/>
                    </a>
                    <p>Learn and teach!</p>
                </nav>
                <nav>
                    <a href="https://www.scribd.com">
                        <img id="cat-events" src="./cats/cat-events.jpg" height="80"/>
                    </a>
                    <p>Social and charitable events</p>
                </nav>
                <nav>
                    <a href="https://www.scribd.com">
                        <img id="cat-shop" src="./cats/cat-shop.jpg" height="80"/>
                    </a>
                    <p>Cherish your cat!</p>
                </nav>
                <nav>
                    <a href="https://www.scribd.com">
                        <img id="adopted-cat" src="./cats/adopted-cat.jpg" height="80"/>
                    </a>
                    <p>Adopt our cats!</p>
                </nav>
            </div>
        </header>
           
        <main class="main-container">
            <div class="text-main">
                <div class="blank-column"></div>

                <div class="main-form">
                    <div class="sign-up-container">
                        <div class="image-container">
                            <img src="./cats/green-cat.jpg" id="green-cat-form" alt="Dublin Coding School" />
                            <p id="green-cat-text">Cats Adoption Sanctuary</p>
                        </div>
                        <div class="title-container">
                        <?php 
                            echo "<h2>Log In</h2>";
                        ?>
                
                        </div>
                        <div class="form-container">
                            <form action="./log-me-in.php" class="form" method="post">
                                <div class="form-element">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="name@text.com" required/>
                                    <div class="error-text" id="email-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="**********"required/>
                                    <div class="error-text" id="password-error"></div>
                                </div>
                                
                                <div>
                                    <input type="reset">
                                    <button type="submit" id="sign-in">Sign In</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
    
                    

                <div class="logo-link-main">
                    <div class="vertical-menu">
                        
                    </div>
                </div>
            </div>
        </main>
           
           <footer class="footer-container">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img id="purple-cat" src="./cats/purple-cat.jpg"alt="purple cat"/>
                    </div>
                    <nav class="footer-link">
                        <a href="https://www.facebook.com" target="_blank">Follow us on Facebook</a>
                    </nav>
                </div>
                <div class="footer-right">
                    <div class="footer-open-days">Mon - Fri 9AM - 6PM</div>
                    <div class="footer-closed-days">Sat - Sun CLOSED</div>
                </div>
            </footer>
            
       </div>
    </body>
    <script type="text/javascript" src="./login.js"></script>
    
</html>