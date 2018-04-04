<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách
            <small>Sự kiện</small>
        </h1>
<!--        <ol class="breadcrumb">-->
<!--            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
<!--            <li class="active">Product/ Service</li>-->
<!--        </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <span><?php echo $this->session->flashdata('message'); ?></span>
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Sự kiện</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('admin/products/creatProducts') ?>" class="btn btn-primary" role="button">Add Item</a>
                        </div>
                        <div class="col-md-6">
                            <form action="<?php echo base_url('admin/event/index') ?>" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm ..." name="search" value="">
                                    <span class="input-group-btn">
                                        <input type="submit" class="btn btn-block btn-primary" value="Tìm kiếm">
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">
                            <table id="table" class="table table_product">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Hình ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Private Rooms</th>
                                    <th>Private Floors</th>
                                    <th>Full Restaurant</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($events): ?>
                                <?php $i = 1; ?>
                                <?php foreach ($events as $key => $value): ?>
                                    
                                
                                    <tr class="remove_<?php echo $value['id'] ?>">
                                        <td><?php echo $i++ ?></td>
                                        <td>
                                            <div class="mask_sm">
                                                <img src="<?php echo base_url('assets/upload/event/'. $value['image']) ?>" alt="anh-cua-<?php echo $value['slug'] ?>">
                                            </div>
                                        </td>
                                        <td><?php echo $value['title'] ?></td>
                                        <td><?php echo $value['private_rooms'] ?></td>
                                        <td><?php echo $value['private_floors'] ?></td>
                                        <td><?php echo $value['full_restaurant'] ?></td>
                                        <td>
                                        <td>
                                            <?php if($value['is_activated'] == 1): ?>
                                                <span class="label label-success" onclick="deactive('event', <?php echo $value['id'] ?>, 'Chắc chắn sử dụng sự kiện này?')">Đang sử dụng</span>
                                            <?php else: ?>
                                                <span class="label label-warning" onclick="active('event', <?php echo $value['id'] ?>, 'Chắc chắn sử tắt kiện này?')">Không sử dụng</span>
                                            <?php endif ?>
                                        </td>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/event/detail/'.$value['id']) ?>"
                                            <button class="btn btn-default btn-sm" type="button" data-toggle="collapse" data-target="#collapse_1" aria-expanded="false" aria-controls="collapse_1">See Detail</button>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/event/edit/'. $value['id']) ?>" class="dataActionEdit"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                            <a href="javascript:void(0);" onclick="remove('event', <?php echo $value['id'] ?>)" class="dataActionDelete"><i class="fa fa-remove" aria-hidden="true"></i> </a>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                                <?php else: ?>
                                    <tr>
                                        Chưa có Event
                                    </tr>
                                <?php endif; ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Hình ảnh</th>
                                    <th>Tiêu đề</th>
                                    <th>Private Rooms</th>
                                    <th>Private Floors</th>
                                    <th>Full Restaurant</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-md-6 col-md-offset-5 page">
                            <?php echo $page_links ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

                <!-- /.box -->
            </div>
        </div>
        EVENT
    </section>
    <!-- /.content -->
</div>
