<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="container-fluid">
    <div class="welcomeCont">
        <span class="line"></span>
        <h6 class="welcome">
            <span>M</span><span>V</span><span>C</span><span> </span><span>P</span><span>R</span><span>E</span><span>S</span><span>E</span><span>N</span><span>T</span>
        </h6>
    </div>
    <div class="offset-sm-2 col-sm-8">
        <hr class="welcomeBar">
        <?php for ($i = 0; $i < count($scope); $i++) : ?>
            <div class="row justify-content-center alert Onemovie">
                <h5 class="col-sm-12 titleMovie" data-id="<?= $i ?>"> <?= $scope[$i]['titre']; ?></h5>
                <form method="POST" action="/MVC_PiePHP/oneKind">
                    <input type="hidden" name="id" id="id" value='<?= $scope[$i]['id_film'] ?>'>
                    <input type="hidden" name="nom" id="nom" value='<?= $_POST['nom'] ?>'>
                    <button type="submit" class="btn btn-info more"> MORE INFO </button>
                </form>
            </div>
        <?php endfor; ?>
    </div>
</div>