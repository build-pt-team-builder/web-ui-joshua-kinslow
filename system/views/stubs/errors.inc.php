<div id="tooSmallError">
    <h1>Error: Screen Size Too Small</h1>
    <p>Your screen size is too small therefore to save you trouble I have limited the minimum screen size to 315 pixels,
        because the items on the page do not display properly otherwise.</p>
</div>
<div id="phpErrors" class="phpErrorsClosed">
    <?php 
        $errorMsgs = "No PHP Errors";
        if(!empty($errors)){
            $errorMsgs = "";
            foreach( $errors as $key => $error) {
                $errorName = $error[0];
                $errorDesc = $error[1];
                $errorMsgs .= "<div class='php-$errorName'><h1>Error: $errorName</h1><p>$errorDesc</p></div>";
            }
            echo $errorMsgs;
        }
    ?>
</div>