<?php 
 $id = isset ($_GET['id'])?$_GET['id'] : 0;
require "includes/functions.php";

$picture = findOneById($id);
//var_dump(findOneById(2));
//var_dump($picture);

$src = 'images/large/' . $picture['slug'] . '.jpg';

?>



<!doctype html>
<html lang="fr">
<?php require 'includes/head.php';?>
<body id="detail">
<?php require 'includes/header.php';?>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $picture['title']; ?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <img src = "<?php echo $src; ?>">
                <!-- Picture date and location -->
                <figcaption><?php echo $picture['date']. " - ". $picture['location']; ?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $picture['description']; ?></p>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                </a>
                <a href="gallery.html" class="btn">
                    Next shot
                </a>
            </p>
        </div>
    </main>
    <?php require 'includes/footer.php';?>
</body>
</html>
