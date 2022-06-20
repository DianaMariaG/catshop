<?php 
    include './database/connection.php';
    $db = new Database();
    $conn = $db->getConnection();

    $cookieName = 'authenticated';
    $email_login = $_POST['email-login'];
    $password_login = $_POST['password-login'];
    $submit = $_POST['submit'];
    $login_error = '';

    if(isset($submit)) {
        
        $sqlStatement = "Select * from user where email = '$email_login'";
        
        $result = $conn->query($sqlStatement);
        $rows = $result->fetch_all();
        
        if (count($rows) == 1) {
            if(password_verify($password_login, $rows[0][4])){
                setcookie($cookieName, $rows[0][0], time() + 10000*30, "../");
                header("Location: /catshop/index.php");
            } else {
                $login_error = "Your email or your password are incorrect! Please try again!"; 
            }
        } else {
            $login_error = "Your email or your password are incorrect! Please try again!";
        }
    }
    $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf8">
    <link href="./registration/signup.css" rel="stylesheet">
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
                    <button id="login-main-page" class="primary-button">Log In</button>
                    <button id="signup-main-page" class="primary-button">Sign Up</button>
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
            </div>
        </header>
           
        <main class="main-container">
            <div class="text-main">
                <div class="blank-column"></div>

                <div class="main-form">
                    <div class="sign-up-container">
                        <div class="image-container">
                            <img src="/catshop/cats/green-cat.jpg" id="green-cat-form" alt="Dublin Coding School" />
                            <p id="green-cat-text">Cats Adoption Sanctuary</p>
                        </div>
                        <div class="title-container">
                            <h2>Log In</h2>
                        </div>
                        <?php 
                            if(!empty($login_error)){
                                echo '<div class="alert-email">' . $login_error . '</div>';
                            }  
                        ?>
                        <div class="form-container">
                            <form action="./login.php" class="form" method="post">
                                <div class="form-element">
                                    <label for="email-login">Email</label>
                                    <input type="email" name="email-login" id="email-login" placeholder="name@text.com" required/>
                                    <!-- <div class="error-text" id="email-error"></div> -->
                                </div>
                                <div class="form-element">
                                    <label for="password-login">Password</label>
                                    <input type="password" name="password-login" id="password-login" placeholder="**********"required/>
                                    <!-- <div class="error-text" id="password-error"></div> -->
                                </div>
                                <div>
                                    <input type="reset">
                                    <button type="submit" name="submit" id="log-in">Log In</button>
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
    <script type="text/javascript" src="./buttons.js"></script>
    
</html>