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
    <title>BNE Park Management | What's Nearby</title>
</head>
<body>
    <header>
        <div>
            <img src="../images/bcmp-logo-128x128.png" alt="logo">
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
            <img id="hamburger-icon" src="../images/hamburger.svg" alt="hamburger" />
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
            <h2>Nearby Amenities</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae recusandae quos debitis eligendi consectetur natus quasi molestias, sapiente sed quis quidem provident autem aspernatur. Amet sit odio commodi ducimus accusantium?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo error saepe sapiente repudiandae doloribus ut, aliquid, quod dolores vero animi ullam? Debitis, veritatis iusto ut autem libero excepturi? Praesentium, pariatur.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem ipsa libero, beatae ipsum tenetur nam reiciendis voluptas obcaecati saepe voluptatibus magnam sed fugit maiores illum minus provident. Iusto, sit odio?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero et autem laborum esse atque, labore doloremque numquam placeat officia impedit qui cupiditate. Optio totam quas illo explicabo molestias et a?
            </p>
        </div>
        <div class="card-group">
            <?php 
                $sql = "SELECT * FROM places";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="card">
                            <h3><?php echo $row["placename"]; ?></h3>
                            <img src=<?php echo $row["imageurl"]; ?> alt=<?php ?>>
                            <p><?php echo $row["placedesc"];?></p>
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
            <img src="../images/facebook.svg" alt="social media icon">
            <img src="../images/instagram.svg" alt="social media icon">
            <img src="../images/linkedin.svg" alt="social media icon">
        </span>
        <div></div>
        <span>
            <img src="../images/bcmp-logo-250x250.png" alt="logo">
        </span>
    </footer>
</body>
</php>