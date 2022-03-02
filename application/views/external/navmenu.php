<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom p-0">
    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?= isset($home['main']) ? $home['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article.html'); ?>"><?= lang('feature'); ?></a></li>
            <li class="nav-item <?= isset($national['main']) ? $national['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/national.html'); ?>"><?= lang('national'); ?></a></li>
            <li class="nav-item <?= isset($international['main']) ? $international['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/international.html'); ?>"><?= lang('international'); ?></a></li>
            <li class="nav-item <?= isset($sports['main']) ? $sports['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/sports.html'); ?>"><?= lang('sports'); ?></a></li>
            <li class="nav-item <?= isset($politics['main']) ? $politics['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/politics.html'); ?>"><?= lang('politics'); ?></a></li>
            <li class="nav-item <?= isset($economics['main']) ? $economics['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/economics.html'); ?>"><?= lang('economics'); ?></a></li>
            <li class="nav-item <?= isset($entertainment['main']) ? $entertainment['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/entertainment.html'); ?>"><?= lang('entertainment'); ?></a></li>
            <li class="nav-item <?= isset($infotech['main']) ? $infotech['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/infotech.html'); ?>"><?= lang('infotech'); ?></a></li>
            <li class="nav-item <?= isset($literature['main']) ? $literature['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/literature.html'); ?>"><?= lang('literature'); ?></a></li>
            <li class="nav-item <?= isset($religion['main']) ? $religion['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/religion.html'); ?>"><?= lang('religion'); ?></a></li>
            <li class="nav-item <?= isset($health['main']) ? $health['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/health.html'); ?>"><?= lang('health'); ?></a></li>
            <li class="nav-item <?= isset($accident['main']) ? $accident['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/accident.html'); ?>"><?= lang('accident'); ?></a></li>
            <li class="nav-item <?= isset($miscellaneous['main']) ? $miscellaneous['main'] : ''; ?>"><a class="text-muted" href="<?= base_url('article/category/miscellaneous.html'); ?>"><?= lang('miscellaneous'); ?></a></li>
        </ul>
    </div>
</nav>