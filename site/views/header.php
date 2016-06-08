<!doctype html>
<html>
     <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="<?php echo URL_SITE; ?>public/images/favicon.ico"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/bootstrap.min.theme.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/style-global.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/product-detail.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/slicebox.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_SITE; ?>public/css/js-image-slider.css">

        <script type="text/javascript" src="<?php echo URL_SITE;?>public/js/js-image-slider.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>public/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>public/js/modernizr.custom.46884.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>/public/js/slicebox-customs.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>/public/js/jquery.slicebox.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>/public/js/js-live-search.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>/public/js/js-login.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>/public/js/js-customer-order.js"></script>
        <script type="text/javascript" src="<?php echo URL_SITE; ?>/public/js/bootstrap-valadation.js"></script>
        <title><?php echo strtoupper(TITLE_SITE); ?></title>
    </head>
  <body>
    	<div id="wapper_container" class="container-fluid">
        <div id="wapper_header">
               <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand text-uppercase" href="<?php echo URL_SITE; ?>"><?php echo TITLE_SITE;?></a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                    
                      <ul class="nav navbar-nav">
                        <?php foreach($this->listGroup as $key => $value): ?>
                        	<li class="divider">
                            <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="<?php echo URL_SITE; ?>product/<?php echo $value->gruop_url;?>"><?php echo $value->gruop_url . ' '; ?><span class="caret"> </span></a>
                          <?php $group_name = $value->gruop_url; ?>
                            <ul class="dropdown-menu">
                              <?php foreach($this->listTradeMarkGroup as $key => $value): ?>
                                <?php if($group_name == $value->gruop_url): ?>
                                <li>
                                  <a class="text-uppercase" href="<?php echo URL_SITE?>product/<?php echo $value->gruop_url; ?>/<?php echo $value->trademark_url;?>"><?php echo $value->trademark_name; ?></a>
                                </li>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </ul>
                          </li>
                          <?php endforeach; ?>
                        </li>
                        
                      </ul>
                      <?php include_once 'login.php'; ?>
                    
                      

                      
                      <ul class="nav navbar-nav navbar-right container-fluid">
                        <li>
                          <form class="navbar-form " role="search" method="post">
                          <div class="right-inner-addon">
                            <span class=" glyphicon glyphicon-search"></span>
                             <input class="search form-control" type="search" autocomplete="off" placeholder="Nhập thông tin tìm kiếm" onkeyup="liveSearch()">
                          </div>
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
          </div>

      