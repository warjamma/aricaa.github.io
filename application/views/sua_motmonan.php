







<?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>
        <!-- ///////////////////////////////////////// -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-2">
                        <h3 class="content-header-title mb-0">Món ăn</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-xs-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>monan/quanlymonan ">Quản lý món ăn </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="">Sửa món ăn </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right text-md-right col-md-6 col-xs-12">
                        <div class="form-group"> 
                            <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="ft-bell"></i></button>
                            <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="ft-life-buoy"></i></button>
                            <button type="button" class="btn-icon btn btn-secondary btn-round"><i class="ft-settings"></i></button>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- Basic form layout section start -->
                    <section id="basic-form-layouts">
                         <div class="col-xs-12">
	                        <div class="card">
	                            <div class="card-header">
	                                <h4 class="card-title">Sửa món ăn</h4>
	                                <br>
	                                <div class="form-group">
	                                    <!-- basic buttons -->
	                                </div>
	                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
	                                <div class="heading-elements">
	                                    <ul class="list-inline mb-0">
	                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
	                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
	                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
	                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="container-fluid">
								<div class="row">
									<div class="col-sm-6 push-sm-3">
										<div class="jumbotron">
										  <h1 class="display-6">Sửa món ăn</h1>
										  <p class="lead">Sửa nội dung dung món ăn</p>
										</div>


											
										
										<form action="<?php echo base_url() ?>monan/luumonan" method="post" enctype="multipart/form-data">
										     <!--  <h2 for="inputEmail4" class="display-4 ">Thêm danh mục</h2> -->

										     <?php foreach ($mangdl as $value): ?>
										      <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
										      <fieldset>
										      		<label>Tiêu đề món ăn</label>
										      		<input type="text" name="tieudemonan" class="form-control" id="inputEmail4" value="<?php echo $value['tieudemonan'] ?>">
										      </fieldset>
										      <fieldset>
										      		<label>Trích dẫn tin</label>
										      		<input type="text" name="gia" class="form-control" id="inputEmail4" value="<?php echo $value['gia'] ?>">
										      </fieldset>

										      <fieldset>
										      		<label>Tình trạng</label><br>
										      		<input type="text" name="new" class="form-control" id="inputEmail4" value="<?php echo $value['new'] ?>">
										      </fieldset>

										      <fieldset>
										      		<label>Ảnh tin</label>
										      		<img  width="40%"src="<?php echo $value['anhmon'] ?>" alt="">
										      		<input type="hidden" name='anhmoncu' class="form-control" id="inputEmail4" value="<?= $value['anhmon'] ?>">
										      		<input   name="anhmon" type="file">
										      </fieldset>
										       
										      <fieldset>
										      		<label>Món ăn thuộc buổi</label>
										      		<select class="form-control" name="idbuoian">
										      		<?php foreach ($mangbuoian as $buoi): ?>
											      	<option  value="<?= $buoi['id'] ?>" <?php if($tenbuoian==$buoi['tenbuoian']){ echo 'selected';}  ?> > <?= $buoi['tenbuoian'] ?></option>
											      	<?php endforeach ?>
											      	</select>
										      </fieldset>
										      
										     <fieldset class="form-group">
										      		<label class="">mota</label>
										      		<textarea name="mota" id="mota" class="mota form-control" value="<?= $value['mota'] ?>">
										      			<?= $value['mota'] ?>
										      		</textarea>
										      </fieldset>
										      <?php endforeach ?>
										      
										    
										  <br>
										  <input type="submit" class="btn btn-primary" value="Lưu tin">
										</form>


									</div> <!-- END COT TRAI -->
											</div>
							</div>
                    </section>
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>
    <?php   require_once __DIR__ . '/footer_admin.php'; ?>
    