<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])) {
    $name = $_POST['email'];
    echo "User Has submitted the form and entered this name : <b> $name </b><br>";
 
    // Validate email
    // if(empty(trim($_POST["email"]))){
    //     $username_err = "Please enter a email.";
    // } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["email"]))){
    //     $username_err = "Username can only contain letters, numbers, and underscores.";
    // } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]); //ia valoarea email-ului din form
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    echo "Select works";
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    // }
    
    // Validate password
    // if(empty(trim($_POST["password"]))){
    //     $password_err = "Please enter a password.";     
    // } elseif(strlen(trim($_POST["password"])) < 6){
    //     $password_err = "Password must have atleast 6 characters.";
    // } else{
    //     $password = trim($_POST["password"]);
    // }
    $password = trim($_POST["password"]);
    
    // Validate confirm password
    // if(empty(trim($_POST["confirm_password"]))){
    //     $confirm_password_err = "Please confirm password.";     
    // } else{
    //     $confirm_password = trim($_POST["confirm_password"]);
    //     if(empty($password_err) && ($password != $confirm_password)){
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }
    
    // Check input errors before inserting in database
    if(empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            
            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            echo "Email: $param_email<br>";
            echo "Password: $param_password<br>";
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo "After execution";
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
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
                            echo "<h2>Sign Up</h2>";
                        ?>
                
                        </div>
                        <div class="form-container">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" method="post">
                                <div class="form-element">
                                    <label for="firstName">First Name</label>
                                    <input type="text" name="firstName" id="firstName" placeholder="Enter your first name" required/>
                                    <div class="error-text" id="firstName-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" name="lastName" id="lastName" placeholder="Enter your last name" required/>
                                    <div class="error-text" id="lastName-error"></div>
                                </div>
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
                                <div class="form-element">
                                    <label for="repassword">Re-enter Password</label>
                                    <input type="password" name="repassword" id="repassword" placeholder="**********"required/>
                                    <div class="error-text" id="repassword-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="tel">Mobile number</label>
                                    <input type="tel" name="tel" id="tel" placeholder="000-000-0000"required/>
                                    <div class="error-text" id="tel-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="date">Date of birth</label>
                                    <input type="date" name="birthDate" id="birthDate" placeholder="xx-xx-xxxx"/>
                                    <div class="error-text" id="birthDate-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" id="country" placeholder="Enter country"required/>
                                    <div class="error-text" id="country-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" placeholder="Enter city"required />
                                    <div class="error-text" id="city-error"></div>
                                </div>
                                <div class="form-element">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" placeholder="Enter address" />
                                    <div class="error-text" id="address-error"></div>
                                </div>
                               
                                <div class="form-element">
                                    <span>
                                        <input type="checkbox" value="yes" name="terms" id="terms" required>
                                        <label for="terms">Agree with the website's terms and conditions</label>
                                        <div class="error-text" id="terms-error"></div>
                                    </span>
                                    
                                    <nav>
                                        <a href="https://policies.google.com/terms?hl=en-US" target="_blank">Terms and conditions</a>
                                    </nav>

                                    <div class="error-text" id="terms-error"></div>
                                </div>

                                <div>
                                    <input type="reset" value="Reset">
                                    <button type="submit" id="sign-up" name="submit" value="Submit" disabled>Sign Up</button>
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
    <script type="text/javascript" src="./signup.js"></script>
    
</html>


