<?php 
    require_once "../backend/connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/bcmp-logo-64x64.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>BNE Park Management | Function Hire</title>
</head>
<body>
    <header>
        <div>
            <img src="https://nceptior.sirv.com/bneparkmanagement/bcmp-logo-128x128.png" alt="logo">
            <h1>Brisbane City Park Management</h1>
        </div>
        <nav>
            <a href="../index.php"><p>Home</p></a>
            <a href="about.php"><p>About</p></a>
            <a href="events.php"><p>Upcoming Events</p></a>
            <a href="nearby.php"><p>Nearby Amenities</p></a>
            <a href="functionhire.php"><p>Function Hire</p></a>
            <a href="contact.php"><p>Contact</p></a>
        </nav>
        <div id="hamburger-container">
            <img id="hamburger-icon" src="https://nceptior.sirv.com/bneparkmanagement/hamburger.svg" alt="hamburger" />
            <ul id="hamburger-links">
                <a href="../index.php"><p>Home</p></a>
                <li><a href="about.php"><p>About</p></a></li>
                <li><a href="events.php"><p>Upcoming Events</p></a></li>
                <li><a href="nearby.php"><p>Nearby Amenities</p></a></li>
                <li><a href="functionhire.php"><p>Function Hire</p></a></li>
                <li><a href="contact.php"><p>Contact</p></a></li>
            </ul>
        </div>
    </header>
    <main>
        <div>
            <h2>Function Hire</h2>
            <p>
                If you've got the love, and a guest list of your nearest and dearest, Council has perfect uniquely-Brisbane venues for small, special and stylish socially-distanced events for all occasions. 
                From venues with a view to riverside settings and spaces for celebrating on a budget, we've got you covered with this list of best local venues for events. 
                If your interesting is hiring one of our venues please send us an email through our <a href="contact.php">Contact Page</a>.
            </p>
        </div>
        <div class="card-group">
            <?php 
                $sql = "SELECT * FROM eventtypes";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="card">
                            <h3><?php echo $row["eventtype"]; ?></h3>
                            <img src=<?php echo $row["imageurl"]; ?> alt=<?php echo $row["eventtype"]; ?>>
                            <p><?php echo $row["eventtypedesc"];?></p>
                        </div>
                        <?php
                    }
                } else {
                    echo "No results found.";
                }
            
                $connect->close();
            ?>
        </div>
        <h3>Price Estimation Breakdown</h3>
        <div>
            <table>
                <tr>
                    <th colspan="5"><h3>Wedding Price Estimates</h3></th>
                </tr>
                <tr>
                    <th colspan="5"><h3>Time Of Day</h3></th>
                </tr>
                <tr>
                    <td><p>Morning 8-11am</p></td>
                    <td><p>Noon 12-4pm</p></td>
                    <td><p>Evening 5pm-9pm</p></td>
                </tr>
                <tr>
                    <td><p>$150-$250</p></td>
                    <td><p>$400-$600</p></td>
                    <td><p>$700-$1000</p></td>
                </tr>
                <tr>
                    <th colspan="5"><h3>Guest Amount</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$100-$200</p></td>
                    <td><p>$200-$400</p></td>
                    <td><p>$400-$600</p></td>
                </tr>
                <tr>
                    <th colspan="5"><h3>Equipment Hire</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$50-$100</p></td>
                    <td><p>$100-$300</p></td>
                    <td><p>$300-$600</p></td>
                </tr>
                <tr>
                    <th colspan="5"><h3>Catering Service</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$200-$500</p></td>
                    <td><p>$1000-$3000</p></td>
                    <td><p>$4000-$6000</p></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th colspan="5"><h3>Corperate Function</h3></th>
                </tr>
                <tr>
                    <th colspan="5"><h3>Time Of Day</h3></th>
                </tr>
                <tr>
                    <td><p>Morning 8-11am</p></td>
                    <td><p>Noon 12-4pm</p></td>
                    <td><p>Evening 5pm-9pm</p></td>
                </tr>
                <tr>
                    <td><p>$150-$250</p></td>
                    <td><p>$400-$600</p></td>
                    <td><p>$700-$1000</p></td>
                </tr>
                <tr>
                    <th colspan="5"><h3>Guest Amount</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$100-$200</p></td>
                    <td><p>$200-$400</p></td>
                    <td><p>$400-$600</p></td>
                </tr>
                <tr>
                    <th colspan="5"><h3>Equipment Hire</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$50-$100</p></td>
                    <td><p>$100-$300</p></td>
                    <td><p>$300-$600</p></td>
                </tr>
                <th colspan="5"><h3>Catering Service</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$200-$500</p></td>
                    <td><p>$1000-$3000</p></td>
                    <td><p>$4000-$6000</p></td>
                </tr>
            </table>
            <table>
                <tr>
                    <th colspan="5"><h3>Music Event</h3></th>
                </tr>
                <tr>
                    <th colspan="5"><h3>Time Of Day</h3></th>
                </tr>
                <tr>
                    <td><p>Morning 8-11am</p></td>
                    <td><p>Noon 12-4pm</p></td>
                    <td><p>Evening 5pm-9pm</p></td>
                </tr>
                <tr>
                    <td><p>$1000-$2000</p></td>
                    <td><p>$3000-$5000</p></td>
                    <td><p>$6000-$10000</p></td>
                </tr>
                <tr>
                <tr>
                    <th colspan="5"><h3>Equipment Hire</h3></th>
                </tr>
                <tr>
                    <td><p>Stage</p></td>
                    <td><p>Chairs</p></td>
                    <td><p>Outdoor Umbrellas or Heaters</p></td>
                </tr>
                <tr>
                    <td><p>$5000-$1000</p></td>
                    <td><p>$1000-$3000</p></td>
                    <td><p>$3000-$5000</p></td>
                </tr>
                <th colspan="5"><h3>Catering Service</h3></th>
                </tr>
                <tr>
                    <td><p>10-50 Guests</p></td>
                    <td><p>50-100 Guests</p></td>
                    <td><p>100-200 Guests</p></td>
                </tr>
                <tr>
                    <td><p>$200-$500</p></td>
                    <td><p>$1000-$3000</p></td>
                    <td><p>$4000-$6000</p></td>
                </tr>
            </table>
        </div>
    </main>
    <footer>
        <span>
            <h2>Brisbane City Park Management</h2>
            <h2 id="email">@</h2>
        </span>
        <div></div>
        <span>
            <a href="../index.php"><p>Home</p></a>
            <a href="about.php"><p>About</p></a>
            <a href="events.php"><p>Upcoming Events</p></a>
            <a href="nearby.php"><p>Nearby Amenities</p></a>
            <a href="functionhire.php"><p>Function Hire</p></a>
            <a href="contact.php"><p>Contact</p></a>
        </span>
        <div></div>
        <span>
            <a href="https://www.facebook.com/" target="blank"><img src="https://nceptior.sirv.com/bneparkmanagement/facebook.svg" alt="social media icon"></a>
            <a href="https://www.instagram.com/" target="blank"><img src="https://nceptior.sirv.com/bneparkmanagement/instagram.svg" alt="social media icon"></a>
            <a href="https://www.linkedin.com/feed/" target="blank"><img src="https://nceptior.sirv.com/bneparkmanagement/linkedin.svg" alt="social media icon"></a>
        </span>
        <div></div>
        <span>
            <img src="https://nceptior.sirv.com/bneparkmanagement/bcmp-logo-250x250.png" alt="logo">
        </span>
    </footer>
</body>
</html>