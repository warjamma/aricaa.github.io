<?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
            <div class="main-menu-content ps-container ps-theme-dark ps-active-y" data-ps-id="1ae700e0-e7c0-407f-d5b2-009cdb48722f" style="height: 558px;">

                <ul  id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main ">
                    <li class="navigation-header"><span>Quản lý page</span><i data-toggle="tooltip" data-placement="right" data-original-title="Apps" class<?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>=" ft-minus"></i>
                    </li>
                     <!-- <a href=""><i class="ft-edit"></i><span data-i18n="" class="menu-title">Danh muc</span></a> -->
                    
                    <li class="nav-item <?php echo isset($open) && $open='category'?'active':"" ?>">
                        <a href="<?php echo base_url() ?>tin/danhmuctin"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Quản lý danh mục</span></a>
                    </li>

                    <li class="nav-item <?php echo isset($open) && $open='category'?'active':"" ?>"><a href="<?php echo base_url() ?>tin/quanlytin"><i class="ft-message-square"></i><span data-i18n="" class="menu-title">Quản lý tin</span></a>
                    </li>

                    <li class="nav-item <?php echo isset($open) && $open='category'?'active':"" ?>"><a href="<?php echo base_url() ?>monan/quanlymonan"><i class="ft-airplay"></i><span data-i18n="" class="menu-title">Quản lý món ăn</span></a>
                    </li>

                     <li class="nav-item <?php echo isset($open) && $open='category'?'active':"" ?>">
                        <a href="<?php echo base_url() ?>Slides"><i class="ft-airplay"></i><span data-i18n="" class="menu-title">Quản slide home</span></a>
                    </li>

                     <li class="nav-item <?php echo isset($open) && $open='category'?'active':"" ?>"><a href="<?php echo base_url() ?>do_editslidefixed1"><i class="ft-airplay"></i><span data-i18n="" class="menu-title">Quản lý slide cố định</span></a>
                    </li>
                     <li class="nav-item <?php echo isset($open) && $open='category'?'active':"" ?>"><a href="<?php echo base_url() ?>trangchu/quanlydatban"><i class="ft-airplay"></i><span data-i18n="" class="menu-title">Quản lý đặt bàn</span></a>
                    </li>

                  <!--   <li class="nav-item has-sub open">
                        <a href=""><i class="ft-edit"></i><span data-i18n="" class="menu-title">Danh muc</span></a>
                        <ul class="menu-content">
                            <li class="active"><a href="<?php echo base_url() ?>tin/danhmuctin" class="menu-item">Thêm sửa xóa danh mục tin</a>
                        </ul>
                    </li> -->
<!-- 
                    <li class="nav-item">
                        <a href=""><i class="ft-edit"></i><span data-i18n="" class="menu-title">Quản lý slide</span></a>
                        <ul class="menu-content">
                            <li class="active"><a href="<?php echo base_url() ?>Slides" class="menu-item">Thêm slide</a>
                        </ul>
                        <ul class="menu-content">
                            <li class="active"><a href="<?php echo base_url() ?>do_edit" class="menu-item">Sửa slide</a>
                        </ul>
                         <ul class="menu-content">
                            <li class="active"><a href="<?php echo base_url() ?>do_editslidefixed1" class="menu-item">Sửa slide cố định</a>
                        </ul>
                    </li> -->
                   <!--  <li class="nav-item">
                        <a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Quản lý tin </span></a>
                         <ul class="menu-content">
                            <li class="active"><a href="<?php echo base_url() ?>tin/quanlytin" class="menu-item">Thêm sửa xóa tin</a>
                        </ul>
                    </li> -->
                  <!--    <li class="nav-item">
                        <a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Quản lý món ăn </span></a>
                         <ul class="menu-content">
                            <li class="active"><a href="<?php echo base_url() ?>monan/quanlymonan" class="menu-item">Thêm sửa xóa món ăn</a>
                        </ul>
                    </li>
                 -->

                  

                </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -1614px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 1617px; height: 558px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 415px; height: 143px;"></div></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 558px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 143px;"></div></div></div>
        </div>
       
   
