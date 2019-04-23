<?php
$title = "Pricing";
require_once('./system/views/stubs/header.php');
?>
<div id="content" class="row">
    <div class="col-sm-12">
        <div class="card-container">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-center">Free Option</p>
                    <p class="card-text"><ul class="list-group list-group-flush">
                            <li class="list-group-item">This will contain a list of features for free users</li>
                        </ul>  
                    </p>
                    <a href="#" class="btn btn-primary">Sign Up</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-center">Premium Option</p>
                    <p class="card-text"><ul class="list-group list-group-flush">
                            <li class="list-group-item">This will contain a list of features for premium users</li>
                        </ul>  
                    </p>
                    <a href="#" class="btn btn-primary">Sign Up</a>
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