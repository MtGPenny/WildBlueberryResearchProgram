<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-08
 * Time: 9:56 AM
 */
?>

<!-- Custom styles for this template -->
<link href="css/offcanvas.css" rel="stylesheet">

<footer class="footer-distributed">

    <div class="footer-right">  <!--Social Media Links 35px by 35px-->

        <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook" width="35px" height="35px"><i
                    class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/?lang=en"><img src="images/twitter.png" width="35px" height="35px"><i
                    class="fa fa-twitter"></i></a>
    </div>

    <div class="footer-left">
        <p class="footer-links">
            <a href="index.php">Home</a>
            ·
            <a href="research.php">Research</a>
            ·
            <a href="photos.php">Photos</a>
            ·
            <a href="teaching.php">Teaching</a>
            ·
            <a href="Contact.php">Contact</a>
        </p>

        <p><strong>Wild Blueberry Research Program</strong><br/>
            Faculty of Agriculture, Dalhousie University<br/>
            PO Box 550 Truro, NS B2N 5E3
        </p>
        <br/>
        <a href="https://www.dal.ca/"><img src="images/DAL.jpg" width="150px" height="50px"><i
                    class="rounded img-fluid"></a>
        &nbsp; <img src="images/Blueberry_Logo%20v2.png" width="50" height="50">
    </div>
</footer>

<style>
    .footer-distributed {
        background-color: blue;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: normal 16px sans-serif;
        padding: 45px 50px;
        margin-top: 150px;
        clear: both;
    }

    .footer-distributed .footer-left p {
        color: #8f9296;
        font-size: 14px;
        margin: 0;
    }

    /* Footer links */

    .footer-distributed p.footer-links {
        font-size: 18px;
        font-weight: bold;
        color: #ffffff;
        margin: 0 0 10px;
        padding: 0;
    }

    .footer-distributed p.footer-links a {
        display: inline-block;
        line-height: 1.8;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-right {
        float: right;
        margin-top: 6px;
        max-width: 180px;
    }

    .footer-distributed .footer-right a {
        display: inline-block;
        width: 35px;
        height: 35px;
        background-color: #33383b;
        border-radius: 2px;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-left: 3px;
    }

    /*Responsive Footer */
    @media (max-width: 600px) {

        .footer-distributed .footer-left,
        .footer-distributed .footer-right {
            text-align: center;
        }

        .footer-distributed .footer-right {
            float: none;
            margin: 0 auto 20px;
        }

        .footer-distributed .footer-left p.footer-links {
            line-height: 1.8;
        }
    }

</style>