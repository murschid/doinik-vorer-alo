<?php if (isset($sliders)):?>
    <div id="carouselExampleControls" class="jumbotron carousel slide" data-ride="carousel">
        <?php $i = 0; $j = 0; $k = 0;?>
        <div class="carousel-inner px-5">
            <?php foreach ($sliders as $slider):?>
                <div class="carousel-item <?=($k++ == 0) ? 'active' : '';?>">
                    <img class="w-100 d-block" src="<?= base_url('assets/external/img/posts/'.$slider->images);?>" height="500" alt="Gallery">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-dark">আমার সোনার বাংলা আমি তোমায় ভালোবাসি</h3>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-2x text-info" aria-hidden="true"></i>
            <span class="sr-only">Prev</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-2x text-info" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif;?>