<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/bcmp-logo-64x64.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>BNE Park Management | Contact Us</title>
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
        <h2>Contact Us</h2>
        <div>
            <form action="../backend/insert.php" method="post">
                <fieldset>
                    <legend>Send Us An Email</legend>
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="myemail@domain.com" required></input>
                    <label>Subject</label>
                    <input type="text" name="_honey" id="honeypot"></input>
                    <select name="subject" id="subject" required>
                        <option>General Enquiry</option>
                        <option>Function Hire</option>
                    </select>
                    <label>Body</label>
                    <textarea rows="5" cols="60" name="message" id="message" placeholder="Message Here" required></textarea>
                    <input type="submit" id="submit" value="Send Enquiry"></input>
                </fieldset>
            </form>
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
</php>