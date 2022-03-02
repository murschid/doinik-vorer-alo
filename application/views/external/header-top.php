<header class="p-2 bg-dlight border-bottom box-shadow">
    <div class="row d-flex mx-0 position-relative">
        <div class="col-lg-2 col-sm-6 headsearch">
            <?= form_open('article/search', array('class' => 'w-100')); ?>
            <input type="search" name="searchr" onkeyup="ajaxsearch($(this).val())" class="form-control my-0 py-1" required placeholder="<?= lang('search'); ?>" autocomplete="off" data-toggle="tooltip" data-placement="top" title="<?= lang('typebengali'); ?>">
            <?= form_close(); ?>
        </div>
        <div class="col-lg-7">
            <h3 class="text-center d-none"><?= lang('addhere'); ?></h3>
        </div>
        <div class="col-lg-3 col-sm-1 uaccount">
            <div class="btn-group">
                <button type="button" class="btn btn-light bg-dlight dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle <?= ($this->session->userdata('ecnuserauth')) ? 'text-info' : ''; ?>"></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <?php if ($this->session->userdata('ecnuserauth')): ?>
                        <a href="<?= base_url('user/myaccount.html') ?>" class="dropdown-item text-muted"><i class="fa fa-user text-info"></i> <?= $this->session->userdata('ecnuserauth')['name']; ?></a>
                        <a href="<?= base_url('user/signout.html') ?>" class="dropdown-item text-muted"><i class="fa fa-sign-out text-danger"></i> <?= lang('logout'); ?></a>
                    <?php else: ?>
                        <!--<a href="<?= base_url('user/signin.html') ?>" class="dropdown-item"><i class="fa fa-sign-in"></i> <?= lang('login'); ?></a>-->
                        <a class="dropdown-item text-muted" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in"></i> <?= lang('login'); ?></a>
                        <a href="<?= base_url('user/signup.html') ?>" class="dropdown-item text-muted"><i class="fa fa-user"></i> <?= lang('register'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('external/modals/login'); ?>
</header>