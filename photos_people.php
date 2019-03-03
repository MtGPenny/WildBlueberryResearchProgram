<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-11
 * Time: 11:04 AM
 */
include "includes/header.php";
?>
<!-- Name of Page -->
<title>People Photos</title>
<!-- White Box -->
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h1 class="mb-0 text-black lh-100" align="center">
        <!-- Strong is a stronger representation of bold -->
        <strong>
            <strong>People</strong>
        </strong>
    </h1>
    <br/>
    <h6 class="border-bottom border-gray pb-2 mb-0">Photos of workers on the field</h6>
    <!--Mini Navigation Between Other Image Pages-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="photos_experiments.php">Fields</a></li>
            <li class="breadcrumb-item active" aria-current="page">People</a></li>
            <li class="breadcrumb-item"><a href="photos_equipment.php"> Machines</a></li>
            <li class="breadcrumb-item"><a href="photos_insects.php"> Insects</a></li>
        </ol>
    </nav>

    <!--Responsive Image Gallery * Size can be adjusted *-->
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People.jpg">
                <img src="images/People.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People10.jpeg">
                <img src="images/People10.jpeg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People3.jpg">
                <img src="images/People3.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/20180615_112115_HDR.jpg">
                <img src="images/20180615_112115_HDR.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People5.jpg">
                <img src="images/People5.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People6.jpg">
                <img src="images/People6.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People7.jpg">
                <img src="images/People7.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/People9.jpg">
                <img src="images/People9.jpg" alt="" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>
    <div align="center">
        <cite>Photo Credit: Matthew Penny | Kelsey House</cite>
    </div>
    <div class="clearfix"></div>
</div>

<?php include "includes/footer.php"; ?>

    <style>
        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;

        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
