<?php
echo "this is php";
$dbServername = "team12.copftkcel1k2.us-east-1.rds.amazonaws.com";
$dbUser = "admin";
$dbPass = "Group12,museum";
$dbName = "FinalTeam12";

$connect = mysqli_connect($dbServername, $dbUser, $dbPass, $dbName) or die("Unable to Connect to '$dbServername'");
// mysqli_select_db($connect, $dbName) or die("Could not open the db '$dbName'");
if($connect->connect_error) {
    die('Bad connection'. $connect->connect_error);
}

session_start();
// $customer_id = $_SESSION['customer']
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <title>Museum Exhibition</title>
        <link rel="stylesheet" href = "./stella_style.css">
        <meta name="viewpoint" conten="width=device-width, initial-scale=1">
    </head>
    <body>
    <!--following is nav bar-->
        <div class="header-container">
            <a href= "../index.php"><img class= "logo" src="images/museum_icon3.png" alt="logo"></a>
            
                <ul class= "nav-links">
                <li class="nav-item name"><a href="../front.php">FabMuseum</a></li>
                    <li class="nav-item"><a href="About.php"> About</a></li>
                    <li class="nav-item"><a href= "./Ticket.html"> Tickets</a></li>
                    <li class="nav-item"><a href= "./exhibition_page.php">Exhibition</a></li>
                    <li class="nav-item"><a href=#> Collection </a></li>
                    
                    <li class="nav-item login-button"><a href="index.php"><button>Logout</button></a></li>
                </ul>
            
        </div>
<!-- following is body -->
        <div class = "body-page">
            <h2>Exhibitions</h2>
            <h3>Current Exhibitions</h4>
            <!--exhibition cards-->
            <div class="all-cards-container">
            <?php
                $result = $connect->query("select * from Exhibition");
                $res = $result->fetch_all();
                if($res[0][1] == "Leonardo's collection"){
                    echo "<div class= 'cards'>";
                    echo "<img src='images/leonardo.jpg.webp' alt= 'work by leonardo'  >";
                    echo "<div class = 'container'>";
                    echo "<h4><b>Leonardo</b></h4>";
                    echo "<p>Through April 4, 2022</p>";
                    echo "<button>Read More</button>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
                <div class= "cards">
                    <img src="images/monet.jpg" alt= "work by Monet"  >
                    <div class = "container">
                        <h4><b>Monet</b></h4>
                        <p>Through April 4, 2022</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class= "cards">
                    <img src="images/rafael.jpg" alt= "work by Rafael"  >
                    <div class = "container">
                        <h4><b>Rafael</b></h4>
                        <p>Through April 4, 2022</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class= "cards">
                    <img src="images/vangoh.jpg" alt= "work by Vangoh"  >
                    <div class = "container">
                        <h4><b>Vangoh</b></h4>
                        <p>Through April 4, 2022</p>
                        <button>Read More</button>
                    </div>
                </div>
                <div class= "cards">
                    <img src="images/rococo-period.jpg" alt= "work during Rococo"  >
                    <div class = "container">
                        <h4><b>Rococo period art work</b></h4>
                        <p>Through April 4, 2022</p>
                        <button>Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php $connect->close();?>