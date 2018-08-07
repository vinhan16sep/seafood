<link rel="stylesheet" href="<?php echo site_url('assets/sass/admin/') ?>detail.css">


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Tin tức
            <small>Chi tiết</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Tin tức</a></li>
            <li class="active">Chi tiết</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết tin tức</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-image col-md-6">
                                <label>Hình ảnh</label>
                                <div class="row">
                                    <div class="item col-md-12">
                                        <div class="mask-lg">
                                            <img src="<?php echo base_url('assets/upload/blog/'. $blog['image'] ) ?>" alt="Image Detail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-info col-md-6">
                                <div class="table-responsive">
                                    <label>Thông tin</label>
                                    <table class="table table-striped">
                                        <tr>
                                            <th colspan="2">Thông tin cơ bản</th>
                                        </tr>
                                        <tr>
                                            <th>Slug</th>
                                            <td><?php echo $blog['slug'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Keywords</th>
                                            <td><?php echo $blog['meta_keywords'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Description</th>
                                            <td><?php echo $blog['meta_description'] ?></td>
                                        </tr>
                                        <!--
										<tr>
                                            <th>Private Rooms</th>
                                            <td><?php echo $blog['private_rooms'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Private Floors</th>
                                            <td><?php echo $blog['private_floors'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Full Restaurant</th>
                                            <td><?php echo $blog['full_restaurant'] ?></td>
                                        </tr>
                                        -->
                                        <tr>
                                            <th>Trạng thái</th>
                                            <td>
                                                <?php if($blog['is_activated'] == 1): ?>
                                                    <span class="label label-success">Đang sử dụng</span>
                                                <?php else: ?>
                                                    <span class="label label-warning">Không sử dụng</span>
                                                <?php endif ?>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#vi" aria-controls="vi" role="tab" data-toggle="tab">
                                            <span class="badge">1</span> Tiếng Việt
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#en" aria-controls="en" role="tab" data-toggle="tab">
                                            <span class="badge">2</span> English
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#cn" aria-controls="cn" role="tab" data-toggle="tab">
                                            <span class="badge">3</span> 中国
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="vi">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 200px">Tiêu đề của hình ảnh: </th>
                                                        <td><?php echo $blog['imagetitle_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Alt của hình ảnh: </th>
                                                        <td><?php echo $blog['imagealt_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Giới thiệu về hình ảnh: </th>
                                                        <td><?php echo $blog['imagedescription_vi'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th style="width: 200px">Tiêu đề: </th>
                                                        <td><?php echo $blog['title_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Giới thiệu: </th>
                                                        <td><?php echo $blog['description_vi'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Nội dung: </th>
                                                        <td><?php echo $blog['content_vi'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="en">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 200px">Image title: </th>
                                                        <td><?php echo $blog['imagetitle_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Image Alt: </th>
                                                        <td><?php echo $blog['imagealt_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Image description: </th>
                                                        <td><?php echo $blog['imagedescription_en'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th style="width: 200px">Title: </th>
                                                        <td><?php echo $blog['title_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Description: </th>
                                                        <td><?php echo $blog['description_en'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Content: </th>
                                                        <td><?php echo $blog['content_en'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="cn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 200px">图像的标题: </th>
                                                        <td><?php echo $blog['imagetitle_cn'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">Alt图片: </th>
                                                        <td><?php echo $blog['imagealt_cn'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">关于图像: </th>
                                                        <td><?php echo $blog['imagedescription_cn'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <th style="width: 200px">标题: </th>
                                                        <td><?php echo $blog['title_cn'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">介绍: </th>
                                                        <td><?php echo $blog['description_cn'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th style="width: 200px">内容: </th>
                                                        <td><?php echo $blog['content_cn'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Edit Information</h3>
                    </div>
                    <div class="box-body">
                        <a href="<?php echo base_url('admin/blog/edit/'.$blog['id']) ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>