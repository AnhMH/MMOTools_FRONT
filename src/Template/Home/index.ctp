<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">HoangAnhOnline</h1>
            <p class="lead text-muted">HoangAnhOnline.Com is the place to find all of the features and tools you might use as a get facebook id, facebook comments, youtube tags, ...</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Facebook Tools</a>
                <a href="#" class="btn btn-danger my-2">Youtube Tools</a>
            </p>
        </div>
    </section>
    <?php if (!empty($data['facebook'])): ?>
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($data['facebook'] as $k => $v): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $v['image'];?>" />
                        <div class="card-body">
                            <p class="card-text"><?php echo $v['description']; ?></p>
                            <div class="justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if (!empty($data['youtube'])): ?>
    <div class="py-5 bg-danger">
        <div class="container">
            <div class="row">
                <?php foreach ($data['youtube'] as $k => $v): ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $v['image'];?>" />
                        <div class="card-body">
                            <p class="card-text"><?php echo $v['description']; ?></p>
                            <div class="justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>get facebook id, get facebook comments, get youtube tags, download youtube video</p>
        <p>Contact: <a href="https://getbootstrap.com">Facebook</a>.</p>
    </div>
</footer>