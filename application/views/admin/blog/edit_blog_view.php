<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chỉnh sửa
            <small>Tin Tức</small>
        </h1>
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
                            <h4 class="box-title">Basic Information</h4>
                        </div>
                        <div class="row">
                            <span><?php echo $this->session->flashdata('message'); ?></span>
                        </div>

                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Ảnh đại diện đang sử dụng', 'image_old_shared');
                            ?>
                            <img src="<?php echo base_url('assets/upload/blog/'.$blog['image']) ?>" alt="anh-cua-<?php echo $blog['slug'] ?>" style="display: block; width: 150px">
                            <br>
                        </div>

                        <div class="form-group col-xs-12">
                            <?php
                            echo form_label('Ảnh đại diện', 'image_shared');
                            echo form_error('image_shared');
                            echo form_upload('image_shared', set_value('image_shared'), 'class="form-control"');
                            ?>
                            <br>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Slug', 'slug_shared');
                                echo form_error('slug_shared');
                                echo form_input('slug_shared', $blog['slug'], 'class="form-control" id="slug_shared" ');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Meta Keywords', 'metakeywords_shared');
                                echo form_error('metakeywords_shared');
                                echo form_input('metakeywords_shared', $blog['meta_keywords'], 'class="form-control" id="metakeywords_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Meta Description', 'metadescription_shared');
                                echo form_error('metadescription_shared');
                                echo form_input('metadescription_shared', $blog['meta_description'], 'class="form-control" id="metadescription_shared"');
                                ?>
                            </div>
                        </div>
                        <!-- Dedete
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Private Rooms', 'privaterooms_shared');
                                echo form_error('privaterooms_shared');
                                echo form_input('privaterooms_shared', $blog['private_rooms'], 'class="form-control" id="privaterooms_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Private Floors', 'privatefloors_shared');
                                echo form_error('privatefloors_shared');
                                echo form_input('privatefloors_shared', $blog['private_floors'], 'class="form-control" id="privatefloors_shared"');
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-xs-12">
                            <div class="form-group col-xs-12">
                                <?php
                                echo form_label('Full Restaurant', 'fullrestaurant_shared');
                                echo form_error('fullrestaurant_shared');
                                echo form_input('fullrestaurant_shared', $blog['full_restaurant'], 'class="form-control" id="fullrestaurant_shared"');
                                ?>
                            </div>
                        </div>
                        -->
                        <div>
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
                            <hr>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="vi">
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Tiêu đề của hình ảnh', 'imagetitle_vi');
                                            echo form_error('imagetitle_vi');
                                            echo form_input('imagetitle_vi', $blog['imagetitle_vi'], 'class="form-control" id="imagetitle_vi"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Alt của hình ảnh', 'imagealt_vi');
                                            echo form_error('imagealt_vi');
                                            echo form_input('imagealt_vi', $blog['imagealt_vi'], 'class="form-control" id="imagealt_vi"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Giới thiệu về hình ảnh', 'imagedescription_vi');
                                        echo form_error('imagedescription_vi');
                                        echo form_textarea('imagedescription_vi', $blog['imagedescription_vi'], 'class="form-control" rows="5" ')
                                        ?>
                                    </div>


                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Tiêu đề', 'title_vi');
                                        echo form_error('title_vi');
                                        echo form_input('title_vi', $blog['title_vi'], 'class="form-control" id="title_vi"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Title Tag', 'dynamictitle_vi');
                                        echo form_error('dynamictitle_vi');
                                        echo form_input('dynamictitle_vi', $blog['dynamictitle_vi'], 'class="form-control" id="dynamictitle_vi"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Giới thiệu', 'description_vi');
                                        echo form_error('description_vi');
                                        echo form_textarea('description_vi', $blog['description_vi'], 'class="form-control" rows="5" ')
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Nội dung', 'content_vi');
                                        echo form_error('content_vi');
                                        echo form_textarea('content_vi', $blog['content_vi'], 'class="tinymce-area" class="form-control"')
                                        ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="en">
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Image title', 'imagetitle_en');
                                            echo form_error('imagetitle_en');
                                            echo form_input('imagetitle_en', $blog['imagetitle_en'], 'class="form-control" id="imagetitle_en"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Image Alt', 'imagealt_en');
                                            echo form_error('imagealt_en');
                                            echo form_input('imagealt_en', $blog['imagealt_en'], 'class="form-control" id="imagealt_en"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Image description', 'imagedescription_en');
                                        echo form_error('imagedescription_en');
                                        echo form_textarea('imagedescription_en', $blog['imagedescription_en'], 'class="form-control" rows="5" ')
                                        ?>
                                    </div>


                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Title', 'title_en');
                                        echo form_error('title_en');
                                        echo form_input('title_en', $blog['title_en'], 'class="form-control" id="title_en"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Title Tag', 'dynamictitle_en');
                                        echo form_error('dynamictitle_en');
                                        echo form_input('dynamictitle_en', $blog['dynamictitle_en'], 'class="form-control" id="dynamictitle_en"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Description', 'description_en');
                                        echo form_error('description_en');
                                        echo form_textarea('description_en', $blog['description_en'], 'class="form-control" rows="5" ')
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Content', 'content_en');
                                        echo form_error('content_en');
                                        echo form_textarea('content_en', $blog['content_en'], 'class="tinymce-area" class="form-control"')
                                        ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="cn">
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('图像的标题', 'imagetitle_cn');
                                            echo form_error('imagetitle_cn');
                                            echo form_input('imagetitle_cn', $blog['imagetitle_cn'], 'class="form-control" id="imagetitle_cn"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <div class="form-group col-xs-12">
                                            <?php
                                            echo form_label('Alt图片', 'imagealt_cn');
                                            echo form_error('imagealt_cn');
                                            echo form_input('imagealt_cn', $blog['imagealt_cn'], 'class="form-control" id="imagealt_cn"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('关于图像', 'imagedescription_cn');
                                        echo form_error('imagedescription_cn');
                                        echo form_textarea('imagedescription_cn', $blog['imagedescription_cn'], 'class="form-control" rows="5" ')
                                        ?>
                                    </div>

                                    
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('标题', 'title_cn');
                                        echo form_error('title_cn');
                                        echo form_input('title_cn', $blog['title_cn'], 'class="form-control" id="title_cn"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('Title Tag', 'dynamictitle_cn');
                                        echo form_error('dynamictitle_cn');
                                        echo form_input('dynamictitle_cn', $blog['dynamictitle_cn'], 'class="form-control" id="dynamictitle_cn"');
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('介绍', 'description_cn');
                                        echo form_error('description_cn');
                                        echo form_textarea('description_cn', $blog['description_cn'], 'class="form-control" rows="5" ')
                                        ?>
                                    </div>
                                    <div class="form-group col-xs-12">
                                        <?php
                                        echo form_label('内容', 'content_cn');
                                        echo form_error('content_cn');
                                        echo form_textarea('content_cn', $blog['content_cn'], 'class="tinymce-area" class="form-control"')
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_submit('submit_shared', 'OK', 'class="btn btn-primary"'); ?>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
