<div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4">
        <a href="<?= base_url(); ?>" class="blog-header-logo ml-2 text-dark">
            <img src="<?= base_url('assets/external/img/common/voreralo.png'); ?>" class="mainlogo img-fluid">
        </a>
    </div>
    <div class="col-8 d-flex justify-content-end align-items-center pl-0">
        <h5 class="px-md-3 headtxt pr-2"><span class="d-xs-none"><i class="fa fa-map-marker"></i> <?= lang('dhaka');?></span> <i class="fa fa-calendar"></i> <?= converter::times(date('d')) . ' ' . converter::months(date('F')) . ' ' . converter::times(date('Y')) . ' ' . converter::days(date('l')); ?></h5>
    </div>
</div>