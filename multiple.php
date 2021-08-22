<?php

/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>


<!-- START HTML FORM -->
<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    html {
        font-family: "Quicksand", sans-serif;
        font-size: 0.95em;
        line-height: 1.5em;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        background-color: #e6e6fa;
    }

    a {
        color: white;
        text-decoration: none;
    }

    .logo {
        height: 250px;
        width: 250px;
        margin-right: auto;
    }

    .fa-arrow-circle-left:before {
        color: cornflowerblue;
    }

    .comments {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    textarea {
        width: 90%;
        margin: auto;
        padding: 10px;
        height: 80px;
    }

    .g-recaptcha {
        margin: 10px 20px;
    }

    .contact-me {
        box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.4);
        background-color: #708090;
        border-radius: 10px;
        margin: 70px auto;
        padding-top: 20px;
        width: 350px;
        text-align: center;
        margin-top: 15px;
    }

    .contact-me input {
        display: block;
        width: 90%;
        margin: 20px auto;
        padding: 15px;

    }

    input[type="submit"] {
        display: inline-block;
    }

    footer {
        background-color: black;
        color: white;
        text-align: center;
        padding: 80px;
    }

    nav {
        display: flex;
        justify-content: space-between;
    }

    .social-list {
        margin: auto;
    }

    ul {
        display: flex;
        list-style-type: none;
        width: 500px;
        justify-content: space-around;
        font-size: 30px;
        padding: 0.5em;
        margin: 0;
    }

    li {
        text-decoration: none;
        margin: 0 1em;
    }

    h1 {
        font-size: 24px;
        margin: 0;
    }

    h2 {
        font-size: 20px;
    }

    h3 {
        font-size: 18px;
    }

    p {
        margin: 0;
        font-size: 30px;
        font-weight: 300;
    }

    @media only screen and (max-width: 1000px) {
        .contact-me {
            height: 100%;
            width: 100%;
            margin: auto;
            text-align: center;
        }
    }

    .houses-image {
        margin-top: 25px;
        width: 250px;
    }

    hr {
        margin-left: 20px;
        margin-right: 20px;
    }

    .houses-link {
        text-decoration: none;
        color: #ef744b;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .hamburger {
        display: none;
    }

    .hamburger:focus {
        outline: 0;
    }

    @media only screen and (max-width: 1000px) {
        .hamburger {
            display: block;
            border: 0;
            background-color: transparent;
            color: white;
            font-size: 30px;
            margin: 20px;
            align-self: flex-end;
        }

        ul {
            display: none;
            background-color: #2b2c38;
            margin: 0ppx;
        }

        ul.show {
            display: block;
        }

        nav {
            display: flex;
            flex-direction: column-reverse;
            background-color: #2b2c38;
        }

        .logo {
            display: none;
        }
    }
</style>

<body>
    <div class="contact-me">
        <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
            <label>
                <input class="form" type="text" name="name" placeholder="Your full name">
                <input class="form" type="text" name="email" placeholder="Your email address">
                <input class="form" type="text" name="phone" placeholder="Your cell number">
                <label>
                    <h3>How Did You Hear About Me?:</h3><br />
                    <select style="margin: 30px 0px 0px 0px" name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
                        <option value="">Choose How You Heard</option>
                        <option value="Phone">Phone</option>
                        <option value="Web">Web</option>
                        <option value="Magazine">Magazine</option>
                        <option value="A Friend">A Friend</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
                <div class="comments">
                    <h3>Please share your comments:</h3><br /><textarea name="Comments" placeholder="Your comments are important to us!" tabindex="60"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="<?= $siteKey; ?>"></div>
                <input class="btn" type="submit" value="submit" />
        </form>
    </div>
</body>