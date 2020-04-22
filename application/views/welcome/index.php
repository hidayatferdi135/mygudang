<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.createx.studio/cartzilla/home-fashion-store-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Apr 2020 11:50:38 GMT -->
<head>
    <meta charset="utf-8">
    <title>Gudang | Aplikasi Pengelolaan Gudang
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="<?= base_url('vendor/cartzilla/') ?>image/png" sizes="32x32" href="<?= base_url('assets/gudang2.png') ?>">
    <link rel="icon" type="<?= base_url('vendor/cartzilla/') ?>image/png" sizes="16x16" href="<?= base_url('assets/gudang2.png') ?>">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?= base_url('vendor/cartzilla/') ?>css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="<?= base_url('vendor/cartzilla/') ?>css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title product-title"><a href="<?= base_url('Welcome/detail') ?>" data-toggle="tooltip" data-placement="right" title="Go to product page">Sports Hooded Sweatshirt<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pr-lg-0">
                <div class="cz-product-gallery">
                  <div class="cz-preview order-sm-2">
                    <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/01.jpg" data-zoom="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/01.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/02.jpg" data-zoom="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/02.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/03.jpg" data-zoom="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/03.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/04.jpg" data-zoom="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/04.jpg" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                  </div>
                  <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                <div class="product-details ml-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="<?= base_url('Welcome/detail') ?>#reviews">
                      <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                      </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span></a>
                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to wishlist"><i class="czi-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 font-weight-normal text-accent mr-1">$18.<small>99</small></span>
                    <del class="text-muted font-size-lg mr-3">$25.<small>00</small></del><span class="badge badge-danger badge-shadow align-middle mt-n2">Sale</span>
                  </div>
                  <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Red/Dark blue/White</span></div>
                  <div class="position-relative mr-n4 mb-3">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                      <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-image: url(<?= base_url('vendor/cartzilla/') ?>img/shop/single/color-opt-1.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color2">
                      <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-image: url(<?= base_url('vendor/cartzilla/') ?>img/shop/single/color-opt-2.png)"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color3">
                      <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-image: url(<?= base_url('vendor/cartzilla/') ?>img/shop/single/color-opt-3.png)"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                  </div>
                  <form class="mb-grid-gutter">
                    <div class="form-group">
                      <label class="font-weight-medium pb-1" for="product-size">Size:</label>
                      <select class="custom-select" required id="product-size">
                        <option value="">Select size</option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                      </select>
                    </div>
                    <div class="form-group d-flex align-items-center">
                      <select class="custom-select mr-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      <button class="btn btn-primary btn-shadow btn-block" type="submit"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                    </div>
                  </form>
                  <h5 class="h6 mb-3 pb-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>
                  <h6 class="font-size-sm mb-2">Style</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Hooded top</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Composition</h6>
                  <ul class="font-size-sm pl-4">
                    <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                    <li>Lining: Cotton 100%</li>
                    <li>Cotton 80%, Polyester 20%</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Art. No.</h6>
                  <ul class="font-size-sm pl-4 mb-0">
                    <li>183260098</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar 3 Level (Light)-->
    <header class="box-shadow-sm">
      <!-- Topbar-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky" style="background-color: #fed330;">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container"><a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0" href="index.html" style="min-width: 7rem;"><img width="142" src="<?= base_url('assets/gudang1.png') ?>" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2" href="index.html" style="min-width: 4.625rem;"><img width="74" src="<?= base_url('assets/gudang1.png') ?>" alt="Cartzilla"/></a>
            <div class="input-group-overlay d-none d-lg-flex mx-4">
              <input class="form-control appended-form-control" type="text" placeholder="Search for products">
              <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
            </div>
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-menu"></i></div></a>
                <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>
              <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="<?= base_url('Welcome/cart') ?>"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="<?= base_url('Welcome/cart') ?>"><small>My Cart</small>$265.00</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="<?= base_url('Welcome/detail') ?>"><img width="64" src="<?= base_url('vendor/cartzilla/') ?>img/shop/cart/widget/01.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="<?= base_url('Welcome/detail') ?>">Women Colorblock Sneakers</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="<?= base_url('Welcome/detail') ?>"><img width="64" src="<?= base_url('vendor/cartzilla/') ?>img/shop/cart/widget/02.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="<?= base_url('Welcome/detail') ?>">TH Jeans City Backpack</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="<?= base_url('Welcome/detail') ?>"><img width="64" src="<?= base_url('vendor/cartzilla/') ?>img/shop/cart/widget/03.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="<?= base_url('Welcome/detail') ?>">3-Color Sun Stash Hat</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="<?= base_url('Welcome/detail') ?>"><img width="64" src="<?= base_url('vendor/cartzilla/') ?>img/shop/cart/widget/04.jpg" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="<?= base_url('Welcome/detail') ?>">Cotton Polo Regular Fit</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="<?= base_url('Welcome/cart') ?>">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout-details.html"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group-overlay d-lg-none my-3">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
              </div>
              <!-- Departments menu-->
              <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-view-grid mr-2"></i>Kategori</a>
                  <div class="dropdown-menu px-2 pl-0 pb-4">
                    <div class="d-flex flex-wrap flex-md-nowrap">
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/departments/01.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Clothing</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Women's clothing</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Men's clothing</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/departments/02.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Shoes</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Women's shoes</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Men's shoes</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/departments/03.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Gadgets</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">E-book readers</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap flex-md-nowrap">
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/departments/04.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Furniture &amp; Decor</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Home furniture</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Office furniture</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/departments/05.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Accessories</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Hats</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Bags</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column pt-4 px-3">
                        <div class="widget widget-links"><a class="d-block overflow-hidden rounded-lg mb-3" href="#"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/departments/06.jpg" alt="Shoes"/></a>
                          <h6 class="font-size-base mb-2">Entertainment</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Kid's toys</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Video games</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="<?= base_url('welcome/index') ?>">Home</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('Auth/regis') ?>">Sign In / Sign Up</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('Auth/login') ?>">Log In</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url('Welcome/about') ?>">About Us</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="<?= base_url('Welcome/contact') ?>">Contacts</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Page Content-->
    <!-- Hero slider-->
    <section class="cz-carousel cz-controls-lg">
      <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
        <!-- Item-->
        <div class="px-lg-5" style="background-color: #3aafd2;">
          <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img style="margin-left: 250px;" class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="<?= base_url('assets/slide1.png') ?>" alt="Summer Collection">
            <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
              <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                <h2 class="text-light font-weight-light pb-1 from-left">Welcome in</h2>
                <h1 class="text-light display-4 from-left delay-1">Aplikasi Gudang</h1>
                <p class="font-size-lg text-light pb-3 from-left delay-2">Aplikasi pengelolaan stok barang di gudang</p><a class="btn btn-primary scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Item-->
        <!-- Item-->
      </div>
    </section>
    <!-- Popular categories-->
    <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
      <div class="row">
        <div class="col-xl-8 col-lg-9">
          <div class="card border-0 box-shadow-lg">
            <div class="card-body px-3 pt-grid-gutter pb-0">
              <div class="row no-gutters pl-1">
                <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="<?= base_url('vendor/cartzilla/') ?>img/home/categories/cat-sm01.jpg" alt="Men">
                    <h3 class="font-size-base pt-1 mb-0">Men</h3></a></div>
                <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="<?= base_url('vendor/cartzilla/') ?>img/home/categories/cat-sm02.jpg" alt="Women">
                    <h3 class="font-size-base pt-1 mb-0">Women</h3></a></div>
                <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="<?= base_url('vendor/cartzilla/') ?>img/home/categories/cat-sm03.jpg" alt="Kids">
                    <h3 class="font-size-base pt-1 mb-0">Kids</h3></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Products grid (Trending products)-->
    <section class="container pt-md-3 pb-5 mb-md-3">
      <h2 class="h3 text-center">Trending products</h2>
      <div class="row pt-4 mx-n2">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/01.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sneakers &amp; Keds</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Women Colorblock Sneakers</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size1" id="s-75">
                  <label class="custom-option-label" for="s-75">7.5</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size1" id="s-80" checked>
                  <label class="custom-option-label" for="s-80">8</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size1" id="s-85">
                  <label class="custom-option-label" for="s-85">8.5</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size1" id="s-90">
                  <label class="custom-option-label" for="s-90">9</label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card"><span class="badge badge-danger badge-shadow">Sale</span>
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/02.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women’s T-shirt</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Cotton Lace Blouse</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                  <del class="font-size-sm text-muted">$38.<small>50</small></del>
                </div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color1" id="white" checked>
                  <label class="custom-option-label rounded-circle" for="white"><span class="custom-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color1" id="blue">
                  <label class="custom-option-label rounded-circle" for="blue"><span class="custom-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color1" id="yellow">
                  <label class="custom-option-label rounded-circle" for="yellow"><span class="custom-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color1" id="pink">
                  <label class="custom-option-label rounded-circle" for="pink"><span class="custom-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                </div>
              </div>
              <div class="d-flex mb-2">
                <select class="custom-select custom-select-sm mr-2">
                  <option>XS</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
                <button class="btn btn-primary btn-sm" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              </div>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/03.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women’s Shorts</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Mom High Waist Shorts</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size2" id="xs">
                  <label class="custom-option-label" for="xs">XS</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size2" id="s" checked>
                  <label class="custom-option-label" for="s">S</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size2" id="m">
                  <label class="custom-option-label" for="m">M</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size2" id="l">
                  <label class="custom-option-label" for="l">L</label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/07.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women's Swimwear</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Two-Piece Bikini in Print</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size4" id="xs3" checked>
                  <label class="custom-option-label" for="xs3">XS</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size4" id="s3">
                  <label class="custom-option-label" for="s3">S</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size4" id="m3">
                  <label class="custom-option-label" for="m3">M</label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/04.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Sportswear</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Women Sports Jacket</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size3" id="xs2" checked>
                  <label class="custom-option-label" for="xs2">XS</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size3" id="s2">
                  <label class="custom-option-label" for="s2">S</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size3" id="m2">
                  <label class="custom-option-label" for="m2">M</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size3" id="l2">
                  <label class="custom-option-label" for="l2">L</label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/05.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Men’s Sunglasses</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Polarized Sunglasses</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-muted font-size-sm">Out of stock</span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm btn-block mb-2" href="<?= base_url('Welcome/detail') ?>">View details</a>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/06.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Backpacks</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">TH Jeans City Backpack</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color2" id="khaki" checked>
                  <label class="custom-option-label rounded-circle" for="khaki"><span class="custom-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color2" id="jeans">
                  <label class="custom-option-label rounded-circle" for="jeans"><span class="custom-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="color2" id="white2">
                  <label class="custom-option-label rounded-circle" for="white2"><span class="custom-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
          <div class="card product-card">
            <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="<?= base_url('Welcome/detail') ?>"><img src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/25.jpg" alt="Product"></a>
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Women's Sneakers</a>
              <h3 class="product-title font-size-sm"><a href="<?= base_url('Welcome/detail') ?>">Leather High-Top Sneakers</a></h3>
              <div class="d-flex justify-content-between">
                <div class="product-price"><span class="text-accent">$215.<small>00</small></span></div>
                <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                </div>
              </div>
            </div>
            <div class="card-body card-body-hidden">
              <div class="text-center pb-2">
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size5" id="s4-80">
                  <label class="custom-option-label" for="s4-80">8</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size5" id="s4-85" checked>
                  <label class="custom-option-label" for="s4-85">8.5</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size5" id="s4-90">
                  <label class="custom-option-label" for="s4-90">9</label>
                </div>
                <div class="custom-control custom-option custom-control-inline mb-2">
                  <input class="custom-control-input" type="radio" name="size5" id="s4-95">
                  <label class="custom-option-label" for="s4-95">9.5</label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
              <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
            </div>
          </div>
          <hr class="d-sm-none">
        </div>
      </div>
      <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">More products<i class="czi-arrow-right ml-1"></i></a></div>
    </section>
    <!-- Banners-->
    <section class="container pb-4 mb-md-3">
      <div class="row">
        <div class="col-md-8 mb-4">
          <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-lg">
            <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
              <h4 class="font-size-lg font-weight-light mb-2">Hurry up! Limited time offer</h4>
              <h3 class="mb-4">Converse All Star on Sale</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
            </div><img class="d-block ml-auto" src="<?= base_url('vendor/cartzilla/') ?>img/shop/catalog/banner.jpg" alt="Shop Converse">
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-lg" style="background-image: url(img/blog/banner-bg.jpg);">
            <div class="py-4 my-2 px-4 text-center">
              <div class="py-1">
                <h5 class="mb-2">Your Add Banner Here</h5>
                <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog + Instagram info cards-->
    <section class="container-fluid px-0">
      <div class="row no-gutters">
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
            <div class="card-body text-center"><i class="czi-edit h3 mt-2 mb-4 text-primary"></i>
              <h3 class="h5 mb-1">Read the blog</h3>
              <p class="text-muted font-size-sm">Latest store, fashion news and trends</p>
            </div></a></div>
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
            <div class="card-body text-center"><i class="czi-instagram h3 mt-2 mb-4 text-accent"></i>
              <h3 class="h5 mb-1">Follow on Instagram</h3>
              <p class="text-muted font-size-sm">#ShopWithCartzilla</p>
            </div></a></div>
      </div>
    </section>
    <!-- Toast: Added to Cart-->
    <div class="toast-container toast-bottom-center">
      <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
          <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
          <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
      </div>
    </div>
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light pb-4 mb-3">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="<?= base_url('vendor/cartzilla/') ?>img/footer-logo-light.png" alt="Cartzilla"/></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-toggle="dropdown"><img class="mr-2" width="20" src="<?= base_url('vendor/cartzilla/') ?>img/flags/en.png" alt="English"/>Eng / $
                  </button>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <select class="custom-select custom-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="<?= base_url('vendor/cartzilla/') ?>img/flags/fr.png" alt="Français"/>Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="<?= base_url('vendor/cartzilla/') ?>img/flags/de.png" alt="Deutsch"/>Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="<?= base_url('vendor/cartzilla/') ?>img/flags/it.png" alt="Italiano"/>Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-right mb-4">
              <div class="mb-3"><a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a><a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a></div><img class="d-inline-block" width="187" src="<?= base_url('vendor/cartzilla/') ?>img/cards-alt.png" alt="Payment methods"/>
            </div>
          </div>
          <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="<?= base_url('Welcome/cart') ?>"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- JavaScript libraries, plugins and custom scripts-->
    <script src="<?= base_url('vendor/cartzilla/') ?>js/vendor.min.js"></script>
    <script src="<?= base_url('vendor/cartzilla/') ?>js/theme.min.js"></script>
  </body>

<!-- Mirrored from demo.createx.studio/cartzilla/home-fashion-store-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Apr 2020 11:53:40 GMT -->
</html>