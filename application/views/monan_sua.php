





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
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>monan/quanlymonan ">Quản lý món ăn </a>
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
                                <h4 class="card-title">Quản lý món ăn</h4>
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
							        <div class="col-sm-6">
							            <div class="jumbotron">
							                <h1 class="display-4">Thêm mới món ăn</h1>
							                <p class="lead">Thêm món ăn</p>
							            </div>
							            <form action="<?php echo base_url() ?>monan/themmonan" method="post" enctype="multipart/form-data">
							                <!--  <h2 for="inputEmail4" class="display-4 ">Thêm danh mục</h2> -->
							                <fieldset>
							                    <label>Tiêu đề món ăn</label>
							                    <input type="text" name="tieudemonan" class="form-control" id="inputEmail4" placeholder="Tiêu đề món ăn">
							                </fieldset>
							                <fieldset>
							                    <label>Giá món ăn</label>
							                    <input type="number" name="gia" class="form-control" id="inputEmail4" placeholder="Giá món ăn">
							                </fieldset>
							                <fieldset>
							                    <label>Ảnh tin</label>
							                    <input type="file" name="anhmon" class="form-control" id="inputEmail4" placeholder="Ảnh món ăn">
							                </fieldset>
							                <fieldset>
							                    <label>Buổi</label>
							                    <select class="form-control" name="idbuoian">
							                        <?php echo $mangbuoian ?>
							                        <?php foreach ($mangbuoian as $value): ?>
							                        <option value="<?= $value['id'] ?>" ><?= $value['tenbuoian'] ?></option>
							                        <?php endforeach ?>
							                    </select>
							                </fieldset>
							                <fieldset class="form-group">
							                    <label class="">Mô tả món ăn</label>
							                    <textarea name="mota" id="mota" class="mota form-control">
							                    </textarea>
							                </fieldset>
							                <fieldset class="form-group">
							                    <label class="">Tình trạng món ăn</label>
							                    <input type="text" name="tinhtrang" class="form-control" id="inputEmail4" placeholder="Tình trạng">
							                </fieldset>
							                <br>
							                <input type="submit" class="btn btn-primary" value="Thêm danh mục">
							            </form>
							        </div>
							        <!-- END COT TRAI -->
							        <div class="col-sm-6">
							            <div class="jumbotron">
							                <h1 class="display-4">Danh sách món ăn</h1>
							                <p class="lead">Danh sach món</p>
							            </div>
							            <div class="row">
							                <div class="col-sm-12">
							                    <?php foreach ($mangmonan as $value): ?>
							                    <div class="thaotac text-xs-right">
							                        <a href="<?php echo base_url() ?>monan/sua_monan/<?= $value['id'] ?>" class="nutedit btn btn-danger"><i class="fa fa-pencil"></i></a>
							                        <a href="<?php echo base_url() ?>monan/xoa_monan/<?= $value['id'] ?>" class="nutedit btn btn-warning"><i class="fa fa-remove"></i></a>
							                    </div>
							                    <div class="card" style="width: 18rem;">
							                        <img width="100%" src="<?= $value['anhmon'] ?>" class="card-img-top" alt="...">
							                        <div class="card-body">
							                            <h4 class="card-text"><?= $value['tieudemonan']; ?></h4>
							                            <p class="card-text"><?= $value['gia']; ?></p>
							                            <p class="card-text"><?= $value['mota']; ?></p>
							                            <p class="card-text">Ngày tạo: <?= date('d/m/Y',$value['ngaydang']); ?></p>
							                        </div>
							                    </div>
							                    <?php endforeach ?>
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
    