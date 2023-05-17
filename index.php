<!-- HEADER -->
<?php
    include './partials/template/header.php';
?>

<!-- MAIN -->
<?php
    include __DIR__ . '/Database/db.php';
?>

<div class="container">
    <h1 class="text-white">Movies</h1>
    <div class="row">
        <?php foreach($movies as $movie) : ?>
            <div class="col-3">
                <div class="card mb-4">
                    <div class="card-img-top d-flex justify-content-center">
                        <img class="w-75" src="<?= $movie->image ?>" alt="<?= $movie->title ?>">
                        
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h3><?= $movie->title ?></h3>
                        <div class="d-flex flex-column"><?= $movie->getInfo() ?></div>    
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- FOOTER -->
<?php
    include './partials/template/footer.php';
?>