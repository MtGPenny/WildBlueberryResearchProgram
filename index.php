<?php
/**
 * Created by PhpStorm.
 * User: matthewpenny
 * Date: 2018-06-08
 * Time: 9:55 AM
 */
include "includes/header.php"; ?>
<!-- Name of Page -->
<title>Home</title>
<!-- White Box -->
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h1 class="mb-0 text-black lh-100" align="center">
        <!-- Strong is a stronger representation of bold -->
        <strong>
            <strong>Home</strong>
        </strong>
    </h1>
    <br/>
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
    <p>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
        condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Curabitur euismod mattis quam volutpat suscipit. Donec id elit non mi porta gravida at eget
        metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
        amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod mattis quam volutpat
        suscipit.
    </p>
    <br/>
    <!-- Mini Image Gallery Design -->
    <div align="center">
        <!-- Auto Aligns & Rounds Image -->
        <img src="images/hp.jpg" class="rounded mx-auto img-fluid" style="height: 300px">
        <img src="images/hp2.jpg" class="rounded mx-auto img-fluid" style="height: 300px">
        <img src="images/BBCP2.jpeg" class="rounded mx-auto img-fluid" style="height: 300px" width="225px">
        <img src="images/BBCP.png" class="rounded mx-auto img-fluid" style="height: 300px" width="225px">
    </div>

    <div align="center">
        <cite>Photo Credit: Matthew Penny</cite>
    </div>
</div>

<?php include "includes/footer.php"; ?>
