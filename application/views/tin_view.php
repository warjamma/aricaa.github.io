






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
                                <h4 class="card-title">Quản lý tin</h4>
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
                            <div class="container">
							<div class="row">
								<!-- <div class="col-sm-2"></div> -->
								<div class="col-sm-6 ">
									<div class="jumbotron">
									  <h1 class="display-4">Thêm mới tin</h1>
									  <p class="lead">Thêm mới tin</p>
									</div>
									<form action="<?php echo base_url() ?>tin/themmottin" method="post" enctype="multipart/form-data">
									     <!--  <h2 for="inputEmail4" class="display-4 ">Thêm danh mục</h2> -->
									     
									      <fieldset>
									      		<label>Tiêu đề tin</label>
									      		<input type="text" name="tieude" class="form-control" id="inputEmail4" placeholder="Tên danh mục">
									      </fieldset>
									      <fieldset>
									      		<label>Trích dẫn tin</label>
									      		<input type="text" name="trichdan" class="form-control" id="inputEmail4" placeholder="Trích dẫn tin">
									      </fieldset>
									      <fieldset>
									      		<label>Ảnh tin</label>
									      		<input type="file" name="anhtin" class="form-control" id="inputEmail4" placeholder="Ảnh tin">
									      </fieldset>
									      <fieldset>
									      		<label>Danh muc tin</label>
									      		<select class="form-control" name="iddanhmuc">
									      		<?php foreach ($dulieudanhmuc as $value): ?>
										      	<option value="<?= $value['id'] ?>" ><?= $value['tendanhmuc'] ?></option>
										      	<?php endforeach ?>
										      </select>
									      </fieldset>
									      <fieldset class="form-group">
									      		<label class="">Nội dung tin</label>
									      		<textarea name="noidungtin" id="noidungtin" class="noidungtin form-control">				      			
									      		</textarea>
									      </fieldset>

									  <br>
									  <input type="submit" class="btn btn-primary" value="Thêm danh mục">
									</form>
								</div> <!-- END COT TRAI -->
								<div class="col-sm-6">
									<div class="jumbotron">
									  <h1 class="display-4">Danh sách tin</h1>
									  <p class="lead">Danh sach tin</p>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<?php foreach ($dulieutin as $value): ?>
									 <div class="thaotac text-xs-right">
									    	<a href="<?php echo base_url() ?>tin/sua_tin/<?= $value['id'] ?>" class="nutedit btn btn-danger"><i class="fa fa-pencil"></i></a>
									    	<a href="<?php echo base_url() ?>tin/xoa_tin/<?= $value['id'] ?>" class="nutedit btn btn-warning"><i class="fa fa-remove"></i></a>

									    	</div>
									    	<div class="card" style="width: 18rem;">
									    	  <img width="50%" src="<?= $value['anhtin'] ?>" class="card-img-top" alt="...">
									    	  <div class="card-body">
									    	    <h4 class="card-text"><?= $value['tieude']; ?></h4>
									    	    <p class="card-text"><?= $value['trichdan']; ?></p>
									    	    <!-- <p class="card-text"><?= $value['noidungtin']; ?></p> -->
									    	    <p class="card-text">Ngày tạo: <?= date('d/m/Y',$value['ngaytao']); ?></p>
									    	  </div>
									    	</div>

									<?php endforeach ?>
										</div>
									</div>
								</div> <!-- END COT PHAI -->
							</div>
						</div>
						<!-- 	<script>
							CKEDITOR.replace( 'noidungtin');
						 		CKEDITOR.replace( 'noidungtin', {
							    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
							    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
								});
						</script>
					</body>
					</html> -->
                        </div>
                    </div>
                    </section>
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>
    <?php   require_once __DIR__ . '/footer_admin.php'; ?>