<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thursday - <?php echo $title; ?></title>
    <link rel="stylesheet" href="./css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="./scripts/lib/jquery-3.4.0.min.js"></script>
    <script src="./scripts/lib/popper.min.js"></script>
    <script src="./scripts/lib/bootstrap.min.js"></script>
    <script src="./scripts/main.js"></script>
    <script src="./scripts/components/customNav.js"></script>

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar sticky-top">
            <div class="brand"><span>T</span>hursday</div>
            <div class="nav">
                <a class="nav-link button <?php if($title === "Home") { echo "btnactive"; } ?>"
                    href="index.php?page=index">Home</a>

            </div>
            <div class="nav">
                <a class="nav-link button <?php if($title === "About") { echo "btnactive"; } ?>"
                    href="index.php?page=about">About</a>
            </div>
        </nav>