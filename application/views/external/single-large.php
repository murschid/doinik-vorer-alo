<div class="col-md-9 pr-md-0">
    <div class="mb-3 bg-light tophideme">
        <?php $this->load->view('external/sidebars/postinfo'); ?>
    </div>
    <div id="printme" class="blog-post">
        <h3 class="blog-post-title mb-2"><?= $post->title; ?></h3>
        <p><?= $post->short_desc; ?></p>
        <div class="px-0"><img class="card-img-bottom d-lg-block img-fluid mn-h-250" src="<?= base_url('assets/external/img/posts/' . $post->images); ?>" alt="News"></div>
        <p class="blog-post-meta font-italic text-center pt-2"><?= lang('photo'); ?>: <?= $post->caption; ?></p>
        <hr class="py-1">
        <?= $post->description; ?>
    </div>
    <hr class="pb-2">
    <div class="mb-4 px-3">
        <?php $tagss = explode(',', $post->tags); ?>
        <?php foreach ($tagss as $tags): ?>
            <span class="<?= general::badge(); ?>"><?= $tags; ?></span>
        <?php endforeach; ?>
        <span class="float-right text-muted"><a onclick="dolike(<?= $post->id; ?>)"><i class="fa fa-thumbs-o-up fa-2x animate__animated"></i></a></span>
    </div>
    <?php $this->load->view('external/comments'); ?>
    <?php $this->load->view('external/advertise'); ?>
</div>