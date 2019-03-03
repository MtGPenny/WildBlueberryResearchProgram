<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-11
 * Time: 9:47 AM
 */
include "includes/header.php";
?>
<!-- Name of Page -->
<title>Field Photos</title>
<!-- White Box -->
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h1 class="mb-0 text-black lh-100" align="center">
        <!-- Strong is a stronger representation of bold -->
        <strong>
            <strong>Fields</strong>
        </strong>
    </h1>
    <br/>

    <h6 class="border-bottom border-gray pb-2 mb-0">Images are from Dean, Debert & Fox Point</h6>
    <!--Mini Navigation Between Other Image Pages-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Fields</a></li>
            <li class="breadcrumb-item"><a href="photos_people.php">People</a></li>
            <li class="breadcrumb-item"><a href="photos_equipment.php"> Machines</a></li>
            <li class="breadcrumb-item"><a href="photos_insects.php"> Insects</a></li>
        </ol>
    </nav>
    <!--Responsive Image Gallery * Size can be adjusted *-->
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Dean.jpg">
                <img src="images/Dean.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Dean2.jpg">
                <img src="images/Dean2.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Debert.JPG">
                <img src="images/Debert.JPG" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Dean4.jpg">
                <img src="images/Dean4.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Dean5.jpg">
                <img src="images/Dean5.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB.jpg">
                <img src="images/PB.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Dean01.JPG">
                <img src="images/Dean01.JPG" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB3.jpg">
                <img src="images/PB3.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB4.jpg">
                <img src="images/PB4.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB5.jpg">
                <img src="images/PB5.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB6.jpg">
                <img src="images/PB6.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB7.jpg">
                <img src="images/PB7.jpg" alt="" width="600" height="200" class="rounded">
            </a>
        </div>
    </div>

    <div align="center">
        <cite>Photo Credit: Matthew Penny</cite>
    </div>
    <div class="clearfix"></div>
    <br/>
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
