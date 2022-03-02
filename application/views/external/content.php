<div class="col-md-9 pr-md-0">
    <div class="row">
        <div class="col-md-12">
            <?php if (count($posts) <= 0): ?>
                <h4 class="text-danger font-weight-bold text-center bg-dlight p-5"><?= lang('nopost'); ?></h4>
            <?php else: ?>
                <div class="row">
                    <?php foreach (array_slice($posts, 0, 1) as $highlight): ?>
                        <div class="col-md-7">
                            <div class="card flex-md-column mb-2 shadow-sm minhight">
                                <div class="p-3"><img class="card-img-top d-lg-block img-fluid mx-h-230" src="<?= base_url('assets/external/img/thumbnails/' . $highlight->thumbnail); ?>" alt="Image"></div>
                                <div class="card-body d-flex flex-column align-items-start py-1">
                                    <h4 class="mb-0"><a href="<?= base_url('article/details/' . $highlight->id); ?>.html" class="text-dark"><?= $highlight->title; ?></a></h4>
                                    <p class="blog-post-meta font-italic small"><i class="fa fa-calendar-o"></i><?= converter::times(date('d-m-Y H:i', $highlight->time)); ?><i class="fa fa-user-o"></i><?= $highlight->writer; ?></p>
                                </div>
                                <div class="card-body d-flex flex-column align-items-start pt-0">
                                    <p class="card-text mb-auto"><?= $highlight->short_desc; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-5 pl-md-0">
                        <div class="card p-2 minhight">
                            <?php foreach (array_slice($posts, 1) as $post): ?>
                                <div class="media text-muted pt-2 border-bottom border-gray">
                                    <img src="<?= base_url('assets/external/img/thumbnails/' . $post->thumbnail); ?>" alt="News" class="mr-2 img120x70 rounded">
                                    <a href="<?= base_url('article/details/' . $post->id); ?>.html"><h6 class="media-body pb-2 mb-0 text-muted"><?= $post->title; ?></h6></a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php $this->load->view('external/national'); ?>
            <?php #$this->load->view('external/widget');?>
        </div>
    </div>
</div>
