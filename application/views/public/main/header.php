<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/reset.css" /> -->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/font-awesome/css/font-awesome-animation.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/global.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/option2.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/focus-box.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lib/easyzoom/easyzoom.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pace.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/chosen.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Javascript -->
    <script src="<?=base_url()?>assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/lib/jquery/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/autonumeric.js"></script>
    <?php if(@$ses_login == '1'): ?>
    <script type="text/javascript">
    var base_url = '<?=base_url()?>';
    var ses_customer_chat_nm = '<?=$this->session->userdata("ses_customer_chat_nm")?>';
    </script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/chat.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/chat.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/screen.css">
    <?php endif;?>
    <script type="text/javascript">
    $(document).ready(function(){
        //Chosen
      $(".select-chosen, .productChosen").chosen({});
      //Logic
      $(".select-chosen").change(function(){
        if($(".select-chosen option:selected").val()=="no"){
          $(".productChosen option[value='2']").attr('disabled',true).trigger("chosen:updated");
          $(".productChosen option[value='1']").removeAttr('disabled',true).trigger("chosen:updated");
        } else {
          $(".productChosen option[value='1']").attr('disabled',true).trigger("chosen:updated");
          $(".productChosen option[value='2']").removeAttr('disabled',true).trigger("chosen:updated");
        }
      })
    })
    </script>
    <title><?=$config['config']['app_title']?></title>
</head>
<body class="option2">

    <!-- header -->
    <header id="header">
        <div class="container">
            <!-- main header -->
            <div class="row">
                <div class="main-header">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                            <a href="<?=site_url('web/location/')?>">
                                <div class="logo-website">
                                    <img src="<?=base_url()?>assets/images/logo/logo.png" alt="Logo" class="img-logo">
                                    <div class="text-logo-top">WEBSITE JUAL BELI IKAN</div>
                                    <div class="garis"></div>
                                    <div class="text-logo-bottom">DINAS KELAUTAN PROVINSI JAWA TENGAH</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 search-form">
                            <form method="post" action="<?=site_url('search/search/')?>">
                                <input type="text" name="ses_search" value="<?=@$ses_search?>" placeholder="Cari Ikan/Barang..">
                                <button type="submit" class="hide"></button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-9 col-sm-12 col-xs-12 main-header-banner">
                            <div class="block block-header-right">
                                <ul class="list-link">
                                    <?php if(@$ses_login == '1'): ?>
                                    <li class="item li-img-user-header">
                                        <a href="<?=site_url('web/location/profile')?>" title="<?=$config['profile']['customer_nm']?>">
                                            <span class="span-img-user-header">
                                                <?php if (@$config['profile']['customer_img'] !=''): ?>
                                                    <img src="<?=base_url()?>assets/images/customer/<?=$config['profile']['customer_img']?>" class="img-circle img-user-header">
                                                <?php else: ?>
                                                    <img src="<?=base_url()?>assets/images/icon/no-customer-img.jpg" class="img-circle img-user-header">
                                                <?php endif; ?>
                                            </span>
                                            <span class="line1 line-img-user-header">Selamat Datang<br><strong class="text-short"><?=$config['profile']['customer_nm']?></strong></span>
                                        </a>
                                    </li>
                                    <?php else: ?>
                                    <li class="item">
                                        <a href="<?=site_url('web/location/login')?>">
                                            <span class="icon icon-header"><i class="fa fa-lock fa-2x"></i></span>
                                            <span class="line1">Login<br><strong>Masuk atau Daftar</strong></span>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                                    <li class="item item-cart block-wrap-cart" id="show_cart">
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./main header -->
        </div>