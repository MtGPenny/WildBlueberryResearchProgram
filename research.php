<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-08
 * Time: 3:27 PM
 */
include "includes/header.php";
?>
<!-- Name of Page -->
<title>Research</title>
<!-- White Box -->
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h1 class="mb-0 text-black lh-100" align="center">
        <!-- Strong is a stronger representation of bold -->
        <strong>
            <strong>Research</strong>
        </strong>
    </h1>
    <br/>
    <h6 class="border-bottom border-gray pb-2 mb-0">What We Do</h6>
    <p>
        Research activities are presently focusing on potential technologies to reduce the cost of production,
        improve production system sustainability, contend with climate change, and allow for the ongoing
        differentiation from other fruit crops.
    </p>
    <!-- Ordered List style can be changed -->
    <ol type="i">
        <strong>Emphasis has been placed on:</strong>
        <li>Integrated disease management focusing on Monilinia and Botrytis blossom blights</li>
        <li>Double cropping of wild blueberries</li>
        <li>Reduced cost of production strategies.</li>
    </ol>

    <ol type="i">
        <strong>The Integrated disease management activities are focusing:</strong>
        <li>Mapping wild blueberry fields with an
            unmanned aerial vehicle (UAV) equipped with a high resolution digital camera to assess wild blueberry
            coverage, population structure; assessing floral and vegetative bud growth and development; and the
            presence of Monilinia and Botrytis blight in fields.
        </li>
        <li>Assessing floral and vegetative bud growth and development throughout the spring</li>
        <li>Determining the relative susceptibility of the wild phenotypes to Monilinia and Botrytis blight</li>
        <li>Evaluating biofungicide performance and ability to produce residue free berries. om this year are in the
            process of being analyzed and summarized.
        </li>


        <li>The project is also examining the relative susceptibility of the wild phenotypes to Monilinia and
            Botrytis blight, and evaluating biofungicide performance and ability to produce residue free berries.
        </li>
    </ol>

    <p>Preliminary results have indicated that it is possible to differentiate clones and floral and vegetative and bud
        growth progression; not all clones are susceptible to Monilinia and Botrytis blight diseases; and
        good Botrytis blight control can be achieved with the use of biofungicides.
    </p>

    <ol type="i">
        <strong>Double cropping research activities undertaken have:</strong>
        <li>Examined the physiological capacity of wild blueberries to support successive crops</li>
        <li> Pre- and postharvest technologies to improve leaf retention and increase yield potential for the second
            cropping year
        </li>
        <li>Harvest technologies to minimize leaf loss during mechanical harvesting</li>
        <br/>
    </ol>

    <!-- Responsive Image Gallery -->
   <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/TUAV.jpg">
                <img src="images/TUAV.jpg" alt="UAV" width="600" height="300" class="rounded">
            </a>
            <div class="desc">Unmanned Aerial Vehicle </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/FieldA.jpg">
                <img src="images/FieldA.jpg" alt="" width="600" height="300" class="rounded">
            </a>
            <div class="desc">Fox Point Field</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/PB01.jpg">
                <img src="images/PB01.jpg" alt="" width="600" height="300" class="rounded">
            </a>
            <div class="desc">Parrsboro Field</div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/Dean04.JPG">
                <img src="images/Dean04.JPG" alt="" width="600" height="300" class="rounded">
            </a>
            <div class="desc">Dean Field</div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div align="center">
        <cite>Photo Credit: Matthew Penny</cite>
    </div>
    <br/>
</div>


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

<?php include "includes/footer.php"; ?>





