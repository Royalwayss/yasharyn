<?php 

include 'includes/header.php'; 
$get_product = get_product($conn,@$_GET['id']); 
if(empty($get_product['status'])){
	 echo "<script>window.location.href='".BASE_URL."';</script>";
 }else{
	$product =$get_product['product']; 
	
 }
?>

<!-- Page Title -->
<section class="page-title centred inner-pages" style="background-image: url(assets/images/background/product.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h2><?php echo $product['product_name']; ?></h2>
        </div>
    </div>
</section>
<!-- End Page Title -->


<!-- shop-details -->
<section class="shop-details">
    <div class="auto-container">
        <div class="product-details-content">
            <?php if(!empty($product['image'])) { ?>
            <div class="shape"
                style="background-image: url('assets/images/product/detail/<?php echo $product['image']; ?>);"></div>
            <?php } ?>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <?php if(!empty($product['image'])) { ?>
                    <div class="image-box">
                        <figure class="image"><img src="assets/images/product/detail/<?php echo $product['image']; ?>"
                                alt=""></figure>
                        <div class="preview-link"><a
                                href="assets/images/product/detail/<?php echo $product['image']; ?>"
                                class="lightbox-image" data-fancybox="gallery"><i class="far fa-search-plus"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="product-details">
                        <h3><?php echo $product['product_name']; ?></h3>
                        <!-- <div class="text">
                                    <p><?php echo $product['product_code']; ?></p>
                                </div> -->
                        <div class="yasharyn-new-product-details mb-2">

                            <ul class="list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Size :</li>
                                <li class="product-details-sub-details-data"><?php echo $product['size']; ?></li>
                            </ul>
                            <?php /* if(!empty($product['availability'])) { ?>
                            <ul class="list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Availability :</li>
                                <li class="product-details-sub-details-data"><?php echo $product['availability']; ?>
                                </li>
                            </ul>
							<?php } */?>
							
							<?php  if(!empty($product['neck'])) { ?>
                            <ul class="list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Neck :</li>
                                <li class="product-details-sub-details-data"><?php echo $product['neck']; ?>
                                </li>
                            </ul>
							<?php } ?>
							
							 <?php  if(!empty($product['weight'])) { ?>
                            <ul class="category list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Weight :</li>
                                <li class="product-details-sub-details-data"><?php echo $product['weight']; ?></li>
                            </ul>
                            <?php } ?>
							
                            <?php if(!empty($product['moc'])) { ?>
                            <ul class="category list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">MOC :</li>
                                <li class="product-details-sub-details-data"><?php echo $product['moc']; ?></li>
                            </ul>
                            <?php } ?>
							
							
							<?php if(!empty($product['ofc'])) { ?>
                            <ul class="category list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">OFC :</li>
                                <li class="product-details-sub-details-data"><?php echo $product['ofc']; ?></li>
                            </ul>
                            <?php } ?>
							

                        </div>

                        <div class="other-option">
                            <!-- <ul class="list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Size : </li>
                                <li class="product-details-sub-details-data"><?php echo $product['size']; ?></li>
                            </ul>
                            <ul class="list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Availability : </li>
                                <li class="product-details-sub-details-data"><?php echo $product['availability']; ?>
                                </li>
                            </ul>
                            <ul class="category list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">Weight : </li>
                                <li class="product-details-sub-details-data"><?php echo $product['weight']; ?></li>
                            </ul>
                            <?php if(!empty($product['moc'])) { ?>
                            <ul class="category list product-details-sub-details-ul">
                                <li class="product-details-sub-details-heading">MOC : </li>
                                <li class="product-details-sub-details-data"><?php echo $product['moc']; ?></li>
                            </ul>

                            <?php } ?> -->




                            <!--<ul class="tags list">
                                        <li>Tags:</li>
                                        <li>glasses,</li>
                                        <li>water,</li>
                                        <li>bottle</li>
                                    </ul> -->
                            <div class="product-discription">
                               
                                <div class="tabs-box">
                                    <div class="tab-btn-box description-product-details-new">
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li class="tab-btn active-btn " data-tab="#tab-1">Description</li>
                                            <?php /*<li class="tab-btn" data-tab="#tab-2">Reviews (2)</li> */ ?>
                                        </ul>
                                    </div>
                                    <div class="tabs-content">
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="content-box">
                                                <?php echo $product['description']; ?>
                                            </div>
                                        </div>
                                         <ul>
                                <li class="btn-box mt-4 text-center">
                                    <a href="javascript:;" class="theme-btn btn-one" data-toggle="modal"
                                        data-target="#exampleModal">Product Enquiry</a>
                                </li>
                            </ul>
                             <div class="shape" style="background-image: url(assets/images/shape/shape-39.png);">
                                </div> 
                                        <?php /*
							<div class="tab" id="tab-2">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 review-block">
                                        <div class="customer-review">
                                            <h4>Reviews</h4>
                                            <div class="single-review">
                                                <figure class="image-box"><img src="assets/images/resource/shop/review-1.png" alt=""></figure>
                                                <div class="inner">
                                                    <ul class="rating">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <h5>Eileen Alene<span> - May 2, 2020</span></h5>
                                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa  qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis natus.</p>
                                                </div>
                                            </div>
                                            <div class="single-review">
                                                <figure class="image-box"><img src="assets/images/resource/shop/review-2.png" alt=""></figure>
                                                <div class="inner">
                                                    <ul class="rating">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <h5>Jhon Matter<span> - May 1, 2020</span></h5>
                                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa  qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis natus.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                        <div class="customer-comments">
                                            <h4>Be First To Rate It</h4>
                                            <div class="rating-box clearfix">
                                                <p>Your Rating</p>
                                                <ul class="rating clearfix">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <form action="single-shop-1.html" method="post" class="comment-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <label>Your Review</label>
                                                        <textarea name="message"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                        <label>Your Name</label>
                                                        <input type="text" name="name" required="">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                        <label>Your Email</label>
                                                        <input type="email" name="email" required="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                        <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             */ ?>
                                    </div>
                                </div>
                            </div>
                           

                            <ul class="social-links clearfix">
                                <?php /*   <a rel="nofollow" href="javascript:void(0);" class="inline--icon enlarged bgCircleEnclosed" data-sharer="facebook" data-url="">
														<i class="fab fa-facebook-f"></i>
										</a> */ ?>
                                <!-- <li><h6>Follow Us:</h6></li>
                                        <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:;"><i class="fab fa-vimeo-v"></i></a></li>
                                        <li><a href="javascript:;"><i class="fab fa-google-plus-g"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="product-discription">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-39.png);"></div>
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
                                <?php /*<li class="tab-btn" data-tab="#tab-2">Reviews (2)</li> */ ?>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="content-box">
								   <?php echo $product['description']; ?>
								</div>
                            </div>
                            <?php /*
							<div class="tab" id="tab-2">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 review-block">
                                        <div class="customer-review">
                                            <h4>Reviews</h4>
                                            <div class="single-review">
                                                <figure class="image-box"><img src="assets/images/resource/shop/review-1.png" alt=""></figure>
                                                <div class="inner">
                                                    <ul class="rating">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <h5>Eileen Alene<span> - May 2, 2020</span></h5>
                                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa  qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis natus.</p>
                                                </div>
                                            </div>
                                            <div class="single-review">
                                                <figure class="image-box"><img src="assets/images/resource/shop/review-2.png" alt=""></figure>
                                                <div class="inner">
                                                    <ul class="rating">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <h5>Jhon Matter<span> - May 1, 2020</span></h5>
                                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa  qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis natus.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                                        <div class="customer-comments">
                                            <h4>Be First To Rate It</h4>
                                            <div class="rating-box clearfix">
                                                <p>Your Rating</p>
                                                <ul class="rating clearfix">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <form action="single-shop-1.html" method="post" class="comment-form">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <label>Your Review</label>
                                                        <textarea name="message"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                        <label>Your Name</label>
                                                        <input type="text" name="name" required="">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                        <label>Your Email</label>
                                                        <input type="email" name="email" required="">
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                        <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             */ ?>
						</div>
                    </div>
                </div> -->
        <?php if(!empty($product['related_products'])){  ?>
        <div class="related-product pt-5">
            <div class="title-box">
                <h3>Related Products</h3>
            </div>
            <div class="row clearfix">
                <?php foreach($product['related_products'] as $related_product){  ?>
                <div class="col-lg-4 col-md-6 col-sm-12 shop-block mb-5">
                    <div class="shop-block-one wow fadeInUp animated " data-wow-delay="00ms" data-wow-duration="1500m">
                        <div class="inner-box product-details-inner-height">
                            <?php if($related_product['image']) { ?>
                            <figure class="image-box "><img
                                    src="assets/images/product/list/<?php echo $related_product['image']; ?>" alt="">
                            </figure>
                            <?php } ?>
                            <div class="lower-content">
                                <span><?php echo $related_product['size'] ; ?></span>
                                <div class="shape" style="background-image: url(assets/images/shape/shape-7.png);">
                                </div>
                                <h4><a
                                        href="product_details.php?id=<?php echo $related_product['id']; ?>"><?php echo $related_product['product_name']; ?></a>
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
        <?php } ?>
    </div>
</section>
<!-- shop-details end -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Enquery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="product-enquery" action="product-enquery.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="enquery-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="enquery-name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="enquery-email" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="enquery-email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="enquery-mobile" class="col-form-label">Mobile:</label>
                        <input type="text" class="form-control" id="enquery-mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="enquery-message" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="enquery-message" name="message"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Send message">
                </div>
            </form>
        </div>
    </div>
</div>





<?php include 'includes/footer.php'; ?>
<script>
//$('#exampleModal').on('show.bs.modal', function (event) {


//})
</script>



<?php /*
<script>
 (function(e,g){var c=function(a){this.elem=a};c.init=function(){var a=g.querySelectorAll("[data-sharer]"),b,d=a.length;for(b=0;b<d;b++)a[b].addEventListener("click",c.add)};c.add=function(a){(new c(a.currentTarget||a.srcElement)).share()};c.prototype={constructor:c,getValue:function(a){var b=this.elem.getAttribute("data-"+a);if(b)return"hashtag"===a&&(b.startsWith("#")||(b="#"+b)),b},share:function(){var a=this.getValue("sharer").toLowerCase();if(a={facebook:{shareUrl:"https://www.facebook.com/sharer/sharer.php",
params:{u:this.getValue("url"),hashtag:this.getValue("hashtag")}},linkedin:{shareUrl:"https://www.linkedin.com/shareArticle",params:{url:this.getValue("url"),mini:!0}},twitter:{shareUrl:"https://twitter.com/intent/tweet/",params:{text:this.getValue("title"),url:this.getValue("url"),hashtags:this.getValue("hashtags"),via:this.getValue("via")}},email:{shareUrl:"mailto:"+this.getValue("to"),params:{subject:this.getValue("subject"),body:this.getValue("title")+"\n"+this.getValue("url")},isLink:!0},whatsapp:{shareUrl:"whatsapp://send",
params:{text:this.getValue("title")+" "+this.getValue("url")},isLink:!0},webwhatsapp:{shareUrl:"https://web.whatsapp.com/send",params:{text:this.getValue("title")+" "+this.getValue("url")},isLink:!0},telegram:{shareUrl:"tg://msg_url",params:{text:this.getValue("title")+" "+this.getValue("url")},isLink:!0},viber:{shareUrl:"viber://forward",params:{text:this.getValue("title")+" "+this.getValue("url")},isLink:!0},line:{shareUrl:"http://line.me/R/msg/text/?"+encodeURIComponent(this.getValue("title")+
" "+this.getValue("url")),isLink:!0},pinterest:{shareUrl:"https://www.pinterest.com/pin/create/button/",params:{url:this.getValue("url"),media:this.getValue("image"),description:this.getValue("description")}},tumblr:{shareUrl:"http://tumblr.com/widgets/share/tool",params:{canonicalUrl:this.getValue("url"),content:this.getValue("url"),posttype:"link",title:this.getValue("title"),caption:this.getValue("caption"),tags:this.getValue("tags")}},hackernews:{shareUrl:"https://news.ycombinator.com/submitlink",
params:{u:this.getValue("url"),t:this.getValue("title")}},reddit:{shareUrl:"https://www.reddit.com/submit",params:{url:this.getValue("url")}},vk:{shareUrl:"http://vk.com/share.php",params:{url:this.getValue("url"),title:this.getValue("title"),description:this.getValue("caption"),image:this.getValue("image")}},xing:{shareUrl:"https://www.xing.com/app/user",params:{op:"share",url:this.getValue("url"),title:this.getValue("title")}},buffer:{shareUrl:"https://buffer.com/add",params:{url:this.getValue("url"),
title:this.getValue("title"),via:this.getValue("via"),picture:this.getValue("picture")}},instapaper:{shareUrl:"http://www.instapaper.com/edit",params:{url:this.getValue("url"),title:this.getValue("title"),description:this.getValue("description")}},pocket:{shareUrl:"https://getpocket.com/save",params:{url:this.getValue("url")}},digg:{shareUrl:"http://www.digg.com/submit",params:{url:this.getValue("url")}},stumbleupon:{shareUrl:"http://www.stumbleupon.com/submit",params:{url:this.getValue("url"),title:this.getValue("title")}},
flipboard:{shareUrl:"https://share.flipboard.com/bookmarklet/popout",params:{v:2,title:this.getValue("title"),url:this.getValue("url"),t:Date.now()}},weibo:{shareUrl:"http://service.weibo.com/share/share.php",params:{url:this.getValue("url"),title:this.getValue("title"),pic:this.getValue("image"),appkey:this.getValue("appkey"),ralateUid:this.getValue("ralateuid"),language:"zh_cn"}},renren:{shareUrl:"http://share.renren.com/share/buttonshare",params:{link:this.getValue("url")}},myspace:{shareUrl:"https://myspace.com/post",
params:{u:this.getValue("url"),t:this.getValue("title"),c:this.getValue("description")}},blogger:{shareUrl:"https://www.blogger.com/blog-this.g",params:{u:this.getValue("url"),n:this.getValue("title"),t:this.getValue("description")}},baidu:{shareUrl:"http://cang.baidu.com/do/add",params:{it:this.getValue("title"),iu:this.getValue("url")}},douban:{shareUrl:"https://www.douban.com/share/service",params:{name:this.getValue("title"),href:this.getValue("url"),image:this.getValue("image")}},okru:{shareUrl:"https://connect.ok.ru/dk",
params:{"st.cmd":"WidgetSharePreview","st.shareUrl":this.getValue("url"),title:this.getValue("title")}},mailru:{shareUrl:"http://connect.mail.ru/share",params:{share_url:this.getValue("url"),linkname:this.getValue("title"),linknote:this.getValue("description"),type:"page"}}}[a])a.width=this.getValue("width"),a.height=this.getValue("height");return void 0!==a?this.urlSharer(a):!1},urlSharer:function(a){var b=a.params||{},d=Object.keys(b),f,h=0<d.length?"?":"";for(f=0;f<d.length;f++)"?"!==h&&(h+="&"),
b[d[f]]&&(h+=d[f]+"="+encodeURIComponent(b[d[f]]));a.shareUrl+=h;a.isLink?e.location.href=a.shareUrl:(b=a.width||600,d=a.height||480,a=e.open(a.shareUrl,"","scrollbars=no, width="+b+", height="+d+", top="+(e.innerHeight/2-d/2+e.screenY)+", left="+(e.innerWidth/2-b/2+e.screenX)),e.focus&&a.focus())}};"complete"===g.readyState||"loading"!==g.readyState?c.init():g.addEventListener("DOMContentLoaded",c.init);e.addEventListener("page:load",c.init);e.Sharer=c}(window,document));
</script>

*/  ?>