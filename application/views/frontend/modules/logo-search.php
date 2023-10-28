<section class="logo-search">
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 logo">
      <a href="<?php echo base_url() ?>"><img  width=100 src="<?php echo base_url() ?>public/images/logo.png" alt="Logo Construction"></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 search">
      <div class="contact-row">
        <div class="phone inline">
          <i class="icon fa fa-phone"></i>  <a href="tel:0123456789">0123456789</a>
        </div>
        <div class="contact inline">
          <i class="icon fa fa-envelope"></i> <a href="mailto:spktvl@vlute.edu.vn">spktvl@vlute.edu.vn</a>
        </div>
      </div>
      
      <form action="search" method="get" role="form">
        <div class="input-search">
          <input type="text" class="form-control" id="search_text" name="search" placeholder="Nhập từ khóa để tìm kiếm...">
          <button style="background-color:red;">
              <i class="fa fa-search" ></i>
            </button>
          </div>
        </form>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs" style="padding: 24px;">
       <!-- Cart -->
       <div class="cart_header">
        <a href="gio-hang" title="Giỏ hàng">
         <span class="cart_header_icon">
          <img src="<?php echo base_url() ?>public/images/cart2.png" alt="Cart">
        </span>
        <span class="box_text">
          <strong class="cart_header_count">Giỏ hàng <span>(<?php  
           if($this->session->userdata('cart')){
            $val = $this->session->userdata('cart');
            echo count($val);
          }else{
            echo 0;
          }
          ?>)</span></strong>
          <span class="cart_price">
            <?php if($this->session->userdata('cart')):
              $cart=$this->session->userdata('cart');
              $money=0;
              foreach ($cart as $key => $value) :
                $row = $this->Mproduct->product_detail_id($key);?>
                <?php 
                $total=0;
                if($row['price_sale'] > 0){
                  $total=$row['price_sale']*$value;
                }else{
                  $total=$row['price'] * $value;
                }
                $money+=$total;
                ?>
              <?php endforeach; ?>
              <?php echo number_format($money).' VNĐ';?>
              <?php else : ?>
                <p>0 VNĐ</p>
              <?php endif; ?>
            </span>
          </span>
        </a>
        <div class="cart_clone_box">
          <div class="cart_box_wrap hidden">
           <div class="cart_item original clearfix">
            <div class="cart_item_image">
            </div>
            <div class="cart_item_info">
             <p class="cart_item_title"><a href="" title=""></a></p>
             <span class="cart_item_quantity"></span>
             <span class="cart_item_price"></span>
             <span class="remove"></span>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- End Cart -->
   <!-- Account -->
   <div class="user_login">
     <a href="thong-tin-khach-hang" title="Tài khoản">
      <div class="user_login_icon">
       <img src="<?php echo base_url() ?>public/images/user.png" alt="Cart">
     </div>
     <div class="box_text">
       <strong>Tài khoản</strong>
       <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
     </div>
   </a>
 </div>
</div>
</div>
</section>
