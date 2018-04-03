<div class="content-wrapper" style="min-height: 916px;">
    <section class="content row">
        <div class="container col-md-12">
            <h3 style="text-transform: uppercase; text-align: center;">
                Thư viện ảnh <p></p>
            </h3>
            <div>
                <span><?php echo $this->session->flashdata('message'); ?></span>
            </div>
            <div class="row">
                <?php
                    echo form_open_multipart('admin/library/index', array('class' => 'form-horizontal'));
                ?>
                    <a type="button" href="<?php echo site_url('admin/library/create_image/'. $library['id']); ?>" class="btn btn-primary">THÊM MỚI</a>
                    <a type="button" href="<?php echo site_url('admin/library/remove_all_image/'. $library['id']); ?>" class="btn btn-primary">XÓA HẾT ẢNH</a>
                <?php echo form_close(); ?>
            </div>
            <div>
            <br>
            <br>
            <div class="detail-info col-md-12">
                <div class="table-responsive">
                    <label>Tiêu đề thự viện</label>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th>Tiếng Việt: </th>
                            <td><?php echo $library['title_vi'] ?></td>
                        </tr>
                        <tr>
                            <th>English: </th>
                            <td><?php echo $library['title_en'] ?></td>
                        </tr>
                        <tr>
                            <th>中国: </th>
                            <td><?php echo $library['title_cn'] ?></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
            
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />

            </div>
            <?php if ($library): ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px;">
                        <table class="table table-hover table-bordered table-condensed">
                            <tbody>
                                <h3>Bài viết: <a href="<?php echo base_url('') ?>" title="" style="text-transform: uppercase"><?php echo $library['title_vi'] ?></a></h3>
                                <tr>
                                    <td style="width: 100px"><b><a href="#">Ảnh</a></b></td>
                                    <td style="width: 100px"><b>Operations</b></td>
                                </tr>

                                <?php if ($library['image'] != null): ?>
                                    <?php foreach ($library['image'] as $key => $value): ?>
                                        <tr class="row_<?php echo $key ?>">
                                            <td><img src="<?php echo base_url('assets/upload/library/'.$library['slug'].'/'.$value) ?>" alt="" style="width: 200px"></td>
                                            <td>
                                                <a href="javascript:void(0);" title="Xóa" class="btn-remove" onclick="remove_image('library', <?php echo $library['id'] ?>, '<?php echo $value ?>', <?php echo $key ?>);" >
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </tbody>
                        </table>
                        <div class="col-md-6 col-md-offset-5 page">
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px;">
                        không tồn tại!
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
</div>
