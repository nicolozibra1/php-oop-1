<!-- HEADER -->
<?php
    include './partials/template/header.php';
?>

<!-- MAIN -->
<?php
    include __DIR__ . '/Database/db.php';
?>

<div class="container">
    <h1>Movies</h1>
    <div class="row">
        <?php foreach($movies as $movie) : ?>
            <div class="col-6">
                <div class="card">
                    <div class="card-img-top">
                        <img src="<?= $movie->image ?>" alt="<?= $movie->title ?>">
                        
                    </div>
                    <div class="card-body">
                        <h3><?= $movie->title ?></h3>
                        <p><?= $movie->getInfo() ?></p>    
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