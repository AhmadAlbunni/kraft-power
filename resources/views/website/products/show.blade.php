
@extends('website.layouts.app')
@section('content')
    <section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="images/bg/02.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-name">
                        <h1>Shop details</h1>
                        <p>We know the secret of your success</p>
                    </div>
                    <ul class="page-breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i>
                        </li>
                        <li><a href="#">Shop</a> <i class="fa fa-angle-double-right"></i></li>
                        <li><span>Shop details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="shop-single page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-slick">
                                <div class="slider slider-for detail-big-car-gallery">
                                    <img class="img-fluid" src="images/shop/detail/big/01.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/big/02.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/big/03.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/big/04.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/big/05.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/big/06.jpg" alt="">
                                </div>
                                <div class="slider slider-nav">
                                    <img class="img-fluid" src="images/shop/detail/thum/01.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/thum/02.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/thum/03.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/thum/04.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/thum/05.jpg" alt="">
                                    <img class="img-fluid" src="images/shop/detail/thum/06.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-detail clearfix">
                                <div class="product-detail-title mb-20 sm-mt-40">
                                    <h4 class="mb-10"> Product name</h4>
                                    <span>Consectetur lorem ipsum dolor sit amet, adipisicing elit. Accusamus officiis pariatur optio nobis culpa magni labor!  </span>
                                </div>
                                <div class="clearfix mb-30">
                                    <div class="product-detail-price">
                                        <del>$39.99</del>
                                        <ins>$24.99</ins>
                                    </div>
                                    <div class="product-detail-rating float-end">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-detail-quantity clearfix mb-40">
                                    <div class="input-group">
                                        <input type="number" name="quant[1]" class="form-control input-number" value="1"
                                               min="1" max="10">
                                    </div>
                                    <div class="product-detail add-to-cart">
                                        <a class="button small" href="#">Add to cart</a>
                                    </div>
                                </div>
                                <div class="product-detail-des mb-30">
                                    <p class="mb-30">Adipisicing elit lorem ipsum dolor sit amet, consectetur. Dicta
                                        fugit cupiditate voluptates architecto nam totam ut, aperiam consequuntur
                                        aliquam voluptatem provident .</p>
                                    <ul class="list list-unstyled list-arrow">
                                        <li>Voluptatem provident</li>
                                        <li>Aperiam consequuntur</li>
                                        <li>Officia doloremque</li>
                                    </ul>
                                </div>
                                <div class="product-detail-meta">
                                    <span>SKU: 8465415 </span>
                                    <span>Category: <a href="#">Shop</a>  </span>
                                    <span>Tags: <a href="#">Shoes,</a> <a href="#">T-Shirt,</a> <a href="#">Shirt</a>  </span>
                                </div>
                                <div class="product-detail-social">
                                    <span>Share:</span>
                                    <ul class="list-style-none">
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-envelope-o"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">

                            <div class="tab tab-border mt-50">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="description-tab" data-bs-toggle="tab"
                                           href="#description" role="tab" aria-controls="description"
                                           aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="additional-tab" data-bs-toggle="tab" href="#additional"
                                           role="tab" aria-controls="additional" aria-selected="false">Profile </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                                           role="tab" aria-controls="reviews" aria-selected="false">Portfolio </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="description" role="tabpanel"
                                         aria-labelledby="description-tab">
                                        <h6>Consectetur adipisicing elit</h6>
                                        <p class="mt-20">Temporibus possimus quasi beatae, consectetur adipisicing elit.
                                            Obcaecati unde molestias sunt officiis aliquid sapiente, numquam, porro
                                            perspiciatis neque voluptatem sint hic quam eveniet ad adipisci laudantium
                                            corporis ipsam ea!</p>

                                        <p class="mt-20">Consectetur adipisicing elit. Dicta, amet quia ad debitis
                                            fugiat voluptatem neque dolores tempora iste saepe cupiditate, molestiae
                                            iure voluptatibus est beatae? Culpa, illo a You will begin to realize why,
                                            consectetur adipisicing elit. Commodi, doloribus, earum modi consectetur
                                            molestias asperiores sequi ipsam neque error itaque veniam culpa eligendi
                                            similique ducimus nulla, blanditiis, perspiciatis atque saepe!
                                            veritatis.</p>


                                        <p class="mt-20">Adipisicing consectetur elit. Dicta, amet quia ad debitis
                                            fugiat voluptatem neque dolores tempora iste saepe cupiditate, molestiae
                                            iure voluptatibus est beatae? Culpa, illo a You will begin to realize why,
                                            consectetur adipisicing elit. Commodi, doloribus, earum modi consectetur
                                            molestias asperiores.</p>


                                        <p class="mt-20">Voluptatem adipisicing elit. Dicta, amet quia ad debitis fugiat
                                            neque dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est
                                            beatae? Culpa, illo a You will begin to realize why, consectetur adipisicing
                                            elit. Commodi, You will begin to realize why, consectetur adipisicing elit.
                                            Laudantium nisi eaque maxime totam, iusto accusantium esse placeat rem at
                                            temporibus minus architecto ipsum eveniet. Delectus cum sunt, ea cumque
                                            quas! doloribus, earum modi consectetur molestias asperiores sequi ipsam
                                            neque error itaque veniam culpa eligendi similique ducimus nulla,
                                            blanditiis, perspiciatis atque saepe! veritatis. </p>
                                    </div>
                                    <div class="tab-pane fade" id="additional" role="tabpanel"
                                         aria-labelledby="additional-tab">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <th scope="row"> Air Conditioning</th>
                                                <td>Mark</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Alloy Wheels</th>
                                                <td>Jacob</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Anti-Lock Brakes (ABS)</th>
                                                <td>Larry</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> Anti-Theft</th>
                                                <td>Larry</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Anti-Starter</th>
                                                <td>Larry</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Alloy Wheels</th>
                                                <td>Larry</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel"
                                         aria-labelledby="reviews-tab">
                                        <div class="blog-comments mt-40">
                                            <div class="comments-1">
                                                <div class="comments-photo">
                                                    <img src="images/team/08.jpg" alt="">
                                                </div>
                                                <div class="comments-info">
                                                    <h6> Michael Bean <span>Sep 15, 2021</span></h6>
                                                    <div class="port-post-social float-end">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p class="mt-10">Imagine you are 10 years into the future but this
                                                        time it’s different. Why? Because starting today you actually
                                                        begin making changes in your life. Specific intentional changes
                                                        are not easy.</p>
                                                </div>
                                            </div>
                                            <div class="comments-1">
                                                <div class="comments-photo">
                                                    <img src="images/team/08.jpg" alt="">
                                                </div>
                                                <div class="comments-info">
                                                    <h6> Joana Williams <span>Oct 02, 2021</span></h6>
                                                    <div class="port-post-social float-end">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p class="mt-10">This is the path of a different choice, a different
                                                        decision. You have the freedom to be how you want to be. Absorb
                                                        all you need from this moment in your future and the positive
                                                        things that you can learn consciously and unconsciously and then
                                                        drift and float back to the place where the path splits. </p>
                                                </div>
                                            </div>
                                            <div class="comments review-button text-end">
                                                <a class="button" href="#">add a review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="title mt-30 mb-30">
                                <h6>Related Products</h6>
                            </div>
                            <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="3"
                                 data-sm-items="2" data-lg-items="3" data-md-items="3" data-xs-items="2"
                                 data-autoplay="false">
                                <div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/01.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del>
                                                <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/02.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del>
                                                <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/03.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del>
                                                <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-image">
                                            <img class="img-fluid mx-auto" src="images/shop/04.jpg" alt="">
                                            <div class="product-overlay">
                                                <div class="add-to-cart">
                                                    <a href="shop-single.html">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-des">
                                            <div class="product-title">
                                                <a href="shop-single.html">Product name</a>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <del>$24.99</del>
                                                <ins>$12.49</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Search</h5>
                            <div class="widget-search">
                                <i class="fa fa-search"></i>
                                <input type="search" class="form-control placeholder" placeholder="Search....">
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Categories</h5>
                            <div class="widget-link">
                                <ul>
                                    <li><a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Product
                                            name </a></li>
                                    <li><a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Product
                                            name </a></li>
                                    <li><a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Product
                                            name (10) </a></li>
                                    <li><a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Product
                                            name </a></li>
                                    <li><a href="shop-single.html"> <i class="fa fa-angle-double-right"></i> Product
                                            name (20) </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-40">
                            <h5 class="mb-20">Recent items</h5>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/01.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/02.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/03.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-0">
                            <h5 class="mb-20">Popular items</h5>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/08.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/09.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/10.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item mb-0 clearfix">
                                <div class="recent-image">
                                    <a href="shop-single.html"><img class="img-fluid" src="images/shop/11.jpg"
                                                                    alt=""></a>
                                </div>
                                <div class="recent-info">
                                    <div class="recent-title">
                                        <a href="shop-single.html">Product name</a>
                                    </div>
                                    <div class="recent-meta">
                                        <ul class="list-style-unstyled">
                                            <li class="color">$29.99 /</li>
                                            <li><i class="icon-star3"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h5 class="mt-40 mb-20">Newsletter</h5>
                            <div class="widget-newsletter">
                                <div class="newsletter-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="newsletter-content">
                                    <i>Keep up on our always evolving product features and technology. Enter your e-mail
                                        and subscribe to our newsletter. </i>
                                </div>
                                <div class="newsletter-form mt-20">
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Name">
                                    </div>
                                    <a class="button d-grid" href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h5 class="mt-40 mb-20">Our clients</h5>
                            <div class="widget-clients">
                                <div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1"
                                     data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                    <div class="item">
                                        <img class="img-fluid mx-auto" src="images/clients/01.png" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid mx-auto" src="images/clients/02.png" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid mx-auto" src="images/clients/03.png" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid mx-auto" src="images/clients/04.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="action-box theme-bg full-width">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 position-relative">
                    <div class="action-box-text">
                        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
                        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with
                            powerful features.</p>
                    </div>
                    <div class="action-box-button">
                        <a class="button button-border white" href="#">
                            <span>Purchase Now</span>
                            <i class="fa fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
