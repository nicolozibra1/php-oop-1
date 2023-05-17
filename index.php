<!-- HEADER -->
<?php
    include './partials/template/header.php';
?>

<!-- MAIN -->
<?php
    include __DIR__ . '/Database/db.php';

    // echo $movie1->getId();
    // var_dump($movies);

    echo $movie1->getInfo();
    // echo $movie2->getInfo();
?>
<div class="container">

</div>

<!-- FOOTER -->
<?php
    include './partials/template/footer.php';
?>