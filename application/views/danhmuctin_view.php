



<?php $open="category";   require_once __DIR__ . '/header_admin.php'; ?>

         <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-xs-12 mb-2">
                        <h3 class="content-header-title mb-0">Danh mục</h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-xs-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>tin/danhmuctin ">Danh mục</a>
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
				            <div class="card">
					            <div class="card-header">
					                <h4 class="card-title" id="horz-layout-basic">Thêm danh mục</h4>
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
					                <div class="card-block">
					                    <!-- <form class="form form-horizontal" action="<?= base_url() ?>/tin/themdanhmuc" method="post"> -->
					                    	<div class="form-body">
							                    <div class="form-group row">
					                            	<!-- <label class="col-md-3 label-control" for="projectinput1">Tên danh mục</label> -->
						                            <div class="col-md-6">
						                            	<input type="text" name="tendanhmuc" id="tendanhmuc" class="form-control" placeholder="Tên danh mục">
						                            </div>
						                            <!-- <button type="submit" class="btn btn-primary push-sm-3">
					                                <i class="fa fa-check-square-o"></i> Thêm danh mục
					                            </button> -->
                                                  <button type="button" id="nutthemdanhmuc" class="btn btn-primary push-sm-3">
                                                    <i class="fa fa-check-square-o"></i> Thêm danh mục
                                                </button>
						                        </div>
						                        
											</div>
					                   <!--  </form> -->
					                </div>
					            </div>

					            <!-- Table -->
					            	<div class="card-body collapse in">
                                <div class="card-block card-dashboard">
                                    
                                    <div class="table-responsive">
                                        <table class="table cacdanhmuc">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên danh mục</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            	 <?php $dem=1; ?>
                                                 
                                                <?php foreach ($dulieu as $value): ?>
                                                   
                                                <tr >
                                                    <th scope="row" ><?php echo $dem; $dem++ ?></th>
                                                    <td><?= $value['tendanhmuc'] ?> </td>
                                                    <td class="text-center"><a href="<?php echo base_url() ?>tin/suadanhmuc/<?= $value['id'] ?>" class="nutedit btn btn-danger"><i class="fa fa-pencil"></i></a>
													<a data-href="<?= $value['id'] ?>" class="nutdelete btn btn-warning"><i class="fa fa-remove"></i></a>
                                                    </td>
                                                </tr>
                                               <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
					            <!-- end table -->
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
        <!-- <script>
        CKEDITOR.replace( 'noidungtin');
        CKEDITOR.replace( 'noidungtin', {
        filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
        });
        </script> -->
          <script>
            $(function () {
                //chu y duong dan phai nam trong dau nhay
                //noidung='<?php $dem=1; ?>';
                duongdan='<?php echo base_url() ?>';

                // body...
                $('#nutthemdanhmuc').click(function(event) {
                    // console.log('Click rồi nhé');
                    // var tendanhmuc=$('#tendanhmuc').val();
                    console.log(tendanhmuc);
                    //$dem++;

                    //$.ajax la no goi y code het
                    $.ajax({
                        url: duongdan+'tin/addjquerydanhmuc',//php de nhan du lieu
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            tendanhmuc: $('#tendanhmuc').val(),
                            //tendanhmuc: $('#id').val(),

                        },
                        // success: function (res) {
                        //     console.log(res);
                        // }
                    })
                    .done(function() {
                        console.log("success");
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function(res) {
                        console.log(res);

                        //ve ra dung jquery de ve ra
                         //ve ra dung jquery de ve ra
                        noidung='<tr>';
                        noidung+='<th scope="row">';
                        noidung+='<?php echo $dem; $dem++ ?>';
                         noidung+='</th>';
                        noidung+='<td>';
                        noidung+=$('#tendanhmuc').val();
                        noidung+='</td>';
                        noidung+='<td class="text-center"><a href="<?php echo base_url() ?>tin/suadanhmuc/<?= $value['id'] ?>" class="nutedit btn btn-danger"><i class="fa fa-pencil"></i></a>';
                        noidung+=' ';
                        noidung+='<a data-href="'+res+'" class="nutdelete btn btn-warning"><i class="fa fa-remove"></i></a>';
                        noidung+='</td>';
                        noidung+='</tr>';

                        $('.cacdanhmuc').append(noidung);
                //Xoa nội dung
                        $('#tendanhmuc').val();


                    });
                    
                });//het jquery cho nut them
                // $('.content-body').on('click', '#nutthemdanhmuc', function(event) {
                    
                    
                // });
                //begin jquery cho nut xoa
                //Ham on nay lang nghe body 
                //Khi dung ajax mac dinh no chi lang nghe cac phan tu có san luc load noi dung
                //Nieu dug jquery ve nen cac phan tu khac jquery se ko biet va lay duoc su kien cua phan tu nay vo jquery chi tac dong html
                //muon bat dc su kien cua cac phan tu moi thi dung ham on
                //de lang nghe khi co thay doi thi nap luon vao cac doi tuong co khac nang click
                //Muon ang nghe div nao thi viet ten cai div do ra
                $('body').on('click', '.nutdelete', function(event) {
                    idtin =$(this).data('href');
                    duongdanxoa=$(this).parent().parent();
                    console.log(idtin);
                    $.ajax({
                        url: duongdan+'tin/xoadanhmuc/'+idtin,
                        type: 'POST',
                        dataType: 'json'
                    })
                    .done(function() {
                        console.log("success");
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                        duongdanxoa.remove();
                    });
                });
            })
        </script>
        </body></html>
