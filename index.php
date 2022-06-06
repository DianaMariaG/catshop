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
                    <button id="logout-main-page" class="primary-button">Logout</button>
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
        <div id="myBtnContainer1">
            <button class="btn active" onclick="filterSelection1('all')"> Show all</button>
            <button class="btn" onclick="filterSelection1('bengalFilter')"> Bengal Cats</button>
            <button class="btn" onclick="filterSelection1('tabbyFilter')"> Tabby Red Cats</button>
            <button class="btn" onclick="filterSelection1('siberianFilter')"> Siberian Cats</button>
            <button class="btn" onclick="filterSelection1('mixedFilter')"> Black and White Cats</button>
        </div>
       
           
        <main class="main-container">
            <div class="text-main">
                <div class="blank-column">
                </div>
                <div class="cats">
                    <h1 class="cats-title filterDiv1 bengalFilter">BENGAL CATS</h1>
                    <div class="tiger-cats filterDiv1 bengalFilter">
                        <div class="tiger1" >
                            <img src="./cats/tiger_cat1.jpeg" class="img" alt="Tiger cat"/>
                            <h3>Tiger</h3>
                            <span class="age">2 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="tiger2 oneyear">
                            <img src="./cats/tiger_cat2.png" class="img" alt="Tiger cat"/>
                            <h3>Rajah</h3>
                            <span class="age">3 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="tiger3"> 
                            <img src="./cats/tiger_cat3.jpeg" class="img" alt="Tiger cat"/>
                            <h3>Dawon</h3>
                            <span class="age">1 year old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                    </div>

                    <h1 class="cats-title filterDiv1 tabbyFilter">RED TABBY CATS</h1>
                    <div class="yellow-cats filterDiv1 tabbyFilter">
                        <div class="yellow1">
                            <img src="./cats/yellow_cat1.jpeg" class="img" alt="Tabby cat"/>
                            <h3>Ginger</h3>
                            <span class="age">2 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="yellow2">
                            <img src="./cats/yellow_cat2.jpeg" class="img" alt="Tabby cat"/>
                            <h3>Amber</h3>
                            <span class="age">3 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="yellow3">
                            <img src="./cats/yellow_cat3.jpeg" class="img" alt="Tabby cat"/>
                            <h3>Coral</h3>
                            <span class="age">4 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                    </div>

                    <h1 class="cats-title filterDiv1 siberianFilter">SIBERIAN CATS</h1>
                    <div class="silver-cats filterDiv1 siberianFilter">
                        <div class="silver1">
                            <img src="./cats/silver_cat1.jpeg" class="img" alt="Silver cat"/>
                            <h3>Opal</h3>
                            <span class="age">4 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="silver2">
                            <img src="./cats/silver_cat2.jpeg" class="img" alt="Silver cat"/>
                            <h3>Luna</h3>
                            <span class="age">1 year old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="silver3">
                             <img src="./cats/silver_cat3.jpeg" class="img" alt="Silver cat"/>
                            <h3>Ivory</h3>
                            <span class="age">2 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                    </div>

                    <h1 class="cats-title filterDiv1 mixedFilter">BLACK AND WHITE CATS</h1>
                    <div class="mixed-cats filterDiv1 mixedFilter">
                        <div class="mixed1 ">
                            <img src="./cats/mixed_cat1.jpeg" class="img" alt="Black white cat"/>
                            <h3>Crystal</h3>
                            <span class="age">1 year old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="mixed2">
                            <img src="./cats/mixed_cat2.jpeg" class="img" alt="Black white cat"/>
                            <h3>Onyx</h3>
                            <span class="age">3 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                        <div class="mixed3">
                            <img src="./cats/mixed_cat3.jpeg" class="img" alt="Black white cat"/>
                            <h3>Cruella</h3>
                            <span class="age">3 years old</span>
                            <button type="button" class="adopt-button">Adopt Me!</button> 
                        </div>
                    </div>
                </div>
                
                    
                <div class="logo-link-main">
                    <div class="vertical-menu">
                        <a href="./index.php" class="active">Cat Breeds</a>
                        <a href="./bengal.php" id="bengal-link" target="_blank">Bengal Cats</a>
                        <a href="./tabby.php" id="tabby-link" target="_blank"rge>Red Tabby Cats</a>
                        <a href="./siberian.php" id="siberian-link" target="_blank">Siberian Cats</a>
                        <a href="./black_white.php" id="black-white-link" target="_blank">Black and White Cats</a>
                    </div>
                </div>
            </div>
            
        </main>
        
    </body>
    <script type="text/javascript" src="./index.js"></script>
    <script type="text/javascript" src="./filter.js"></script>
    <script type="text/javascript" src="./filter2.js"></script>

    
</html>