<?php
    session_start(); 
    include("includes/database.php");

    $dbConnection = getDatabaseConnection("online_gamestop");
    $total = 0;
    $platform_array = $_SESSION['platformId'];
    $games_array = $_SESSION['gameId'];
   // print_r($platform_array);
    
    for($i = 0; $i < count($platform_array); $i++){
        echo "Platform ID: " . $platform_array[$i] . " Game Id: " . $games_array[$i];
        echo "<br />";
    }
   // print_r($_GET['buy']);
    $items = $_GET['buy'];
    
    if(isset($items)){
        foreach($items as $item){
        array_push($_SESSION['gameId'], $item);
    }
    
    }
    function displayShoppingCart(){
        global $total;
        global $dbConnection;
        echo "<table border = 1>";
        echo "<th> Title</th>";
        echo "<th> Description</th>";
        echo " <th> Price</th>";
        echo "<th> rating</th>";
        echo "<th> Star Rating</th>";
        echo "<th> release date</th>";
        if(isset($_SESSION['gameId'])){
            
        
         foreach($_SESSION['gameId'] as $game){
              $sql = "SELECT title, description, price, rating, starRating, releaseDate from `game` where
                game.gameId='$game'";
             $statement = $dbConnection->prepare($sql);
             $statement->execute();
             $records = $statement->fetchAll(PDO::FETCH_ASSOC);
             $total += $records[0]['price'];
         
             echo "<tr>";
             echo "<td>" . $records[0]['title'] . "</td>";
             echo "<td>" . $records[0]['description'] . "</td>";
             echo "<td>" . $records[0]['price'] . "</td>";
             echo "<td>" . $records[0]['rating'] . "</td>";
             echo "<td>" . $records[0]['starRating'] . "</td>";
             echo "<td>" . $records[0]['releaseDate'] . "</td>";
             echo "</tr>";
            }
        }
         echo "<tr>";
         echo "<td>" . "Total: $" . $total . " dollars " . "</td>";
         echo "</tr>";
         echo"</table>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Shopping Cart</title>
        <link rel="stylesheet" href="resultsStyles.css" type="text/css" />
    </head>
    <body>
       <center> 
       <h1> Shopping Cart</h1>
       <?php
            displayShoppingCart();
        ?>
        
        <input type = "image" src = "img/buy.png" onclick="finished()"width=150 value ="submit form" />
        <br />
        
        </center>
    </body>
    
    
    <script>
        function finished(){
            alert("Transaction complete"); 
            document.location = "Home_Page.php";
        }
        
        
    </script>
</html>