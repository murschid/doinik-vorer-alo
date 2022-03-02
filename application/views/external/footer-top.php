<footer class="page-footer bg-light pt-4 border-top">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-4 mt-md-0">
                <h4 class="underline text-muted"><?=lang('copyright');?></h4>
                <!--<a href="<?= base_url();?>" class="blog-header-logo ml-2 text-dark"><img src="<?= base_url('assets/external/img/common/footer_new.png');?>" class="img-fluid"></a>-->
                <p class="text-muted"><?= lang('footer_copy');?></p>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0">
                <h4 class="underline text-muted"><?=lang('menu');?></h4>
                <ul class="list-unstyled">
                    <li class="hovspc"><a href="<?= base_url('about.html');?>" class="text-muted font-weight-normal"><i class="fa fa-caret-right"></i> <?= lang('about'); ?></a></li>
                    <li class="hovspc"><a href="<?= base_url('contact.html');?>" class="text-muted font-weight-normal"><i class="fa fa-caret-right"></i> <?=lang('contact');?></a></li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-2 mb-md-0">
                <h4 class="underline text-muted"><?=lang('menu');?></h4>
                <ul class="list-unstyled">
                    <li class="hovspc"><a href="<?=base_url('terms.html');?>" class="text-muted font-weight-normal"><i class="fa fa-caret-right"></i> <?=lang('cterms');?></a></li>
                    <li class="hovspc"><a href="<?=base_url('policy.html');?>" class="text-muted font-weight-normal"><i class="fa fa-caret-right"></i> <?=lang('policy');?></a></li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0">
                <h4 class="underline text-muted"><?=lang('address');?></h4>
                <address class="text-muted">
                    <?=lang('addresstxt');?><br>
                    <abbr><?= lang('mobileno');?></abbr>
                </address>
            </div>
        </div>
    </div>
</footer>