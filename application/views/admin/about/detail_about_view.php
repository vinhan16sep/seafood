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
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Chi tiết sự kiện</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="detail-image col-md-12">
                                <label>Hình ảnh (Click vào ảnh để chọn ảnh làm Avatar)</label>
                                <div class="row">
                                    <div class="item col-md-12">
                                        <div class="mask-lg row">
                                            <?php foreach (json_decode($about['image']) as $key => $value): ?>
                                                <div class="col-md-2">
                                                    <span onclick="active_avatar('about', '<?php echo $value ?>')" style="cursor: pointer;">
                                                        <img src="<?php echo base_url('assets/upload/about/'.$value) ?>" alt="Image Detail" width="150px">
                                                        <?php echo ($value == $about['avatar'])? '<i class="fa fa-check" aria-hidden="true"></i>' : '' ?>
                                                    </span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th style="width: 100px">Slug: </th>
                                        <td><?php echo $about['slug'] ?></td>
                                    </tr>
                                    </tbody>
                                </table>
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
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="vi">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <th style="width: 100px">Tiêu đề: </th>
                                                    <td><?php echo $about['title_vi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 100px">Nội dung: </th>
                                                    <td><?php echo $about['content_vi'] ?></td>
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
                                                    <th style="width: 100px">Title: </th>
                                                    <td><?php echo $about['title_en'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 100px">Content: </th>
                                                    <td><?php echo $about['content_en'] ?></td>
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
                                                    <th style="width: 100px">标题: </th>
                                                    <td><?php echo $about['title_cn'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="width: 100px">内容: </th>
                                                    <td><?php echo $about['content_cn'] ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <a href="<?php echo base_url('admin/about/edit') ?>" class="btn btn-warning" role="button">Chỉnh sửa</a>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->
    </section>
</div>
