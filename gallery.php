<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Metadata Information -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="All Gallery Page">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Fadwa Khalil">
        
        <title>All Gallery Page</title>

        <?php include("includes/mainhead.php"); ?>
        <?php include("includes/galleryhead.php"); ?>
    </head>
        <body>
    <!-- Moving Red Bar -->
            <div id="top">
                <div id="bar"></div>
            </div>
    <!-- Main Container -->
            <div class="container">
                <div id="galtransparent">
    <!-- Add breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="home.php">Home</a></li>
                        <li class="active">Gallery-All</li>
                    </ol>
    <!-- Main Container for media -->
                    <div id="pics">
                    <?php include("includes/artlib.php"); ?>
                    <?php include("includes/photolib.php"); ?>
                    <?php include("includes/songlib.php"); ?>
                    </div>
                </div>
            </div>
    <!-- Footer & nav -->
            <?php include("includes/bottom.php"); ?>

    </body>
</html>
