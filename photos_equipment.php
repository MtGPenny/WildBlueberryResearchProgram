<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-11
 * Time: 11:07 AM
 */ 
include "includes/header.php";
?>
<!-- Name of Page -->
<title>Gear Photos</title>
<!-- White Box -->
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h1 class="mb-0 text-black lh-100" align="center">
        <!-- Strong is a stronger representation of bold -->
        <strong>
            <strong>Machinery and Gear</strong>
        </strong>
    </h1>
    <br/>
    <h6 class="border-bottom border-gray pb-2 mb-0">Photos of types of machinery used</h6>
    <!--Mini Navigation Between Other Image Pages-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="photos_experiments.php">Experiments</a></li>
            <li class="breadcrumb-item"><a href="photos_people.php">People</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Machines</a></li>
            <li class="breadcrumb-item"><a href="photos_insects.php"> Insects</a></li>
        </ol>
    </nav>
    <!-- Images are responsive to type of device the web site is being accessed from -->
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/UAVF.jpg">
                <img src="images/UAVF.jpg" alt="" width="600" height="300" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Controller.JPG">
                <img src="images/Controller.JPG" alt="" width="600" height="300" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/MachineF.png">
                <img src="images/MachineF.png" alt="" width="600" height="300" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/MachineE.png">
                <img src="images/MachineE.png" alt="" width="600" height="300" class="rounded">
            </a>
        </div>
    </div>

    <div class="clearfix"></div>
    <div align="center">
        <cite>Photo Credit: Matthew Penny</cite>
    </div>
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
