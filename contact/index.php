<!DOCTYPE html>
<html>
    <head>
        <title>Kommaardoor Computers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <header class="header">
                <a href=".." class="logoWrapper">
                    <img src="../assets/logo.png" alt="Kommaardoor" class="logo">
                    <h1 class="title">Kommaardoor</h1>
                </a>
                <ul class="navigation">
                    <li><a href="..">Home</a></li>
                    <li><a href="../products">Products</a></li>
                    <li><a href=".">Contact</a></li>
                </ul>
            </header>
            <?php
            function alert($message) {
                echo '<script id="loadScript">setTimeout(() => {alert("'.$message.'");}, 100);</script>';
            }

            function defaultPage() {
                $name = ($_SERVER["REQUEST_METHOD"] == "POST")?$_POST["name"]:"";
                $email = ($_SERVER["REQUEST_METHOD"] == "POST")?$_POST["email"]:"";
                $subject = ($_SERVER["REQUEST_METHOD"] == "POST")?$_POST["subject"]:"";
                $message = ($_SERVER["REQUEST_METHOD"] == "POST")?$_POST["message"]:"";
                echo '<h1 class="contact">Contact</h1><form action="./" method="POST"><label>Name</label><input class="textInput" type="text" name="name" value='.$name.'><label>E-mail</label><input class="textInput" type="email" name="email" value='.$email.'><label>Subject</label><input class="textInput" type="text" name="subject" value='.$subject.'><label>Type</label><select name="type"><option value="question">Question</option><option value="praise">Praise</option></select><label>Message</label><textarea class="textInput" name="message" rows="4" value='.$message.'></textarea><label>Do you want to receive our newsletter?</label><div class="newsletterYes"><input type="radio" name="newsletter" value="yes" checked>Yes</div><div class="newsletterNo"><input type="radio" name="newsletter" value="no">No</div><input class="submitButton" type="submit" value="Send"></form><p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lorem libero, consectetur non rhoncus vel, bibendum sed neque. Nullam hendrerit sed purus non condimentum. Duis nisi eros, vestibulum non nunc at, eleifend finibus libero. Maecenas quis est elit. Curabitur auctor, urna sed vehicula ultrices, mi sem luctus ipsum, id consectetur nunc magna ut odio. Vivamus eu leo rhoncus, tincidunt velit non, vehicula augue. Maecenas risus nibh, tincidunt eget purus eu, sollicitudin vehicula nisl. Integer porttitor ante ante. Nulla eleifend pulvinar luctus. Praesent egestas enim sit amet ex sollicitudin, id ullamcorper lectus pretium. Proin semper auctor metus sed condimentum.</p>';
            }

            function succesPage($name, $email, $subject, $type) {
                echo '<h1 class="succes">Succes</h1><div class="message"><p>Dear '.$name.',</p><p>We have received your '.$type.' on the subject "'.$subject.'". We will contact you as soon as possible at '.$email.'.</p><p>Kind regards,</p><p>H.T.P Harold</p><p>Customer Relations Manager</p><img src="../assets/Harold2.png" alt="Harold"></div><p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lorem libero, consectetur non rhoncus vel, bibendum sed neque. Nullam hendrerit sed purus non condimentum. Duis nisi eros, vestibulum non nunc at, eleifend finibus libero. Maecenas quis est elit. Curabitur auctor, urna sed vehicula ultrices, mi sem luctus ipsum, id consectetur nunc magna ut odio. Vivamus eu leo rhoncus, tincidunt velit non, vehicula augue. Maecenas risus nibh, tincidunt eget purus eu, sollicitudin vehicula nisl. Integer porttitor ante ante. Nulla eleifend pulvinar luctus. Praesent egestas enim sit amet ex sollicitudin, id ullamcorper lectus pretium. Proin semper auctor metus sed condimentum.</p>';
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!(isset($_POST["name"]) && strlen($_POST["name"]) > 0)) {
                    alert("A name is required");
                    defaultPage();
                } else if (!(isset($_POST["email"]) && strlen($_POST["email"]) > 0)) {
                    alert("An e-mail is required");
                    defaultPage();
                } else if (!(isset($_POST["subject"]) && strlen($_POST["subject"]) > 0)) {
                    alert("A subject is required");
                    defaultPage();
                } else if (!(isset($_POST["message"]) && strlen($_POST["message"]) > 0)) {
                    alert("A message is required");
                    defaultPage();
                } else if (!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
                    alert("Invalid email");
                    defaultPage();
                } else {
                    succesPage($_POST["name"], $email, $_POST["subject"], $_POST["type"]);
                }
            } else {
                defaultPage();
            }
            ?>
            <footer class="footer">
                <div class="footerList">
                    <h2>Contact</h2>
                    <ul>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
                <div class="footerList">
                    <h2>About us</h2>
                    <ul>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
                <div class="footerList">
                    <h2>Legal</h2>
                    <ul>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>