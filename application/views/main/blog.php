
		<main>
			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url(https://via.placeholder.com/1920x300);">
				<div class="container">
					<div class="row">
						<div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
							<h1 class="headingIV fwEbold playfair mb-4">Blog</h1>
							<ul class="list-unstyled breadCrumbs d-flex justify-content-center">
								<li class="mr-2"><a href="index.php">Home</a></li>
								<li class="mr-2">/</li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- twoColumns -->
			<div class="twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4">
				<div class="row">
					<div class="col-12 col-lg-9 order-lg-3">
						<!-- content -->
						<article id="content">
                            <?php if(empty($list)): ?>
                                <p>The list of posts is empty</p>
                            <?php else: ?>
                                <?php foreach($list as $data): ?>
                                    <div class="newsBlogColumn mb-md-9 mb-6">
                                        <div class="imgHolder position-relative mb-6">
                                            <form class="edit-image">

                                                <img style='display:block; width:100px;height:100px;' src="../../../../public/materials/<?php echo $data['id']; ?>.jpg" alt="img" >

                                            </form>
                                        </div>
                                        <div class="textHolder d-flex align-items-start">
                                            <time class="time text-center text-uppercase py-sm-3 py-1 px-1" datetime="2019-02-03 20:00"> <strong class="fwEbold d-block mb-1">20</strong> Sep</time>
                                            <div class="alignLeft pl-sm-6 pl-3">
                                                <h2 class="headingV fwEbold mb-2"><a href="/blog/post/<?php echo $data['id']; ?>"><?php echo htmlspecialchars($data['name'], ENT_QUOTES) ?></a></h2>
                                                <span class="postBy d-block pb-sm-6 pb-2 mb-3">Post by: <a href="post.php">Jane doe</a></span>
                                                <p class="mb-0"><?php echo htmlspecialchars($data['description'], ENT_QUOTES) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

							<div class="col-12 mb-sm-0 mb-6">
                                <?php echo $pagination; ?>
							</div>
						</article>
					</div>
					<div class="col-12 col-lg-3 order-lg-1">
						<!-- sidebar -->
						<aside id="sidebar">
							<!-- widget -->
							<section class="widget overflow-hidden mb-md-9 mb-6">
								<h3 class="headingVII fwEbold text-uppercase mb-4">Search</h3>
								<form action="javascript:void(0);" class="searchForm position-relative border">
									<fieldset>
										<input type="search" class="form-control" placeholder="Search product...">
										<button class="position-absolute"><i class="icon-search"></i></button>
									</fieldset>
								</form>
							</section>
							<!-- widget -->
							<section class="widget overflow-hidden mb-md-9 mb-6">
								<h3 class="headingVII fwEbold text-uppercase mb-2">RECENT POSTS</h3>
								<ul class="list-unstyled recentPostList mb-0">
									<li><a href="javascript:void(0);" class="py-2 d-block">Blog image post</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Post with Gallery</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Post with Audio</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Post with Video</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Maecenas ultricies</a></li>
								</ul>
							</section>
							<!-- widget -->
							<section class="widget overflow-hidden mb-md-9 mb-6">
								<h3 class="headingVII fwEbold text-uppercase mb-2">RECENT COMMENTS</h3>
								<ul class="list-unstyled recentPostList mb-0">
									<li><a href="javascript:void(0);" class="py-2 d-block">Admin on Vivamus blandit</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Admin on Vivamus blandit</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Admin on Vivamus blandit</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Admin on Vivamus blandit</a></li>
									<li><a href="javascript:void(0);" class="py-2 d-block">Admin on Vivamus blandit</a></li>
								</ul>
							</section>
							<!-- widget -->
							<section class="widget overflow-hidden mb-md-6 mb-3">
								<h3 class="headingVII fwEbold text-uppercase mb-4">ARCHIVES</h3>
								<ul class="list-unstyled archiveList mb-0">
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">March 2018</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">December 2018</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">November 2018</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">September 2018</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">August 2018</a></li>
								</ul>
							</section>
							<!-- widget -->
							<section class="widget overflow-hidden mb-md-5 mb-3">
								<h3 class="headingVII fwEbold text-uppercase mb-4">CATEGORIES</h3>
								<ul class="list-unstyled archiveList mb-0">
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Creative</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Fashion</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Image</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Photography</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Travel</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Videos</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">WordPress</a></li>
								</ul>
							</section>
							<!-- widget -->
							<section class="widget overflow-hidden mb-md-9 mb-6">
								<h3 class="headingVII fwEbold text-uppercase mb-4">META</h3>
								<ul class="list-unstyled archiveList mb-0">
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Log in</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Entries RSS</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">Comments RSS</a></li>
									<li class="mb-3"><a href="javascript:void(0);" class="d-block">WordPress.org</a></li>
								</ul>
							</section>
						</aside>
					</div>
				</div>
			</div>
			<div class="container mb-lg-24 mb-md-16 mb-10">
				<!-- subscribeSecBlock -->
				<section class="subscribeSecBlock bgCover col-12 pt-lg-24 pb-lg-12 pt-md-16 pb-md-8 py-10" style="background-image: url(https://via.placeholder.com/1170x465)">
					<header class="col-12 mainHeader mb-9 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Subscribe Our Newsletter</h1>
						<span class="headerBorder d-block mb-5"><img src="../../../public/images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
						<p class="mb-6">Enter Your email address to join our mailing list and keep yourself update</p>
					</header>
					<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
						<input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
						<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></button>
					</form>
				</section>
			</div>
			<!-- footerHolder -->
			<aside class="footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
							<ul class="list-unstyled footerContactList mb-3">
								<li class="mb-3 d-flex flex-nowrap pr-xl-20 pr-0"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Address: London Oxford Street, 012 United Kingdom.</address></li>
								<li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : <a href="javascript:void(0);">(+032) 3456 7890</a></span></li>
								<li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email:  <a href="javascript:void(0);">Botanicalstore@gmail.com</a></span></li>
							</ul>
							<ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
								<li class="fwEbold mr-xl-11 mr-md-8 mr-3">Follow  us:</li>
								<li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
								<li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
								<li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
								<li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
							<ul class="list-unstyled footerNavList">
								<li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Our Blog</a></li>
								<li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
								<li><a href="javascript:void(0);">Privacy policy</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-7">My Account</h3>
							<ul class="list-unstyled footerNavList">
								<li class="mb-1"><a href="javascript:void(0);">My account</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
								<li><a href="javascript:void(0);">Personal information</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-5">PRODUCTS</h3>
							<ul class="list-unstyled footerNavList">
								<li class="mb-2"><a href="javascript:void(0);">Delivery</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Legal notice</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Prices drop</a></li>
								<li class="mb-2"><a href="javascript:void(0);">New products</a></li>
								<li><a href="javascript:void(0);">Best sales</a></li>
							</ul>
						</div>
					</div>
				</div>
			</aside>
		</main>

