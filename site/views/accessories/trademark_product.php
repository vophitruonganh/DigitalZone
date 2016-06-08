 <div id="wapper-main">
          <div id="group-product-title" class="navbar navbar-default">
            <?php foreach($this->listProduct as $key=>$value): ?>
            <div class="navbar-brand text-uppercase"><?php echo $value->gruop_url . " - " . $value->trademark_url; break;?>
            <?php endforeach; ?> 
          </div>
        </div>
        <div class="row ">
           <?php foreach($this->listProduct as $key=>$value): ?>
              <div class="col-lg-3">
                <div class="subitem">
                  <a href="<?php echo URL_SITE; ?>product/<?php echo $value->gruop_url .'/'. $value->trademark_url .'/'. strtolower($value->product_url); ?>">
                      <img class="img-responsive img-resize" src="<?php echo URL_SITE; ?>public/images/product/<?php echo $value->product_avata; ?>" alt="" class="avata-product"/>
                  </a>

                  <h3 class="text-center text-uppercase title">
                      <a class=" text-info" href="/product/<?php echo $value->gruop_url .'/'. $value->trademark_url .'/'. strtolower($value->product_url); ?>">
                      <?php echo substr($value->product_name,0,35);?>
                      </a>
                  </h3>
                  <h4 class="subitem-price text-uppercase text-center"><?php echo number_format($value->product_price).' VND'?></h4>
                  <small class="info-products">During the early days of SSDs ,During the early days of SSDs During the early days of SSDs During the early days of SSDs .</small>
                  
                  

                   <div class="btn-group">
                    <a class="order-products-info btn btn-success" href="<?php echo URL_SITE; ?>product/<?php echo $value->gruop_url .'/'.$value->trademark_url.'/'. strtolower($value->product_url)."#order";?>">ĐẶT HÀNG</a>
                    <a class="more-products-info btn btn-danger" href="<?php echo URL_SITE; ?>product/<?php echo $value->gruop_url .'/'.$value->trademark_url.'/'. strtolower($value->product_url);?>">CHI TIẾT</a>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
