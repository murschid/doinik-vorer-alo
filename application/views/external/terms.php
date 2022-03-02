<div class="col-md-9 pr-md-0">
    <div class="jumbotron rounded">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h3 class="pb-2"><?= lang('cmnt_terms'); ?></h3>
                    <hr class="m-0">
                </div>
                <div class="text-left mt-3">
                    <p class="px-4"><?= lang('cmnt_head'); ?></p>
                    <ul><?= general::single('tb_general', 'title', 'comment', 'content'); ?></ul>
                </div>
            </div>
        </div>
    </div>
</div>