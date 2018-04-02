<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sự kiện
            <small>Chi tiết</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Sự kiện</a></li>
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
                        <h3 class="box-title">Chi tiết sự kiện</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-image col-md-6">
                                <label>Hình ảnh</label>
                                <div class="row">
                                    <div class="item col-md-12">
                                        <div class="mask-lg">
                                            <img src="<?php echo base_url('assets/upload/event/'. $event['image'] ) ?>" alt="Image Detail">
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
                                            <td><?php echo $event['slug'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Keywords</th>
                                            <td><?php echo $event['meta_keywords'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Meta Description</th>
                                            <td><?php echo $event['meta_description'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Private Rooms</th>
                                            <td><?php echo $event['private_rooms'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Private Floors</th>
                                            <td><?php echo $event['private_floors'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Full Restaurant</th>
                                            <td><?php echo $event['full_restaurant'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Trạng thái</th>
                                            <td>
                                                <?php if($event['is_activated'] == 1): ?>
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
                                        <div class="form-group col-xs-12">
                                            <strong>Tiêu đề: </strong><?php echo $event['title_vi'] ?>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <strong>Giới thiệu: </strong><?php echo $event['description_vi'] ?>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <strong>Nội dung: </strong><?php echo $event['content_vi'] ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="en">
                                        <div class="form-group col-xs-12">
                                            <strong>Tiêu đề: </strong><?php echo $event['title_en'] ?>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <strong>Giới thiệu: </strong><?php echo $event['description_en'] ?>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <strong>Nội dung: </strong><?php echo $event['content_en'] ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="cn">
                                        <div class="form-group col-xs-12">
                                            <strong>Tiêu đề: </strong><?php echo $event['title_cn'] ?>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <strong>Giới thiệu: </strong><?php echo $event['description_cn'] ?>
                                        </div>
                                        <div class="form-group col-xs-12">
                                            <strong>Nội dung: </strong><?php echo $event['content_cn'] ?>
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
                        <a href="<?php echo base_url('admin/event/edit/'.$event['id']) ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>