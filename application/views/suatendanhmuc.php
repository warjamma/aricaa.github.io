





<?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>
        <!-- ///////////////////////////////////////// -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-2">
                        <h3 class="content-header-title mb-0">Danh mục</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-xs-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Quản lý danh mục </a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="">Sửa danh mục</a>
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
                                <h4 class="card-title">Sửa danh mục</h4>
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
                                    <div class="col-sm-8 push-sm-2">
                                        <div class="jumbotron">
                                          <h1 class="display-4">Sửa danh mục</h1>
                                          <p class="lead">Sửa tên danh mục trong cơ sở dữ liệu</p>
                                        </div>
                                        <form action="<?php echo base_url() ?>tin/updatedanhmuc" method="post">
                                            <?php foreach ($mangdl as $value): ?>

                                              <label for="inputEmail4" class="display-4 ">Sửa danh mục</label>
                                              <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                              <input type="text" name="tendanhmuc" class="form-control" id="inputEmail4" value="<?= $value['tendanhmuc'] ?>">

                                              <?php endforeach ?>



                                          <br>
                                          <input type="submit" class="btn btn-primary" value="Lưu danh mục">
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
    