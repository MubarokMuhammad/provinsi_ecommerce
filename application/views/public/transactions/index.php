<style type="text/css">
.swal-text {
    color: red;
    font-weight: bold;
    font-size: 18px;
}
.swal-button {
    background-color: red;
    font-weight: bold;
}
</style>
<script type="text/javascript">
function validateForm() {
    var no_transaksi = document.forms["myForm"]["billing_id"].value;
    var email = document.forms["myForm"]["email"].value;
    if (no_transaksi == "") {
        swal({
          text: "No Transaksi Belum Diisi",
          icon: "warning",
          button: "OK",
        });
        return false;
    }else if (email == "") {
        swal({
          text: "Email Pembeli Belum Diisi",
          icon: "warning",
          button: "OK",
        });
        return false;
    }
}
</script>
<div class="background-img">
<div class="container padding-bottom">
	<div class="row">
		<div class="row">
            <div class="col-sm-3 col-md-2">
                <!-- Block vertical-menu -->
                <div class="block block-vertical-menu">
                    <a href="<?=site_url('web/location/categories')?>">
                        <div class="vertical-head">
                            <h5 class="vertical-title">Kategori <span class="pull-right"><i class="fa fa-bars"></i></span></h5>
                        </div>
                    </a>
                    <div class="vertical-menu-content">
                        <ul class="vertical-menu-list">
                            <?php foreach ($list_category_rand as $data): ?>
                            <li>
                                <a href="<?=site_url('gridview/index/1/0/'.$data['category_id'])?>" class="background-font text-short" title="<?=$data['category_nm']?>"><i class="icon-category fa fa-check"></i><img class="icon-menu" src="<?=base_url()?>assets/images/icon/bg-<?=rand(1,14)?>.png"><?=$data['category_nm']?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!-- ./Block vertical-menu -->
            </div>
            <div class="col-sm-9 col-md-10" style="margin-top: 22px;">
                <div class="panel panel-primary">
                    <div class="panel-heading bold">Cek Transaksi</div>
                    <div class="panel-body">
                        <form action="<?=$form_action?>" method="post" enctype="multipart/form-data" id="form-validate" name="myForm" onsubmit="return validateForm()">  
                        <table width="100%" class="table-no-border">
                            <div class="alert alert-green   ">
                                <i class="fa fa-warning"></i> Cek Transaksi berdasarkan No Transaksi & Email Pembeli
                            </div>
                            <tr>
                                <td width="18%"><div class="span10">No Transaksi</div></td>
                                <td width="82%">
                                    <div class="span4">
                                        <input type="text" name="billing_id" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="18%"><div class="span10">Email Pembeli</div></td>
                                <td width="82%">
                                    <div class="span4">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-primary bold" type="submit"><i class="fa fa-search"></i> Cek Transaksi</button>
                        </form>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
</div>


