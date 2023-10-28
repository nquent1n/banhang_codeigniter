<section id="product-detail">
	<div class="container">
		<div class="products-wrap">
			<form action="" method="post" id="ProductDetailsForm">
				<?php if($row):?>
					<div class="breadcrumbs">
						<ul>
							<li class="home">
								<a href="trang-chu" title="Go to Home Page">Trang chủ</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li class="category3">
								<a href="<?php echo base_url() ?>/san-pham/<?php $link=$this->Mcategory->category_link($row['catid']); echo $link; ?>" title=""><?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li class="product"><?php echo $row['name'] ?></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 listimg-desc-product">
						<?php $this->load->view('frontend/modules/jcarousel');?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="product-view-content">
							<div class="product-view-name">
								<h1><?php echo $row['name'] ?></h1>
							</div>
							<div class="product-view-price">
								<div class="pull-left">
									<span class="price-label">Giá bán:</span>
									<span class="price"><?php echo number_format($row['price_sale'])?>₫</span>
								</div>
								<?php if($row['price_sale']>0 && $row['sale']>0): ?>
									<div class="product-view-price-old">
										<span class="price"><?php echo $row['price'] ?>₫</span>
										<span class="sale-flag">-<?php echo $row['sale'] ?>%</span>
									</div>
								<?php endif; ?>
							</div>
							<div class="product-status">
								<p style=" float: left;margin-right: 10px;">Danh Mục: <?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></p>
								<p>| Tình trạng: <?php if($row['number'] - $row['number_buy']<=0 || $row['status'] == 0) echo "<b style='color:red;'>Hết hàng</b>"; else echo 'Còn hàng' ?></p>
							</div>
							<div class="product-view-desc">
								<h4>Mô tả:</h4>
								<p><?php echo $row['sortDesc'] ?></p>
							</div>
							<div class="actions-qty">
								<?php
								if($row['number'] - $row['number_buy']==0 || $row['status'] == 0){
									echo'<h2 style="color:red;">Hết Hàng</h2>';
								} else{ ?>
									<div class="actions-qty__button">
										<button class="button btn-cart add_to_cart_detail detail-button" id="add" title="Mua ngay" type="button" aria-label="Mua ngay" class="fa fa-shopping-cart" onclick="onAddCart(<?php echo $row['id'] ?>)"> Mua ngay</button>
									</div>
								<?php
									}
								?>
							</div>
							<!-- <div class="fk-boxs" id="km-all" data-comt="False">
								<div id="km-detail">
									<p class="fk-tit">Khuyến mại đặc biệt (SL có hạn)</p>
									<div class="fk-main">
										<div class="fk-sales">
											</ul>
											<ul>
												<li>Tặng PMH Phụ Kiện 2,000,000đ (khi phiếu mua hàng trên 100,000,000 đ)</li>
											</ul>
											<ul>
												<li>Tặng Flip Cover chính hãng Samsung (Áp dụng đến 26/05) <a href="#" target="_blank">Xem chi tiết</a>
												</li>
											</ul>
											<ul>
												<li>Giảm thêm 900,000đ khi mua combo sức khỏe - thời trang (Điện thoại + Samsung Watch + Samsung Buds) <a href="#" target="_blank">Xem chi tiết</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div style="margin-top: 20px;">
								<b>Tình trạng</b>
								<br>
								<span>Nguyên hộp. Đầy đủ phụ kiện từ nhà sản xuất, gồm: Sạc, cáp, tai nghe, que lấy SIM, sách hướng dẫn</span>
							</div>
							<div style="margin-top: 20px;">
								<b>Bảo hành</b>
								<br>
								<span>Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất.</span><a href="#" style="color:red"> (Chi tiết)</a>
							</div> -->
							<div class="share" style="padding-top: 8px;">
								<span class='st_facebook_hcount' displayText='Facebook'></span>
								<span class='st_twitter_hcount' displayText='Tweet'></span>
								<span class='st_googleplus_hcount' displayText='Google +'></span>
								<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
								<script type="text/javascript">stLight.options({publisher: "71bbd720-bb71-4ba5-93e5-81ec93d19019", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>
							</div>
						</div>
					</div>
					<div class="product-v-desc col-md-10 col-12 col-xs-12">
						<h3>Đặc điểm nổi bật</h3>
						<?php echo $row['detail']?>
					</div>
					<div class="product-comment product-v-desc">
						<h3>Bình luận</h3>
						<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
						<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=1113061572908893&autoLogAppEvents=1" nonce="PKcjKVSR"></script>
<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="1"></div>
							<div class="fb-comments" data-href="<?php echo base_url() ?><?php echo $row['alias'] ?>" data-numposts="5"></div>
						</div>
					</div>
					<div class="product-comment product-v-desc product">
						<h3>Sản phẩm liên quan</h3>
						<?php
						$list_spcungloai = $this->Mproduct->product_cungloai($row['catid'], $row['id'], 5);?>
						<?php 
						if(count($list_spcungloai)>0):?>
							<div class="product-container">
								<div class="owl-carousel-product owl-carousel owl-theme">
									<?php foreach ($list_spcungloai as $sp) :?>
										<div class="item">
											<div class="product-lt">
												<div class="lt-product-group-image">
													<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
														<img class="img-p"src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
													</a>

													<?php if($sp['sale'] > 0) :?>
														<div class="giam-percent">
															<span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
														</div>
													<?php endif; ?>
												</div>

												<div class="lt-product-group-info">
													<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" style="text-align: left;">
														<h3><?php echo $sp['name'] ?></h3>
													</a>
													<div class="price-box">
														<?php if($sp['sale'] > 0) :?>

															<p class="old-price">
																<span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
															</p>
															<p class="special-price">
																<span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
															</p>
															<?php else: ?>
																<p class="old-price">
																	<span class="price" style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
																</p>
																<p class="special-price">
																	<span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
																</p>
															<?php endif;?>
														</div>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
									<?php else: ?>
										<h4>Chưa có sản phẩm cùng loại</h4>
									<?php endif; ?>
								</div>
							<?php endif; ?>	
						</form>

					</div>
				</div>
			</section>
			<script>

				function onAddCart(id){
					var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
					jQuery.ajax({
						url: strurl,
						type: 'POST',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							document.location.reload(true);
							alert('Thêm sản phẩm vào giỏ hàng thành công !');
						}
					});
				}

				$('#add').click(function(){
					document.location.reload(true);
					alert('Thêm sản phẩm vào giỏ hàng thành công !');
				});

				
			</script>