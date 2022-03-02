<div class="col-md-9 pr-md-0">
    <div class="jumbotron rounded">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <h3 class="pb-2"><?= lang('about'); ?></h3>
                    <hr class="m-0">
                </div>
                <p class="text-justify mt-2"><?= General::single('tb_general', 'title', 'about', 'content'); ?></p>
            </div>
            <div class="col-md-6 border-left">
                <div class="text-center">
                    <h3 class="pb-2"><?= lang('editors'); ?></h3>
                    <hr class="m-0">
                </div>
                <!--<div class="text-center mt-3">
                    <img src="<?= base_url('assets/external/img/common/editor.png') ?>" width="200" class="img-fluid rounded mx-auto d-bloc">
                </div>-->
                <h4 class="mt-4 font-italic"><?= lang('editor'); ?> : <?= lang('sohel'); ?></h4>
                <h6 class="ml-3 font-italic"><?= lang('mobile'); ?> <?= lang('mobileno'); ?></h6>
                <!--<h5 class="mt-4 font-italic"><?= lang('exeditor'); ?> : <?= lang('exeditor_name'); ?></h5>
                <h6 class="ml-3 font-italic"><?= lang('mobile'); ?> <?= lang('mobileno'); ?></h6>
                <h5 class="mt-4 font-italic"><?= lang('newseditor'); ?> : <?= lang('nweditor_name'); ?></h5>
                <h6 class="ml-3 font-italic"><?= lang('mobile'); ?> <?= lang('mobileno'); ?></h6>-->
            </div>
        </div>
    </div>
</div>