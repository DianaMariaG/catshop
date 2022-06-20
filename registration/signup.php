<?php

include '../database/connection.php';
$db = new Database();
$conn = $db->getConnection();
 
$first_name = $_POST['first_name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$tel = $_POST['tel'];
$birthDate = $_POST['birthDate'];
$country = $_POST['country'];
$city = $_POST['city'];
$address = $_POST['address'];
$submit = $_POST['submit'];
$registration_error = '';

if(isset($submit)) {
    $sqlStatement = "Select * from user where email = '$email'";
        
    $result = $conn->query($sqlStatement);
    $rows = $result->fetch_all();
    
    if (count($rows) == 0) {
        $statement = $conn->prepare("INSERT INTO user
        (first_name, last_name, email, password, mobile_number, birthdate, country, city, home_address)
        VALUES (?,?,?,?,?,?,?,?,?)");
        
        $statement->bind_param("sssssssss",$first_name, $lastName, $email, $password, $tel, $birthDate, $country, $city, $address);
     
        $statement->execute();
        header("location: ../login.php"); 
    } else {
        $registration_error = "This email already exists! Please try again!";
    }  
  
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
                    <a href="../index.php">
                        <img src="../cats/cat-eye.png" alt="logo image" />
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
                            <h2>Sign Up</h2>
                        <?php 
                            if(!empty($registration_error)){
                                echo '<div class="alert-email">' . $registration_error . '</div>';
                            }  
                        ?>
                
                        </div>
                        <div class="form-container">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" method="post">
                                <div class="form-element">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required/>
                                    <div class="error-text" id="first_name-error"></div>
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
                                    <label for="birthDate">Date of birth</label>
                                    <input type="date" name="birthDate" id="birthDate" placeholder="xx-xx-xxxx" required/>
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
                                    <input type="text" name="address" id="address" placeholder="Enter address" required />
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
                                    <button type="submit" id="sign-up" name="submit" disabled>Sign Up</button>
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
    <script type="text/javascript" src="./signup.js"></script>
    
    
</html>


