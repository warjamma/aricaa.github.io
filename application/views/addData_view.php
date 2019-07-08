


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
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Slides">Quản lý slide</a>
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
                                <h4 class="card-title">Quản lý slide</h4>
                                <br>
                                <div class="form-group">
                                    <!-- basic buttons -->
                                    <!-- <button type="button" class="btn btn-secondary btn-min-width mr-1 mb-1">Danh sách đã xác nhận</button>
                                    <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">Danh sách chưa xác nhận</button> -->
                                    <a href="<?php echo base_url() ?>do_edit" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-pencil"></i><span> Sửa slide</span></a>
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
										<div class="col-sm-6 push-sm-4">
										<h1 class="display-4   text-center">Thêm slide</h1>
																							<!--  Cái này dùng để upaload file MULTIPART NGHĨA LÀ TỪNG PHẦN MULTIDATA MỚI LÀ TOÀN PHẦN CHÚ Ý PHẢI CÓ PHẦN ENCTYPE-->
										
										</a>
										<form method="post" action="addSlide" enctype="multipart/form-data"> 

										
										  <div class="form-group">
										    <label for="formGroupExampleInput">Tiêu đề</label>
										    <input  name='title' type="text" class="form-control" id="title" placeholder="Nhập tiêu đề">
										  </div>
										  <div class="form-group">
										    <label for="formGroupExampleInput">Mô tả</label>
										    <input  name='description' type="text" class="form-control" id="description" placeholder="Mô tả">
										  </div>
										  <div class="form-group">
										    <label for="formGroupExampleInput2">Button link</label>
										    <input  name='button_link' type="text" class="form-control" id="button_link" placeholder="Link nút">
										  </div>
										  <div class="form-group">
										    <label for="formGroupExampleInput2">Button text</label>
										    <input  name='button_text' type="text" class="form-control" id="button_text" placeholder="Tên nút">
										  </div>
										  <div class="form-group">
										    <label for="formGroupExampleInput2">Uload image</label>
										    <input  name='slide_image' type="file" class="form-control" id="slide_image"  >
										  </div>
										   <div class="form-group">
										    <input    type="submit" class=" btn btn-outline-secondary" id="submit" value="Thêm mới!" >
										  </div>
										</form>
										</div>
									</div>
								</div>

								<div class="container nhap ">
									<div class="row">
										<div class="col-sm-3">
											<div>				
																<!-- Button to Open the Modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
											  Open modal
											</button>
											<!-- The Modal -->
											<div class="modal" id="myModal">
											  <div class="modal-dialog">
											    <div class="modal-content">
													
																<!-- noidung -->
												</div>		
												</div>
											    </div>
											  </div>
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