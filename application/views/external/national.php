<div class="mt-1">
    <h3 class="px-3 py-1 bg-dlight font-italic myvrbr mb-0"><?= lang('bangladesh'); ?> <a href="<?= base_url('article/bangladesh.html') ?>" class="float-right pl-3"><i class="fa fa-angle-double-right"></i></a></h3>
    <div class="row ml-0">
        <?php foreach ($nationals as $national): ?>
            <div class="col-md-6 pl-0">
                <div class="card p-2">
                    <div class="media text-muted pt-2 border-bottom border-gray">
                        <img src="<?= base_url('assets/external/img/thumbnails/' . $national->thumbnail); ?>" alt="News" class="mr-2 img100x60 rounded">
                        <a href="<?= base_url('article/details/' . $national->id); ?>.html"><h5 class="media-body pb-2 mb-0 text-muted"><?= $national->title; ?></h5></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="mt-3">
    <h3 class="px-3 py-1 bg-dlight font-italic myvrbr mb-0"><?= lang('international'); ?> <a href="<?= base_url('article/category/international.html') ?>" class="float-right pl-3"><i class="fa fa-angle-double-right"></i></a></h3>
    <div class="row ml-0">
        <?php foreach ($internationals as $international): ?>
            <div class="col-md-6 pl-0">
                <div class="card p-2">
                    <div class="media text-muted pt-2 border-bottom border-gray">
                        <img src="<?= base_url('assets/external/img/thumbnails/' . $international->thumbnail); ?>" alt="News" class="mr-2 img100x60 rounded">
                        <a href="<?= base_url('article/details/' . $international->id); ?>.html"><h5 class="media-body pb-2 mb-0 text-muted"><?= $international->title; ?></h5></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="my-3">
    <h3 class="px-3 py-1 bg-dlight font-italic myvrbr mb-0"><?= lang('entertainment'); ?> <a href="<?= base_url('article/category/entertainment.html') ?>" class="float-right pl-3"><i class="fa fa-angle-double-right"></i></a></h3>
    <div class="row ml-0">
        <div class="col-md-6 pl-0">
            <div class="card px-2 py-1">
                <?php foreach (array_slice($entertainments, 0, 4) as $entertainment): ?>
                    <div class="media text-muted pt-2 border-bottom border-gray">
                        <img src="<?= base_url('assets/external/img/thumbnails/' . $entertainment->thumbnail); ?>" alt="News" class="mr-2 rounded img100x65">
                        <a href="<?= base_url('article/details/' . $entertainment->id); ?>.html"><h5 class="media-body pb-2 mb-0 text-muted"><?= $entertainment->title; ?></h5></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6 pl-0">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $i = 0; ?>
                    <?php foreach ($slides = array_slice($entertainments, 4) as $entertainmen): ?>
                        <div class="carousel-item  <?= ($i++ == 0) ? 'active' : ''; ?>">
                            <div class="card flex-md-column mb-4 shadow-sm">
                                <div class="p-3"><img class="card-img-top d-lg-block img-fluid img252" src="<?= base_url('assets/external/img/posts/' . $entertainmen->images); ?>" alt="Image"></div>
                                <div class="card-body d-flex flex-column align-items-start py-1">
                                    <h6 class="mb-2 text-center"><a href="<?= base_url('article/details/' . $entertainmen->id); ?>.html" class="text-dark"><?= $entertainmen->title; ?></a></h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if (count($slides) >= 1): ?>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left h4 text-dark nomargin"></i>
                        <span class="sr-only">Prev</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fa fa-chevron-right h4 text-dark nomargin"></i>
                        <span class="sr-only">Next</span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>