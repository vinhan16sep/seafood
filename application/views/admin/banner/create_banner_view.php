<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm Banner
            <small>Banner</small>
        </h1>
        <?php if ($this->session->flashdata('message_error')): ?>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> alert!</h4>
                <?php echo $this->session->flashdata('message_error'); ?>
            </div>
        <?php endif ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-default">
                    <div class="box-body">
                        <?php
                        echo form_open_multipart('', array('class' => 'form-horizontal'));
                        ?>
                        <div class="col-xs-12">
                            <h4 class="box-title">Banner</h4>
                        </div>
                        <div class="row">
                            <span><?php echo $this->session->flashdata('message'); ?></span>
                        </div>
                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Hình ảnh', 'image_shared');
                            echo form_error('image_shared');
                            echo form_upload('image_shared', '', 'class="form-control"');
                            ?>
                            <p class="help-block">Click để upload</p>
                        </div>

                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Tiêu đề của hình ảnh', 'imagetitle_shared');
                                echo form_error('imagetitle_shared');
                                echo form_input('imagetitle_shared', set_value('imagetitle_shared'), 'class="form-control" id="imagetitle_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Alt của hình ảnh', 'imagealt_shared');
                                echo form_error('imagealt_shared');
                                echo form_input('imagealt_shared', set_value('imagealt_shared'), 'class="form-control" id="imagealt_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Giới thiệu về hình ảnh', 'imagedescription_shared');
                            echo form_error('imagedescription_shared');
                            echo form_textarea('imagedescription_shared', set_value('imagedescription_shared', '', false), 'class="form-control" rows="5" ')
                            ?>
                        </div>

                        

                        <?php echo form_submit('submit_shared', 'OK', 'class="btn btn-primary"'); ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
