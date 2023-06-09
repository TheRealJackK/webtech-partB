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
    <title>BNE Park Management | Upcoming Events</title>
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
            <h2>Upcoming Event's</h2>
            <p>
                All year round we have a number of event's in our various parks around Brisbance CBD. 
                If they're listed below they are open to the public.
                Ranging from family friendly events to after dark de-stressers we have something for everybody, new events are listed monthly.
                Come on down, bring your family or friends and join us for a great time out!
            </p>
        </div>
        <div class="card-group">
            <?php 
                $sql = "SELECT * FROM events";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="card">
                            <h3><?php echo $row["eventtitle"]; ?></h3>
                            <img src=<?php echo $row["imageurl"]; ?> alt=<?php echo $row["imageurl"]; ?>>
                            <p><?php echo $row["eventdate"];?></p>
                            <p><?php echo $row["eventdesc"];?></p>
                        </div>
                        <?php
                    }
                } else {
                    echo "No results found.";
                }
            
                $connect->close();
            ?>
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