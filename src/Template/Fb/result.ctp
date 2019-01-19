<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Your ID:</h1>
        <h1 class="alert alert-danger"><?php echo !empty($uid) ? $uid : 'Not found'; ?></h1>
        <p>
            <a href="<?php echo $BASE_URL;?>" class="btn btn-primary my-2">Return to home page</a>
        </p>
    </div>
</section>