<?php
    $mysql = require_once('php/includes/database.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Julian v.d Berkmortel</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="container">
            <ul id="social-links">
                <a class="social-link" href="https://twitter.com/Serializator" target="_blank"><li class="fa fa-twitter-square social-link-icon" aria-hidden="true"></li></a>
                <a class="social-link" href="https://instagram.com/Serializator" target="_blank"><li class="fa fa-instagram social-link-icon" aria-hidden="true"></li></a>
                <a class="social-link" href="https://github.com/Serializator" target="_blank"><li class="fa fa-github-square social-link-icon" aria-hidden="true"></li></a>
            </ul>

            <div id="sections">

                <!-- Welcome Section -->
                <div id="welcome-section" class="section">
                    <h1>Julian v.d Berkmortel</h1>
                    <h2>HTML, CSS, PHP, JavaScript, C# and Java</h2>
                    <h3>MySQL, MongoDB, Redis and NodeJS</h3>
                </div>

                <!-- Projects Section -->
                <div id="projects-section" class="section">
                    <ul id="projects">
                        <li class="project">
                            <img src="images/projects/portfolio.png" />
                        </li>

                        <li class="project">
                            2nd Project
                        </li>

                        <li class="project">
                            3rd Project
                        </li>

                        <li class="project">
                            4rd Project
                        </li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div id="contact-section" class="section">
                    <form>
                        <span id="unexpected-error"></span>
                    
                        <span id="first-name-error"></span>
                        <input name="first-name" type="text" placeholder="First Name" />

                        <span id="last-name-error"></span>
                        <input name="last-name" type="text" placeholder="Last Name"/>

                        <span id="email-error"></span>
                        <input name="email" type="text" placeholder="Email" />

                        <span id="subject-error"></span>
                        <input name="subject" type="text" placeholder="Subject" />

                        <span id="message-error"></span>
                        <textarea name="message" placeholder="What do you want to say?"></textarea>

                        <button type="submit">Send</button>
                    </form>
                </div>
            </div>

            <nav id="navigation">
                <ul>
                    <li data-section='welcome-section'>Welcome</li>
                    <li data-section='projects-section'>Projects</li>
                    <li data-section='contact-section'>Contact</li>
                </ul>
            </nav>
        </div>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script src="js/navigation.js"></script>
        <script src="js/contact.js"></script>
    </body>
</html>
