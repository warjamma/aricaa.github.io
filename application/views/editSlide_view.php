





<?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>
        <!-- ///////////////////////////////////////// -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-2">
                        <h3 class="content-header-title mb-0">Slide</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-xs-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Slides">Quản lý slide </a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="">Sửa slide</a>
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
                                <h4 class="card-title">Sửa slide</h4>
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
                           	<div class="container nhap ">
								<div class="row">
									<div class="col-sm-2">
										<div>
											
										</div>
									</div>
									<div class="col-sm-8 ">
										
									<h1 class="display-4   text-center">Sửa Slide</h1>
										<?php $diem=0; ?>												<!-- MULTIPART NGHĨA LÀ TỪNG PHẦN MULTIDATA MỚI LÀ TOÀN PHẦN CHÚ Ý PHẢI CÓ PHẦN ENCTYPE-->
								<form method="post" action="Slides/suaSlide" enctype="multipart/form-data">
							<!-- 		Dùng vòng lặp để lặp lại phần tử -->
								<?php foreach ($mangdl as $key  => $value): ?>
									<?php $diem++ ?>
									<hr>
									<h2>Slide số <?=$diem   ?></h2>
									<hr>

										<hr>
									  <div class="form-group">
									    <label for="formGroupExampleInput">Tiêu đề</label>
									    <!-- Chú ý cái dấu [] nhằm biến cái name thành cái mảng để có thể chứa dc nhiều phần tử -->
									    <input  name="title[]" type="text" class="form-control" id="title" value="<?= $value['title'] ?>">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput">Mô tả</label>
									    <input  name='description[]' type="text" class="form-control" id="description" value="<?= $value['description'] ?>">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput2">Button link</label>
									    <input  name='button_link[]' type="text" class="form-control" id="button_link" value="<?= $value['button_link'] ?>">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput2">Button text</label>
									    <input  name='button_text[]' type="text" class="form-control" id="button_text" value="<?= $value['button_text'] ?>">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput2">Uload image</label>
									    <img   width= "40%" src="<?= $value['slide_image'] ?>" alt="">
									     <input  name='slide_image_old[]' type="text" class="form-control" id="button_text" value="<?= $value['slide_image'] ?>">

									    <input   name="slide_image[]" type="file">
									  </div>
									<?php endforeach ?>
									<div class="form-group">
									    <input    type="submit" class=" btn btn-outline-secondary" id="submit" value="Lưu" >
									  </div>
									</form>
									</div>
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
    