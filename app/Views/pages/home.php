<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<!-- SLIDESHOW -->
<div id="sns_slideshow1" class="wrap">
    <div id="header-slideshow">
        <div class="container">
            <div class="row">
                <div class="slideshows col-md-6 col-sm-8">
                    <div id="slider123" class="owl-carousel owl-theme" style="overflow: hidden;">
                        <div class="item style1">
                            <img src="images/sildeshow/slideshow.jpg" alt="">
                        </div>
                        <div class="item style1">
                            <img src="images/sildeshow/slideshow1.jpg" alt="">
                        </div>
                        <div class="item style2">
                            <img src="images/sildeshow/slideshow2.jpg" alt="">
                        </div>
                        <div class="item style3">
                            <img src="images/sildeshow/slideshow3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="banner-right col-md-6 col-sm-4">
                    <div class="banner6 banner5 dbn col-md-12 col-sm-6">
                        <a href="#">
                            <img src="images/sildeshow/banner1.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner6 pdno col-md-12 col-sm-12">
                        <div class="banner8 banner6  banner5 col-md-6 col-sm-12">
                            <a href="#">
                                <img src="images/sildeshow/banner2.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner8 banner6  banner5 col-md-6 col-sm-12">
                            <a href="#">
                                <img src="images/sildeshow/banner3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AND SLIDESHOW -->

<!-- CONTENT -->
<div id="sns_content" class="wrap layout-m">
    <div class="container">
        <div class="row">
            <div id="sns_main" class="col-md-12 col-main">
                <div id="sns_mainmidle">
                    <div id="sns_producttaps1" class="sns_producttaps_wraps">
                        <h3 class="precar">PRODUCT TAPS</h3>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Recommended</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="products-grid row style_grid">
                                    <?php foreach ($products as $u) : ?>
                                        <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <a class="product-image have-additional" title="<?= $u['product_name'] ?>" href="detail/<?= $u['product_id'] ?>">
                                                        <div class="item-img clearfix">
                                                            <div class="ico-label">
                                                                <span class="ico-product ico-new">New</span>
                                                            </div>
                                                            <span class="img-main">
                                                                <img src="<?= base_url('images') . '/' . $u['brand'] . '/' . $u['product_image']; ?>" alt="">
                                                            </span>
                                                        </div>
                                                    </a>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <?php $pricing =  $u['price'] - (($u['discount'] / 100) * $u['price']); ?>
                                                                            <span class="price1">Rp <?= number_format($pricing, 0, ',', '.')  ?></span>
                                                                            <br>
                                                                            <span class="price2"><?= number_format($u['price'], 0, ',', '.') ?></span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <button class="btn-cart" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist" href="#" title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare" href="#" title="Share Product">
                                                                        <i class="fa fa-share"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <!-- End Product Single view -->
                                </div>
                            </div>
                        </div>
                        <h3 class="bt-more">
                            <span>Load more items</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AND CONTENT -->
<?= $this->endSection() ?>