<!-- <?php  $open="category"; require_once __DIR__ . '/header_admin.php'; ?>
          -->
           
       
        <!-- ///////////////////////////////////////// -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-2">
                        <h3 class="content-header-title mb-0">Đặt bàn</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-xs-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Quản lý đặt bàn </a>
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
                                <h4 class="card-title">Danh sách đặt bàn</h4>
                                <br>
                                <div class="form-group">
                                    <!-- basic buttons -->
                                    <a class="btn btn-primary btn-min-width mr-1 mb-1" href="<?php echo base_url() ?>trangchu/currentdate" role="button">Đơn hàng hôm nay</a>
                                    <a class="btn btn-warning btn-min-width mr-1 mb-1" href="<?php echo base_url() ?>trangchu/quanlydatban" role="button">Tất cả đơn hàng</a>
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
                            <div class="card-body collapse in">
                                <div class="card-block card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table tablename">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                   <!--  <th>Mã</th> -->
                                                    <th>Họ tên</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Ngày đặt bàn</th>
                                                    <th>Giờ đặt bàn</th>
                                                    <th>Số người</th>
                                                    <th class="trangthai">Trạng thái</th>
                                                    <th class="chucnang">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <!-- <?php var_dump($dulieudatban) ?> -->
                                            <tbody>
                                                <?php $dem=1; ?>
                                                <?php foreach ($dulieudatban as $value): ?>
                                                <tr>
                                                    <th scope="row"><?php echo $dem; $dem++ ?></th>
                                                    <!-- <th><?= $value['id'] ?></th> -->
                                                    <td><?= $value['tenkh'] ?></td>
                                                    <td><?= $value['email'] ?></td>
                                                    <td><?= $value['sdt'] ?></td>
                                                    <td><?= $value['ngaydatban'] ?></td>
                                                    <td><?= $value['giodatban'] ?></td>
                                                    <td><?= $value['songuoi'] ?></td>
                                                    <td><a href="<?php if($value['trangthai']=='0') echo base_url();else if( $value['trangthai']=='1'){
                                                      echo '';
                                                  }; ?>trangchu/suadatban/<?= $value['id'] ?>" class="nutedit btn btn-danger"><i class="fa fa-pencil"></i> <?php  if($value['trangthai']=='0') echo 'Xác nhận đơn';else if( $value['trangthai']=='1'){
                                                      echo ' Đã xử lý đơn';
                                                  }; ?></a></td>

                                                  <?php   ?>
                                                  
                                                    <td class="">
                                                    <a href="<?php echo base_url() ?>trangchu/xoadatban/<?= $value['id'] ?>" class="nutedit btn btn-warning"><i class="fa fa-remove"></i> Xóa đơn</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                             <button class="btn btn-success nutxuat">Export</button>
                        </div>
                    </div>
                    </section>
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>
   
            <!-- ////////////////////////////////////////////////////////////////////////////-->
        <footer class="footer footer-static footer-light navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  © 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block hidden-md-down">Hand-crafted &amp; Made with <i class="ft-heart pink"></i></span></p>
        </footer>
        <!-- BEGIN VENDOR JS-->
        <script src="<?php echo base_url() ?>template/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
        <script src="<?php echo base_url() ?>template/app-assets/js/core/app-menu.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>template/app-assets/js/core/app.js" type="text/javascript"></script>
        <!-- END STACK JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <!-- END PAGE LEVEL JS-->
        <!-- chen them CKEDItor -->
       
   <!--  // chen them xuat excel -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>lib/src/jquery.table2excel.js"></script>
       

        <script>

            $(function() {
                $(".nutxuat").click(function(){
                $(".tablename").table2excel({
                    exclude: ".chucnang",
                    name: "Excel Document Name"
                }); 
                 });
            });
            </script>
            

</script>
</body></html>
