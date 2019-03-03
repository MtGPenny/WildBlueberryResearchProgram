<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-11
 * Time: 11:20 AM
 */
include "includes/header.php";
?>
<!-- Name of Page -->
<title>Insect Photos</title>
<!-- White Box -->
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h1 class="mb-0 text-black lh-100" align="center">
        <!-- Strong is a stronger representation of bold -->
        <strong>
            <strong>Insects</strong>
        </strong>
    </h1>
    <br/>
    <h6 class="border-bottom border-gray pb-2 mb-0">Common species of insects found</h6>
    <!--Mini Navigation Between Other Image Pages-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="photos_experiments.php">Fields</a></li>
            <li class="breadcrumb-item"><a href="photos_people.php">People</a></li>
            <li class="breadcrumb-item"><a href="photos_equipment.php"> Machines</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Insects</a></li>
        </ol>
    </nav>

    <!--Responsive Image Gallery * Size can be adjusted *-->
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Bee1.PNG">
                <img src="images/Bee1.PNG" alt="Bumble Bee" width="600" height="400" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Bee2.PNG">
                <img src="images/Bee2.PNG" alt="Honey Bee" width="600" height="400">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Bee2.jpg">
                <img src="images/Bee2.jpg" alt="" width="600" height="400">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Beehives.jpg">
                <img src="images/Beehives.jpg" alt="" width="600" height="400">
            </a>
        </div>
    </div>

    <div class="clearfix"></div>

    <div align="center">
        <cite>Photo Credit: Matthew Penny | Caitlin McNamara</cite>
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
