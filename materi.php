<div class="row">
    <div class="col-md-12">
        <h2>Materi</h2>

        <?php if (isset($_SESSION['id_user'])) : ?>
            <h5>Hai <?= ucwords($_SESSION['username']); ?>, selamat datang kembali...</h5>
        <?php else : ?>
            <h5>Hai, selamat datang...</h5>
        <?php endif ?>
    </div>
</div>