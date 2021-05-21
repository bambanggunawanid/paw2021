<?= $this->extend('layouts/template_detail'); ?>

<?= $this->section('content'); ?>
<!-- BREADCRUMBS -->
<div id="sns_breadcrumbs" class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="sns_titlepage"></div>
                <div id="sns_pathway" class="clearfix">
                    <div class="pathway-inner">
                        <span class="icon-pointer "></span>
                        <ul class="breadcrumbs">
                            <li class="home">
                                <a title="Go to Home Page" href="/">
                                    <i class="fa fa-home"></i>
                                    <span >Home</span>
                                </a>
                            </li>
                            <li class="category3 last">
                                <span>
                                    <?= $detail_product['product_name']; ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AND BREADCRUMBS -->

<!-- CONTENT -->
<div id="sns_content" class="wrap layout-m">
    <div class="container">
        <div class="row">
            <div id="sns_main" class="col-md-12 col-main">
                <div id="sns_mainmidle">
                    <div class="product-view sns-product-detail">
                        <div class="product-essential clearfix">
                            <div class="row row-img">

                                <div class="product-img-box col-md-4 col-sm-5">
                                    <div class="detail-img">
                                        <img src="<?= base_url('images') . '/' . $detail_product['brand'] . '/' . $detail_product['image_1']; ?>" alt="">
                                    </div>
                                    <div class="small-img">
                                        <div id="sns_thumbail" class="owl-carousel owl-theme">
                                            <div class="item">
                                                <img src="<?= base_url('images') . '/' . $detail_product['brand'] . '/' . $detail_product['image_2']; ?>" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="<?= base_url('images') . '/' . $detail_product['brand'] . '/' . $detail_product['image_3']; ?>" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="<?= base_url('images') . '/' . $detail_product['brand'] . '/' . $detail_product['image_4']; ?>" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="<?= base_url('images') . '/' . $detail_product['brand'] . '/' . $detail_product['image_5']; ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="product_shop" class="product-shop col-md-8 col-sm-7">
                                    <div class="item-inner product_list_style">
                                        <div class="item-info">
                                            <div class="item-title">
                                                <h4 title="<?= $detail_product['product_name'] ?>"><?= $detail_product['product_name'] ?></h4>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <?php $pricing =  $detail_product['price'] - (($detail_product['discount'] / 100) * $detail_product['price']); ?>
                                                        <span class="price">Rp <?= number_format($pricing, 0, ',', '.') ?></span>
                                                        <s class="price2 text-muted"><?= number_format($detail_product['price'], 0, ',', '.') ?></s>

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="availability">
                                                <p class="style1"><?= ($detail_product['stock'] > 0) ? "Ready Stock" : "Not Available" ?></p>
                                            </div>
                                            <div class="rating-block">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:<?= $detail_product['rating'] * 20 ?>%"></div>
                                                    </div>
                                                    <span class="amount">
                                                        <a href="#">(<?= $detail_product['review_total'] ?> Reviews)</a>
                                                        <span class="separator">|</span>
                                                        <a href="#">Add Your Review</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6 my-2">
                                                        <p class="mg-size">SIZE
                                                            <span>*</span>
                                                        </p>
                                                        <select>
                                                            <option>8/128</option>
                                                            <option>8/256</option>
                                                            <option>8/512</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 my-2">
                                                        <p class="mg-size">COLOR
                                                            <span>*</span>
                                                        </p>
                                                        <select>
                                                            <option class="color-choose"><?= $detail_product['color_1'] ?></option>
                                                            <option class="color-choose"><?= $detail_product['color_2'] ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="actions">
                                                <label class="gfont" for="qty">Qty : </label>
                                                <div class="qty-container">
                                                    <button class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) && qty > 1 ) qty_el.value--;return false;" type="button"></button>
                                                    <input id="qty" class="input-text qty" type="text" title="Qty" value="1" name="qty">
                                                    <button class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button"></button>
                                                </div>

                                                <button class="btn-cart" title="Add to Cart" data-id="qv_item_8">
                                                    Add to Cart
                                                </button>

                                            </div>
                                            <div class="addthis_native_toolbox"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom row">
            <div class="2coloum-left">

                <div id="sns_mainm" class="col-md-12">
                    <div id="sns_description" class="description">
                        <div class="sns_producttaps_wraps1">
                            <h3 class="detail-none">Description
                                <i class="fa fa-align-justify"></i>
                            </h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li id="spec" onclick="tabToggleA()" role="presentation" class="active style-detail"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Product Description</a></li>
                                <li id="review" onclick="tabToggleB()" role="presentation" class="style-detail"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                            <script>
                                const tablistToggle = document.querySelector("#spec");
                                const tablistToggleDetail = document.querySelector("#review");

                                function tabToggleA() {
                                    tablistToggle.classList.add("active");
                                    tablistToggleDetail.classList.remove("active");
                                }

                                function tabToggleB() {
                                    tablistToggle.classList.remove("active");
                                    tablistToggleDetail.classList.add("active");
                                }
                            </script>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="style1">
                                        <p class="top">
                                            Spesifikasi :
                                        </p>
                                        <p class="mid">
                                            <?= $detail_product['description'] ?>
                                        </p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="collateral-box">
                                        <div class="form-add">
                                            <form id="review-form">
                                                <input type="hidden" value="8haZqMXtybxMqfBa" name="form_key">
                                                <fieldset>
                                                    <h3>
                                                        You're reviewing : <span><?= $detail_product['product_name'] ?></span>
                                                        <hr>
                                                    </h3>
                                                    <ul>
                                                        <li>
                                                            <strong>
                                                                <h3 class="font-weight-bold">Bambang Gunawan</h3>
                                                            </strong>
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:<?= $detail_product['rating'] * 20 ?>%"></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <?php
                                                            $fh = fopen('komentar.txt', 'r');
                                                            $fh2 = fopen('komentar2.txt', 'r');
                                                            ?>
                                                            <p class="mb-5">
                                                                <?php
                                                                while ($line = fgets($fh)) {
                                                                    echo ($line);
                                                                }
                                                                fclose($fh);
                                                                ?>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <strong>
                                                                <h3 class="font-weight-bold">Eko Lutfianto</h3>
                                                            </strong>
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:<?= $detail_product['rating'] * 20 ?>%"></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <?php
                                                                while ($line = fgets($fh2)) {
                                                                    echo ($line);
                                                                }
                                                                fclose($fh2);
                                                                ?>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AND CONTENT -->
<?= $this->endSection(); ?>