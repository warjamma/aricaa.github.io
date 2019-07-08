





<?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>
        <!-- ///////////////////////////////////////// -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-2">
                        <h3 class="content-header-title mb-0">Tin tức</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-xs-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/quanlytin ">Quản lý tin </a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Sửa tin</a>
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
                                <h4 class="card-title">Sửa tin</h4>
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
								<div class="col-sm-8 push-sm-2">
									<div class="jumbotron">
									  <h1 class="display-6">Sửa nội dung tin</h1>
									  <p class="lead">Sửa nội dung tin tin</p>
									</div>
									<form action="<?php echo base_url() ?>tin/luutin" method="post" enctype="multipart/form-data">
									     <!--  <h2 for="inputEmail4" class="display-4 ">Thêm danh mục</h2> -->

									     <?php foreach ($dulieutin as $value): ?>
									      <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
									      <fieldset>
									      		<label>Tiêu đề tin</label>
									      		<input type="text" name="tieude" class="form-control" id="inputEmail4" value="<?php echo $value['tieude'] ?>">
									      </fieldset>
									      <fieldset>
									      		<label>Trích dẫn tin</label>
									      		<input type="text" name="trichdan" class="form-control" id="inputEmail4" value="<?php echo $value['trichdan'] ?>">
									      </fieldset>
									      <fieldset>
									      		<label>Ảnh tin</label>
									      		<img  width="40%"src="<?php echo $value['anhtin'] ?>" alt="">
									      		<input type="hidden" name='anhtincu' class="form-control" id="inputEmail4" value="<?= $value['anhtin'] ?>">
									      		<input   name="anhtin" type="file">
									      </fieldset>
									      <fieldset>
									      		<label>Danh muc tin</label>
									      		<select class="form-control" name="iddanhmuc">
									      		<?php foreach ($mangdanhmuctin as $k): ?>
                                                    <option value="<?php echo $k['id'] ?>" <?php if($k['tendanhmuc']==$dulieudanhmuc){ echo 'selected';} ?>> <?= $k['tendanhmuc'] ?></option>
                                                <?php endforeach ?>
										      </select>
									      </fieldset>
									      <fieldset class="form-group">
									      		<label class="">Nội dung tin</label>
									      		<textarea name="noidungtin" id="noidungtin" class="noidungtin form-control" value="<?php echo $value['noidungtin'] ?>">
									      			<?php echo $value['noidungtin'] ?>
									      			
									      		</textarea>
									      </fieldset>
									      <?php endforeach ?>
									      
									    
									  <br>
									  <input type="submit" class="btn btn-primary" value="Lưu tin">
									</form>


								</div> <!-- END COT TRAI -->
										</div>
						</div>
                        </div>
                    </div>
                    </section>
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>
    <?php   require_once __DIR__ . '/footer_admin.php'; ?>
    