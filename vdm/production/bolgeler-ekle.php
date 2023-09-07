<?php 
include 'header.php';
include '../vst/baglan.php';

$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<head>

  <script src="https://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

</head>

<!-- page content --> 
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3 style="color: #73879C;"><b>Hizmet Bölgeleri İşlemleri</b></h3>
      </div>

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Sözcüğü" style="font-weight: bold;">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button" style="font-weight: bold; color: #F0AD4E;">Ara!</button>
                    </span>
                  </div>
                </div>
              </div>-->
              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" style="">
                <div class="x_panel" style="background-color: #D9DEE4; border-radius: 30px; text-align: center;">
                  <div class="x_title">
                    <h2 style="color: #73879C; text-align: left;">Hizmet Bölgeleri Ekle<small><?php
                    if ($_GET['durum']=='✓') {?> 

                      <b style="color: #1ABB9C;">Güncelleme Başarılı!</b>

                    <?php } elseif ($_GET['durum']=='X') {?>

                      <b style="color: #BA1414;">Güncelleme Başarısız!</b>

                      <?php } ?></small> </h2>
                      <ul class="nav navbar-right panel_toolbox">

                        <div align="right" class="col-md-6">
                          <a href="bolgeler.php"> <button style="display: flex; justify-content: center; border-radius: 20px;" class="btn btn-warning"><i class="fa fa-undo" aria-hidden="true"> Geri Dön</i></button></a>
                        </div>

                      </ul>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                      <form action="../vst/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" style="margin: auto; width: 111%;">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="text-align: center; color: #F0AD4E;">Resim Seç <span class="required">*</span>
                          </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="first-name" required="required"
                            name="bolgeler_resimyol" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <hr>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="text-align: center; color: #F0AD4E;">Hizmet Bölgeleri Adı <span class="required">*</span>
                          </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input style="border-radius: 20px;" type="text" id="first-name" required="required"
                            name="bolgeler_ad" placeholder="Hizmet bolgelerı Adını Giriniz..." class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                        <hr>

                        <div class="form-group" style="display: flex; align-items: center;">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="text-align: center; color: #F0AD4E;"> Hizmet Bölgeleri <span class="required">*</span>
                          </label>

                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea  class="ckeditor" id="editor1" name="bolgeler_detay"></textarea>
                          </div>
                        </div>

                        <script type="text/javascript">

                         CKEDITOR.replace( 'editor1',
                         {
                          filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                          filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                          filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                          filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                          filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                          filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                          forcePasteAsPlainText: true
                        } 
                        );

                      </script>

                      <hr>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="text-align: center; color: #F0AD4E;">Hizmet Bölgeleri Durum <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select style="border-radius: 20px;" id="heard" class="form-control" name="bolgeler_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                          </select>
                        </div>
                      </div>

                      <hr>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                        <button type="submit" name="bolgelerkaydet" class="btn btn-warning" style="color: #FFFFFF; border-radius: 20px;"> Kaydet </button>

                      </div>

                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php include 'footer.php'; ?>