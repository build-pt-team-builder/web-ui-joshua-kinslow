<?php
$title = "Pricing";
require_once('./system/views/stubs/header.php');
?>
<div id="content" class="row">
    <div class="col-sm-12">
        <header class="Page-Header">
            <div class="page-header-div">Pricing</div>
        </header>
        <div class="card-container">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-center">Free Option</p>
                    <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">This will contain a list of features for free users</li>
                            <li class="list-group-item">This is a second placeholder list item</li>
                        </ul>  
                    </p>
                    <a href="#" class="btn btn-primary card-button">Sign Up for Free Account</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-center">Premium Option</p>
                    <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">This will contain a list of features for premium users</li>
                            <li class="list-group-item">This is a second placeholder list item</li>
                        </ul>  
                    </p>
                    <a href="#" class="btn btn-primary card-button">Sign Up for Premium Account</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('./system/views/stubs/footer.php');
?>
</body>
</html>