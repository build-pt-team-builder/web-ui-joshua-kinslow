<?php
$title = "Home";
require_once('./system/views/stubs/header.inc.php');
?>
<div id="carousel">
    <div class="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/carousel/computer.jpeg" alt="Computer">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/carousel/mountains.jpeg" alt="Mountains">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/carousel/trees.jpeg" alt="Trees">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/carousel/turntable.jpeg" alt="Turntable">
            </div>
        </div>
    </div>
</div>
<div id="content" class="row">
    <div class="col-sm-12">
        <header class="Page-Header">
            <div class="page-header-div">Home</div>
        </header>
        <p id="product-info">
            Team builder is built as a build week challenge for Lambda School to solve a real problem which is not
            having an in house solution for
            setting up and preparing projects for build week.</p>
        <h3>Features</h3>
        <ul>
            <li>Ability to create a project</li>
            <li>Abiltiy to create roles for projects</li>
            <li>Ability for users to sign up for roles</li>
            <li>Ability to view a hig level list of projects and roles</li>
            <li>Ability to access and view specific project details</li>
        </ul>
        <div class="get-started">
            <a href="#" class="get-started-btn">Get Started</a>
        </div>
        </p>
    </div>
</div>

<?php
require_once('./system/views/stubs/footer.inc.php');
require_once('./system/views/stubs/errors.inc.php');
?>
<script src="scripts/components/carousel.js"></script>
</body>

</html>