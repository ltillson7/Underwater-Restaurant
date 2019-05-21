<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>underwater restaurant</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
        <link rel="stylesheet", type="text/css", href="styles/eventsbookingStyle.css">
        <link rel="stylesheet" type="text/css" href="styles/datepicker.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="main-logo">
            <a href="homepage.html"><img id="underwater-logo" src="images/logo_white.png" alt="underwater restaurant logo" width="100" title="underwater restaurant" /></a>
        </div>
        <nav id="main-menu">
            <ul class="top-nav">
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="location.html">LOCATION</a></li>
                <li><a href="menu.html">MENU</a></li>
                <li><a href="weeklyspecial.html">WEEKLY SPECIAL</a></li>
                <li><a href="eventsbooking.html">RESERVATIONS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <div class="page-wrapper">
        <main id="main">
            <div id="main-content">
                <p id="hours">Our Hours: Monday - Sunday 11:30 AM - 11:30 PM </p>
                <p id="more-info">For further questions or to make reservation over the phone<br>please call (416)-050-5050</p>
                <form class="reserve">
                    <input type="text" name="date" placeholder="Select Date">
                    <input type="text" name="time" placeholder="Time (HH:MM) ">
                    <input type="text" name="party-size" placeholder="Party Size">
                    <div id="info">
                        <input type="text" name="name" placeholder="Your Name"><br>
                        <input type="text" name="email" placeholder="Email Address"><br>
                        <input type="text" name="phone" placeholder="Phone Number">
                        <input type="submit" value="Reserve Now" id="reserve" name="reserve">
                    </div>
                </form>
            </div>
        </main>
    </div>
    <footer id="footer">
        <div id="aside-info-left">
            <aside id=asideinfoleft>
                <h2 class="hidden">Footer navigation</h2>
                <ul class="bottom-nav">
                    <li><a href="hours.html">Hours</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="giftcard.html">Gift Card</a></li>
                    <li><a href="sitemap.html">Site Map</a></li>
                    <li><a href="careers.html">Careers</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <p class="right">© Copyright underwater restaurant. All rights reserved.</p>
            </aside>
        </div>
        <div id="aside-info-right">
            <aside id=asideinforight>
                <ul class="bottom-nav">
                    <li><a href="homepage.html"><img src="images/logo_344a6d.png" alt="underwater restaurant logo" width="150" title="underwater restaurant" /></a>
                        <p class="footerp">5000 Yonge St. Toronto, ON M2N 7E9</p>
                        <p class="footerp">(416)050-5050</p>
                    </li>
                    <a href="www.facebook.com/underwater"><i class="fab fa-facebook-square"></i></a>
                    <a href="instagram.html"><i class="fab fa-instagram"></i></a>
                    <a href="twitter.html"><i class="fab fa-twitter-square"></i></a>
                </ul>
            </aside>
        </div>
    </footer>
</body>
<script src="javascript/eventBooking.js"></script>
<script src="javascript/jquery-3.3.1.min.js"></script>
</html>