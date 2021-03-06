<?php
    include("includes/database.php");

    $temp = getDatabaseConnection("online_gamestop");



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Game Stop Online Catalog </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <head>
            
        </head>
        <main>
            <h1>Welcome to Game Center</h3>
            <hr>
            <h2>Energy to the players. By the players, for the players!</h2>
            <form action="results.php">
                Find games <input type="text" style="width:400px" name="searchBar" id='searchBar'/> 
                <input type="submit" name="Submit" value="Submit">
            </form>
            
            <hr>
            
            <form action="results.php">
                Search by price range: 
                <input type="radio" value="1" name='price'/> > $55 |
                <input type="radio" value="2" name='price'/> $25 - $54 |
                <input type="radio" value="3" name='price'/> < $25
                <input type="submit" value="Submit"/>
            </form>
            
            <hr>
            
            <nav>
                
                <div class="dropdown">
                    <button onclick="myFunction(1)" class="dropbtn">Xbox 360</button>
                      <div id="XBox360" class="dropdown-content"> 
                        <button type="button" onclick="setGameInfo(4, 0, 30)">All</button>
                        <button type="button" onclick="setGameInfo(4, 1, 30)">Action</button>
                        <button type="button" onclick="setGameInfo(4, 2, 30)"> Shooter </button>
                        <button type="button" onclick="setGameInfo(4, 3, 30)"> Horror </button>
                        <button type="button" onclick="setGameInfo(4, 4, 30)"> MMO-RPG</button>
                        <button type="button" onclick="setGameInfo(4, 5, 30)"> Strategy </button>
                        <button type="button" onclick="setGameInfo(4, 6, 30)"> Simulation </button>
                        <button type="button" onclick="setGameInfo(4, 7, 30)"> MOBA </button>
                        <button type="button" onclick="setGameInfo(4, 8, 30)"> Arcade </button>
                        <!---
                        <a href="results.php?genre=1?console=4">Action</a>
                        <a href="results.php?genre=2?console=4">Shooter</a>
                        <a href="results.php?genre=3?console=4">Horror</a>
                        <a href="results.php?genre=4?console=4">MMO-RPG</a>
                        <a href="results.php?genre=5?console=4">Strategy</a>
                        <a href="results.php?genre=6?console=4">Simulation</a>
                        <a href="results.php?genre=7?console=4">MOBA</a>
                        <a href="results.php?genre=8?console=4">Arcade</a>
                        -->
                      </div>
                </div>
                
 
                <div class="dropdown">
                    <button onclick="myFunction(2)" class="dropbtn">Xbox One</button>
                    <div id="XboxOne" class="dropdown-content">

                        <button type="button" onclick="setGameInfo(1, 0, 30)">All</button>
                        <button type="button" onclick="setGameInfo(1, 1, 30)">Action</button>
                        <button type="button" onclick="setGameInfo(1, 2, 30)"> Shooter </button>
                        <button type="button" onclick="setGameInfo(1, 3, 30)"> Horror </button>
                        <button type="button" onclick="setGameInfo(1, 4, 30)"> MMO-RPG</button>
                        <button type="button" onclick="setGameInfo(1, 5, 30)"> Strategy </button>
                        <button type="button" onclick="setGameInfo(1, 6, 30)"> Simulation </button>
                        <button type="button" onclick="setGameInfo(1, 7, 30)"> MOBA </button>
                        <button type="button" onclick="setGameInfo(1, 8, 30)"> Arcade </button>
                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(3)" class="dropbtn">PS3</button>
                        <div id="PS3" class="dropdown-content">

                        <button type="button" onclick="setGameInfo(3, 0, 30)">All</button>
                        <button type="button" onclick="setGameInfo(3, 1, 30)">Action</button>
                        <button type="button" onclick="setGameInfo(3, 2, 30)"> Shooter </button>
                        <button type="button" onclick="setGameInfo(3, 3, 30)"> Horror </button>
                        <button type="button" onclick="setGameInfo(3, 4, 30)"> MMO-RPG</button>
                        <button type="button" onclick="setGameInfo(3, 5, 30)"> Strategy </button>
                        <button type="button" onclick="setGameInfo(3, 6, 30)"> Simulation </button>
                        <button type="button" onclick="setGameInfo(3, 7, 30)"> MOBA </button>
                        <button type="button" onclick="setGameInfo(3, 8, 30)"> Arcade </button>
                        
                        </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(4)" class="dropbtn">PS4</button>
                    <div id="PS4" class="dropdown-content">
                        <button type="button" onclick="setGameInfo(2, 0, 30)">All</button>
                        <button type="button" onclick="setGameInfo(2, 1, 30)">Action</button>
                        <button type="button" onclick="setGameInfo(2, 2, 30)"> Shooter </button>
                        <button type="button" onclick="setGameInfo(2, 3, 30)"> Horror </button>
                        <button type="button" onclick="setGameInfo(2, 4, 30)"> MMO-RPG</button>
                        <button type="button" onclick="setGameInfo(2, 5, 30)"> Strategy </button>
                        <button type="button" onclick="setGameInfo(2, 6, 30)"> Simulation </button>
                        <button type="button" onclick="setGameInfo(2, 7, 30)"> MOBA </button>
                        <button type="button" onclick="setGameInfo(2, 8, 30)"> Arcade </button>

                    </div>
                </div>
                <div class="dropdown">
                    <button onclick="myFunction(5)" class="dropbtn">PC</button>
                    <div id="PC" class="dropdown-content">
                        <button type="button" onclick="setGameInfo(5, 0, 30)">All</button>
                        <button type="button" onclick="setGameInfo(5, 1, 30)">Action</button>
                        <button type="button" onclick="setGameInfo(5, 2, 30)"> Shooter </button>
                        <button type="button" onclick="setGameInfo(5, 3, 30)"> Horror </button>
                        <button type="button" onclick="setGameInfo(5, 4, 30)"> MMO-RPG</button>
                        <button type="button" onclick="setGameInfo(5, 5, 30)"> Strategy </button>
                        <button type="button" onclick="setGameInfo(5, 6, 30)"> Simulation </button>
                        <button type="button" onclick="setGameInfo(5, 7, 30)"> MOBA </button>
                        <button type="button" onclick="setGameInfo(5, 8 30)"> Arcade </button>
                    </div>
                </div>
            </nav>
            
            
            <style>
                button {
                    font-size: 25px;
                    font-family: italic;
                    width: 100%;
                    background-color: transparent;
                    border: none !important;
                }
                button:hover {
                    background-color: #f1f1f1;
                }
            </style>
            <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction(value) {
                if(value === 1){
                    document.getElementById("XBox360").classList.toggle("show");
                    //document.getElementById("PS4").classList.toggle("show");
                }
                else if(value === 2){
                    document.getElementById("XboxOne").classList.toggle("show");
                    //document.getElementById("XBoxOne").classList.toggle("show");
                }
                else if(value === 3){
                    document.getElementById("PS3").classList.toggle("show");
                }
                else if(value === 4){
                    document.getElementById("PS4").classList.toggle("show");
                }
                else if(value === 5){
                    document.getElementById("PC").classList.toggle("show");
                }
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
            
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            
            
            function setGameInfo(platformId, genreId, exdays){
                var d = new Date();
                d.setTime(d.getTime() + (exdays*60*60*60*1000));
                var expires = "expires="+d.toUTCString();
                document.cookie = "platformId" + "=" + platformId + "; " + expires;
                document.cookie = "genreId" + "=" + genreId + "; " + expires; 
                
                document.location = "results.php";
                
                
            }
            
            function getGameInfo(platformId){
                var name = "platformId" + "=";
                var ca = document.cookie.split(';');
                for(var i=0; i<ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1);
                        if (c.indexOf(name) == 0) {
                            return c.substring(name.length, c.length);
                        }
                    }
                    return "";
                
                }
            
            function shoppingCart(){
                document.location = "shoppingCart.php";
            }
            
            </script>
            
             <input type = "image" src = "img/shoppingCart.png" onclick="shoppingCart()"width=150 value ="submit form" />
        </main>
        
        
        
        <style>
            image {
                text-align: center;
                background-color: green; 
            }
        </style>
    </body>
   
</html>