<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-11
 * Time: 8:42 AM
 */
include "includes/header.php";
?>
    <!-- Name of Page -->
    <title>Photos</title>
    <!-- White Box -->
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h1 class="mb-0 text-black lh-100" align="center">
            <!-- Strong is a stronger representation of bold -->
            <strong>
                <strong>Photos</strong>
            </strong>
        </h1>
        <br/>
        <h6 class="border-bottom border-gray pb-2 mb-0">Categories</h6>
        <!-- Mini Image Gallery with links-->
        <div class="row">
            <div class="column">
                <h3 align="center"><a href="photos_experiments.php">Fields</a></h3>
                <a href="photos_experiments.php"><img src="images/Field.jpg" class="rounded" style="width:100%" height="275"></a>
            </div>
            <div class="column">
                <h3 align="center"><a href="photos_people.php">People</a></h3>
                <a href="photos_people.php"><img src="images/PeopleHdr1.jpeg" class="rounded" alt="" style="width:100%" height="275"> </a>
            </div>
            <div class="column">
                <h3 align="center"><a href="photos_equipment.php">Machinery</a></h3>
                <a href="photos_equipment.php"><img src="images/UAVF.jpg" class="rounded" alt="" style="width:100%" height="275"></a>
            </div>
            <div class="column">
            </div>
            <div class="column">
                <h3 align="center"><a href="photos_insects.php">Insects</a></h3>
                <a href="photos_insects.php"> <img src="images/Bee2.PNG" class="rounded mx-auto d-block" style="height: 400px" width="100%" alt=""></a>
            </div>
        </div>
        <div align="center">
            <cite>Photo Credit: Matthew Penny | Kelsey House | Caitlin McNamara</cite>
        </div>
        <br/>
    </div>


    <style>
        /* Three image containers (use 25% for four, and 50% for two, etc) */
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 500px) {
            .column {
                width: 100%;
            }
        }
    </style>


<?php include "includes/footer.php"; ?>