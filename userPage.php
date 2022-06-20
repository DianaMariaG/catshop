<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./registration/signup.css" rel="stylesheet">
    <link href="./project.css" rel="stylesheet">
    <title>User Page</title>
</head>
<body>
    <div class="body-container">
        <header class="header-container">
            <div class="header1">
                <div id="logo-container">
                    <a href="./index.php">
                        <img src="./cats/cat-eye.png" alt="logo image" />
                    </a>
                    <h3 id="eye-message">For the cats we love...</h3>
                </div>

                <div id="text-container">
                    <h3>Cats Adoption Sanctuary</h3>
                </div>

                <div id="button-container">
                    <img id="green-cat" src="/catshop/cats/green-cat.jpg"/>
                    <button id="login-main-page" class="primary-button">Login</button>
                    <button id="signup-main-page" class="primary-button">Sign Up</button>
                    <button id="logout-main-page" class="primary-button">Logout</button>

                </div>
            </div>

            <div class="header2">
                <nav>
                    <a href="https://www.cats.org.uk/donate" target="_blank">
                        <img id="donate-cat" src="/catshop/cats/donate-cat.png" height="80"/>
                    </a>
                    <p>Donate for cats!</p>
                </nav>
                <nav>
                    <a href="https://projectworldimpact.com/" target="_blank">
                        <img id="volunteer-cat" src="/catshop/cats/volunteer-cat.jpg" height="80"/>
                    </a>
                    <p>Be a volunteer!</p>
                </nav>
                <nav>
                    <a href="https://www.catseducation.com/" target="_blank">
                        <img id="cat-school" src="/catshop/cats/cat-school.jpg" height="80"/>
                    </a>
                    <p>Learn and teach!</p>
                </nav>
                <nav>
                    <a href="https://www.cattipper.com/" target="_blank">
                        <img id="cat-events" src="/catshop/cats/cat-events.jpg" height="80"/>
                    </a>
                    <p>Social and charitable events</p>
                </nav>
                <nav>
                    <a href="https://www.zooplus.ro/" target="_blank">
                        <img id="cat-shop" src="/catshop/cats/cat-shop.jpg" height="80"/>
                    </a>
                    <p>Cherish your cat!</p>
                </nav>
                <nav id="user-page-link">
                    <a href="./userPage.php">
                        <img id="adopted-cat" src="/catshop/cats/adopted-cat.jpg" height="80"/>
                    </a>
                    <p>My Adopted Cats</p>
                </nav>
            </div>
        </header>
           
        <main class="main-container">
            <div class="text-main">
                <div class="blank-column-userPage"></div>
                <div class="main-form-userPage" id="history-cats">
                    <h1 id="adoptedCatsTitle">All your adopted cats</h1>
                    
                </div>
                <div class="logo-link-main-userPage">
                    <div class="vertical-menu">
                        
                    </div>
                </div>
            </div>
        </main>
           
           <footer class="footer-container">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img id="purple-cat" src="/catshop/cats/purple-cat.jpg"alt="purple cat"/>
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
    <script type="text/javascript" src="./cat.js"></script>
    <script type="text/javascript" src="./index.js"></script>
    <script type="text/javascript" src="./userPage.js"></script>
</html>


