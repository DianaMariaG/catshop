<?php
$host = "localhost";
$username ="diana";
$password = "diana123";
$database = "catshop";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cats Adoption Sanctuary</title>
    <meta charset="utf8">
    <link href="./project.css" rel="stylesheet">
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
                    <img id="green-cat" src="./cats/green-cat.jpg"/>
                    <button id="login-main-page" class="primary-button">Log In</button>
                    <button id="signup-main-page" class="primary-button">Sign Up</button>
                    <button id="logout-main-page" class="primary-button">Log Out</button>
                </div>
            </div>

            <div class="header2">
                <nav>
                    <a href="https://www.cats.org.uk/donate" target="_blank">
                        <img id="donate-cat" src="./cats/donate-cat.png" height="80"/>
                    </a>
                    <p>Donate for cats!</p>
                </nav>
                <nav>
                    <a href="https://projectworldimpact.com/" target="_blank">
                        <img id="volunteer-cat" src="./cats/volunteer-cat.jpg" height="80"/>
                    </a>
                    <p>Be a volunteer!</p>
                </nav>
                <nav>
                    <a href="https://www.catseducation.com/" target="_blank">
                        <img id="cat-school" src="./cats/cat-school.jpg" height="80"/>
                    </a>
                    <p>Learn and teach!</p>
                </nav>
                <nav>
                    <a href="https://www.cattipper.com/" target="_blank">
                        <img id="cat-events" src="./cats/cat-events.jpg" height="80"/>
                    </a>
                    <p>Social and charitable events</p>
                </nav>
                <nav>
                    <a href="https://www.zooplus.ro/" target="_blank">
                        <img id="cat-shop" src="./cats/cat-shop.jpg" height="80"/>
                    </a>
                    <p>Cherish your cat!</p>
                </nav>
                <nav id="user-page-link">
                    <a href="./userPage.php">
                        <img id="adopted-cat" src="./cats/adopted-cat.jpg" height="80"/>
                    </a>
                    <p>My Adopted Cats</p>
                </nav>
            </div>
            <div class="header3" id="myBtnContainer1">
                <button class="btn active" onclick="filterSelection1('all1')"> Show all</button>
                <button class="btn" onclick="filterSelection1('bengalFilter')"> Bengal Cats</button>
                <button class="btn" onclick="filterSelection1('tabbyFilter')"> Tabby Red Cats</button>
                <button class="btn" onclick="filterSelection1('siberianFilter')"> Siberian Cats</button>
                <button class="btn" onclick="filterSelection1('mixedFilter')"> Black and White Cats</button>
            </div>
        </header>     
            
            <div class="text-main">
                <div class="blank-column"></div>
                <div class="cats">
                    <?php
                        include './cat.php';
                        $count = 1;
                        foreach($all_cats as $cat) {
                            $breedClass = 'all1';
                            switch ($cat->breed) {
                                case 'Bengal':
                                    $breedClass = 'bengalFilter';
                                    break;
                                case 'Red Tabby':
                                    $breedClass = 'tabbyFilter';
                                    break;
                                case 'Siberian':
                                    $breedClass = 'siberianFilter';
                                    break;
                                case 'Black and White':
                                    $breedClass = 'mixedFilter';
                                    break;
                            }
                            $adoptButton = "<div class='adopted-cat'></div>";
                            if ($cat->status == 'AVAILABLE') {
                                $adoptButton = "<button onclick=adoptCat('$cat->id') type='button' class='adopt-button'>Adopt Me!</button>"; 
                            }
                            if($count % 3 == 1) {
                                echo "<div class='display-cats filterDiv1 $breedClass'>";
                            }
                            echo "  
                            <div>
                                <img src=$cat->image_url class='img' alt=$cat->breed/>
                                <h3>$cat->name</h3>
                                <span class='age'>$cat->age year(s) old</span>
                                $adoptButton
                            </div>";
                            if($count % 3 == 0) {
                                echo "</div>";
                            }
                            $count++; 
                        }
                        // $conn->close();   
                    ?>
                </div>
                 
                <div class="logo-link-main">
                    <div class="vertical-menu">
                        <a href="./index.php" class="active">Cat Breeds</a>
                        <a href="./additional_pages/bengal.php" id="bengal-link" target="_blank">Bengal Cats</a>
                        <a href="./additional_pages/tabby.php" id="tabby-link" target="_blank"rge>Red Tabby Cats</a>
                        <a href="./additional_pages/siberian.php" id="siberian-link" target="_blank">Siberian Cats</a>
                        <a href="./additional_pages/black_white.php" id="black-white-link" target="_blank">Black and White Cats</a>
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
    <script type="text/javascript" src="./index.js"></script>
    <script type="text/javascript" src="./filter.js"></script>
    <script type="text/javascript" src="./cat.js"></script>

    
</html>