@extends('layouts.app')

@section('content')
    <!-- FEATURED PROPERTIES
                =============================================================================================================-->
    <section id="featured-properties" class="ts-block pt-5">
        <div class="container">

            <!--Title-->
            <div class="ts-title text-center">
                <h2>Featured Properties</h2>
            </div>

            <div class="row">

                <!--Item-->
                <div class="col-sm-6 col-lg-4">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Ribbon-->
                        <div class="ts-ribbon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-01.jpg">
                            <div class="ts-item__info-badge">
                                $350,000
                            </div>
                            <figure class="ts-item__info">
                                <h4>Big Luxury Apartment</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-4">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Ribbon-->
                        <div class="ts-ribbon-corner">
                            <span>Updated</span>
                        </div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-02.jpg">
                            <figure class="ts-item__info">
                                <h4>Cozy Design Studio</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$125,000</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-4">

                    <div class="card ts-item ts-card ts-item__lg">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-03.jpg">
                            <figure class="ts-item__info">
                                <h4>Family Villa</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4127 Winding Way
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$45,900</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

            </div>
            <!--end row-->

            <!--All properties button-->
            <div class="mt-3 text-center">
                <a href="listing-category-icons.html" class="btn btn-outline-dark ts-btn-border-muted">Show All
                    Properties</a>
            </div>

        </div>
        <!--end container-->
    </section>

    <!-- FEATURES
                =============================================================================================================-->
    <section class="ts-block bg-white">
        <div class="container py-4">
            <div class="row">

                <!--Feature-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-feature">

                        <figure class="ts-feature__icon p-2">
                            <span class="ts-circle">
                                <i class="fa fa-check"></i>
                            </span>
                            <img src="assets/img/icon-house.png" alt="">
                        </figure>

                        <h4>Properties at Great Prices</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                </div>

                <!--Feature-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-feature">

                        <figure class="ts-feature__icon p-2">
                            <span class="ts-circle">
                                <i class="fa fa-check"></i>
                            </span>
                            <img src="assets/img/icon-pin.png" alt="">
                        </figure>

                        <h4>Everything on One Place</h4>

                        <p>In dictum ac augue et suscipit. Vivamus ac tellus ut massa</p>

                    </div>
                </div>

                <!--Feature-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-feature">

                        <figure class="ts-feature__icon p-2">
                            <span class="ts-circle">
                                <i class="fa fa-check"></i>
                            </span>
                            <img src="assets/img/icon-agent.png" alt="">
                        </figure>

                        <h4>Local Agents</h4>

                        <p>Vivamus ac tellus ut massa bibendum aliquam vitae ac diam. </p>

                    </div>
                </div>

                <!--Feature-->
                <div class="col-sm-6 col-md-3">
                    <div class="ts-feature">

                        <figure class="ts-feature__icon p-2">
                            <span class="ts-circle">
                                <i class="fa fa-check"></i>
                            </span>
                            <img src="assets/img/icon-calculator.png" alt="">
                        </figure>

                        <h4>Free Mortgage Calculation</h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    </div>
                </div>

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end ts-block-->

    <!-- SUBSCRIBE
                =============================================================================================================-->
    <section id="subscribe" class="ts-block" data-bg-pattern="assets/img/bg-pattern-topo.png" data-bg-color="#f4f4f4">
        <div class="container">
            <div class="offset-lg-1 col-lg-10">

                <h3>Subscribe for great offers!</h3>

                <form class="ts-form ts-form-email" data-php-path="assets/php/email.php">
                    <div class="row">

                        <!--Input-->
                        <div class="col-sm-8 col-md-10">
                            <div class="form-group mb-0">
                                <input type="email" class="form-control" id="email-subscribe" aria-describedby="subscribe"
                                    name="email" placeholder="Email Address" required>
                                <small class="form-text ts-opacity__50 mt-2">*You’ll get only relevant news
                                    once a week </small>
                            </div>

                        </div>

                        <!--Button-->
                        <div class="col-sm-4 col-md-2">
                            <button type="submit" class="btn btn-outline-dark w-100">Submit</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </section>

    <!--LATEST LISTINGS
                =============================================================================================================-->
    <section id="latest-listings" class="ts-block">
        <div class="container">

            <!--Title-->
            <div class="ts-title">
                <h2>Latest Listings</h2>
            </div>

            <!--Row-->
            <div class="row">

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Ribbon-->
                        <div class="ts-ribbon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-01.jpg">
                            <div class="ts-item__info-badge">
                                $350,000
                            </div>
                            <figure class="ts-item__info">
                                <h4>Big Luxury Apartment</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Ribbon-->
                        <div class="ts-ribbon-corner">
                            <span>Updated</span>
                        </div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-02.jpg">
                            <figure class="ts-item__info">
                                <h4>Cozy Design Studio</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$125,000</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-03.jpg">
                            <figure class="ts-item__info">
                                <h4>Family Villa</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4127 Winding Way
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$45,900</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-04.jpg">
                            <div class="ts-item__info-badge">
                                $860,000
                            </div>
                            <figure class="ts-item__info">
                                <h4>Traditional Restaurant</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-05.jpg">
                            <figure class="ts-item__info">
                                <h4>White Cubes Resort</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$435,000</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-06.jpg">
                            <figure class="ts-item__info">
                                <h4>Bristol Tower Complex</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4127 Winding Way
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">$85,900</div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-07.jpg">
                            <figure class="ts-item__info">
                                <h4>River Apartments</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    1350 Arbutus Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">
                                $120,000
                            </div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item-->
                </div>
                <!--end Item col-md-4-->

                <!--Item-->
                <div class="col-sm-6 col-lg-3">
                    <div class="card ts-item ts-card">

                        <div class="badge badge-dark">Rent</div>

                        <!--Card Image-->
                        <a href="detail-01.html" class="card-img ts-item__image"
                            data-bg-image="assets/img/img-item-thumb-08.jpg">
                            <figure class="ts-item__info">
                                <h4>Apartment for Rent</h4>
                                <aside>
                                    <i class="fa fa-map-marker mr-2"></i>
                                    4831 Worthington Drive
                                </aside>
                            </figure>
                            <div class="ts-item__info-badge">
                                <span>$480</span>
                                <small>/ month</small>
                            </div>
                        </a>

                        <!--Card Body-->
                        <div class="card-body ts-item__body">
                            <div class="ts-description-lists">
                                <dl>
                                    <dt>Area</dt>
                                    <dd>325m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                </dl>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                </dl>
                            </div>
                        </div>

                        <!--Card Footer-->
                        <a href="detail-01.html" class="card-footer">
                            <span class="ts-btn-arrow">Detail</span>
                        </a>

                    </div>
                    <!--end ts-item ts-card-->
                </div>
                <!--end Item col-md-4-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--PRICING
                =============================================================================================================-->
    <section id="pricing" class="ts-block pt-0">
        <div class="container">

            <!--Title-->
            <div class="ts-title text-center">
                <h2 class="mb-5">Affordable Prices</h2>
            </div>

            <!--Row-->
            <div class="row no-gutters ts-cards-same-height">

                <!--Price Box-->
                <div class="col-sm-4 col-lg-4">
                    <div class="card ts-price-box text-center">

                        <!--Header-->
                        <div class="card-header" data-bg-color="#dadada">
                            <h5 class="text-white" data-bg-color="#000296">Basic</h5>
                            <div class="ts-title">
                                <h3 class="font-weight-normal">Free</h3>
                                <small class="ts-opacity__50">Forever</small>
                            </div>
                        </div>

                        <!--Body-->
                        <div class="card-body border-bottom-0 p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1 Property</li>
                                <li class="list-group-item">1 Agent Profile</li>
                                <li class="list-group-item ts-na"><s>Agency Profile</s></li>
                                <li class="list-group-item ts-na"><s>Featured Properties</s></li>
                            </ul>
                        </div>

                        <!--Footer-->
                        <div class="card-footer border-0 bg-transparent pt-0">
                            <a href="#" class="btn btn-outline-primary">Select Now</a>
                        </div>

                    </div>
                </div>
                <!--end price-box-->

                <!--Price Box Promoted-->
                <div class="col-sm-4 col-lg-4">
                    <div class="card ts-price-box ts-price-box__promoted text-center">

                        <!--Header-->
                        <div class="card-header" data-bg-color="#00004c">
                            <h5 class="ts-bg-primary text-white">Premium</h5>
                            <div class="ts-title text-white">
                                <h3 class="font-weight-normal">
                                    <sup>$</sup>9,99
                                </h3>
                                <small class="ts-opacity__50">per month</small>
                            </div>
                        </div>

                        <!--Body-->
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">20 Properties</li>
                                <li class="list-group-item">10 Agent Profiles</li>
                                <li class="list-group-item">5 Agency Profiles</li>
                                <li class="list-group-item">Featured Properties</li>
                            </ul>
                        </div>

                        <!--Footer-->
                        <div class="card-footer border-0 bg-transparent pt-0">
                            <a href="#" class="btn btn-primary">Select Now</a>
                        </div>

                    </div>
                </div>
                <!--end price-box-->

                <!--Price Box-->
                <div class="col-sm-4 col-lg-4">
                    <div class="card ts-price-box text-center">

                        <!--Header-->
                        <div class="card-header" data-bg-color="#dadada">
                            <h5 class="text-white" data-bg-color="#000296">Professional</h5>
                            <div class="ts-title">
                                <h3 class="font-weight-normal">
                                    <sup>$</sup>19,99
                                </h3>
                                <small class="ts-opacity__50">Per Month</small>
                            </div>
                        </div>

                        <!--Body-->
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Unlimited Properties</li>
                                <li class="list-group-item">Unlimited Agent Profiles</li>
                                <li class="list-group-item">Unlimited Agency Profiles</li>
                                <li class="list-group-item">Featured Properties</li>
                            </ul>
                        </div>

                        <!--Footer-->
                        <div class="card-footer border-0 bg-transparent pt-0">
                            <a href="#" class="btn btn-outline-primary">Select Now</a>
                        </div>

                    </div>
                </div>
                <!--end price-box-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--ITEM CAROUSEL
                =============================================================================================================-->
    <section class="ts-block" data-bg-pattern="assets/img/bg-pattern-dot.png">

        <!--Title-->
        <div class="ts-title text-center">
            <h2>Our Top Picks</h2>
        </div>

        <!--Carousel-->
        <div class="owl-carousel ts-items-carousel" data-owl-items="5" data-owl-dots="1">

            <!--Item-->
            <div class="slide">

                <div class="card ts-item ts-card ts-item__lg">

                    <!--Ribbon-->
                    <div class="ts-ribbon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-01.jpg">
                        <div class="ts-item__info-badge">
                            $350,000
                        </div>
                        <figure class="ts-item__info">
                            <h4>Big Luxury Apartment</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                1350 Arbutus Drive
                            </aside>
                        </figure>
                    </a>

                    <!--Card Body-->
                    <div class="card-body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">

                <div class="card ts-item ts-card ts-item__lg">

                    <!--Ribbon-->
                    <div class="ts-ribbon-corner">
                        <span>Updated</span>
                    </div>

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-02.jpg">
                        <figure class="ts-item__info">
                            <h4>Cozy Design Studio</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                4831 Worthington Drive
                            </aside>
                        </figure>
                        <div class="ts-item__info-badge">$125,000</div>
                    </a>

                    <!--Card Body-->
                    <div class="card-body ts-item__body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item ts-card-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">

                <div class="card ts-item ts-card ts-item__lg">

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-03.jpg">
                        <figure class="ts-item__info">
                            <h4>Family Villa</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                4127 Winding Way
                            </aside>
                        </figure>
                        <div class="ts-item__info-badge">$45,900</div>
                    </a>

                    <!--Card Body-->
                    <div class="card-body ts-item__body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item ts-card-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">
                <div class="card ts-item ts-card ts-item__lg">

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-04.jpg">
                        <div class="ts-item__info-badge">
                            $860,000
                        </div>
                        <figure class="ts-item__info">
                            <h4>Traditional Restaurant</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                1350 Arbutus Drive
                            </aside>
                        </figure>
                    </a>

                    <!--Card Body-->
                    <div class="card-body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">
                <div class="card ts-item ts-card ts-item__lg">

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-05.jpg">
                        <figure class="ts-item__info">
                            <h4>White Cubes Resort</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                4831 Worthington Drive
                            </aside>
                        </figure>
                        <div class="ts-item__info-badge">$435,000</div>
                    </a>

                    <!--Card Body-->
                    <div class="card-body ts-item__body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item ts-card-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">
                <div class="card ts-item ts-card ts-item__lg">

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-06.jpg">
                        <figure class="ts-item__info">
                            <h4>Bristol Tower Complex</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                4127 Winding Way
                            </aside>
                        </figure>
                        <div class="ts-item__info-badge">$85,900</div>
                    </a>

                    <!--Card Body-->
                    <div class="card-body ts-item__body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item ts-card-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">
                <div class="card ts-item ts-card ts-item__lg">

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-07.jpg">
                        <figure class="ts-item__info">
                            <h4>River Apartments</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                1350 Arbutus Drive
                            </aside>
                        </figure>
                        <div class="ts-item__info-badge">
                            $120,000
                        </div>
                    </a>

                    <!--Card Body-->
                    <div class="card-body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item-->
            </div>
            <!--end slide-->

            <!--Item-->
            <div class="slide">
                <div class="card ts-item ts-card ts-item__lg">

                    <div class="badge badge-primary">Rent</div>

                    <!--Card Image-->
                    <a href="detail-01.html" class="card-img ts-item__image"
                        data-bg-image="assets/img/img-item-thumb-08.jpg">
                        <figure class="ts-item__info">
                            <h4>Apartment for Rent</h4>
                            <aside>
                                <i class="fa fa-map-marker mr-2"></i>
                                4831 Worthington Drive
                            </aside>
                        </figure>
                        <div class="ts-item__info-badge">
                            <span>$480</span>
                            <small>/ month</small>
                        </div>
                    </a>

                    <!--Card Body-->
                    <div class="card-body ts-item__body">
                        <div class="ts-description-lists">
                            <dl>
                                <dt>Area</dt>
                                <dd>325m<sup>2</sup></dd>
                            </dl>
                            <dl>
                                <dt>Bedrooms</dt>
                                <dd>2</dd>
                            </dl>
                            <dl>
                                <dt>Bathrooms</dt>
                                <dd>1</dd>
                            </dl>
                        </div>
                    </div>

                    <!--Card Footer-->
                    <a href="detail-01.html" class="card-footer">
                        <span class="ts-btn-arrow">Detail</span>
                    </a>

                </div>
                <!--end ts-item ts-card-->
            </div>
            <!--end slide-->


        </div>
    </section>
    <!--end ts-block-->

    <!--SUBMIT BANNER
                =============================================================================================================-->
    <section id="submit-banner" class="ts-block">
        <div class="container">

            <div class="ts-block-inside ts-separate-bg-element text-center" data-bg-image-opacity=".2"
                data-bg-image="assets/img/bg-chair.jpg" data-bg-color="#fff">
                <figure class="h1 font-weight-light mb-2">Have Some Property For Sale?</figure>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <a href="submit.html" class="btn btn-dark">Submit Your Own</a>
            </div>

        </div>
    </section>

    <!--PARTNERS
                =============================================================================================================-->
    <section id="partners" class="ts-block pb-0 pt-4">
        <div class="container">

            <!--Logos-->
            <div class="d-block d-md-flex justify-content-between align-items-center ts-partners py-3 text-center">

                <a href="#">
                    <img src="assets/img/logo-01.png" alt="">
                </a>

                <a href="#">
                    <img src="assets/img/logo-02.png" alt="">
                </a>

                <a href="#">
                    <img src="assets/img/logo-03.png" alt="">
                </a>

                <a href="#">
                    <img src="assets/img/logo-04.png" alt="">
                </a>

                <a href="#">
                    <img src="assets/img/logo-05.png" alt="">
                </a>

            </div>
            <!--end logos-->
        </div>
    </section>
@endsection
