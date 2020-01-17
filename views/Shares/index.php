<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <a href="<?php echo ROOT_PATH; ?>shares/add " class="btn btn-success btn-share">Share Something</a>
    <?php else: ?>
    <h2 class="alert-success text-center p-2 border-danger text-uppercase">To share something new please login or register to the forum!</h2>
    <?php endif; ?>
    <?php foreach($viewmodel as $item) : ?>
        <div class="well">
            <h3><?= $item['title'] ?> </h3>
            <small><?= $item['create_date'] ?></small>
            <hr>
            <p><?= $item['body'] ?></p>
            <br />
            <a href="<?= $item['link']; ?>" class="btn btn-info" target="_blank">Visit Website</a>
        </div>

    <?php endforeach; ?>
</div>