<div id="slider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="mask">
                <img src="https://images.unsplash.com/photo-1519351635902-7c60d09cb2ed?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9f2350a7b6ce99528b6a8ce9fbb9d27d&auto=format&fit=crop&w=967&q=80" alt="Image Slide 1">
            </div>
        </div>
        <div class="item">
            <div class="mask">
                <img src="https://images.unsplash.com/photo-1464093515883-ec948246accb?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4e80e68514efce683bd1016f33ecd8b6&auto=format&fit=crop&w=1041&q=80" alt="Image Slide 2">
            </div>

        </div>
        <div class="item">
            <div class="mask">
                <img src="https://images.unsplash.com/photo-1448043552756-e747b7a2b2b8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=33b0e638540ff8ab1325e2ed73bafd58&auto=format&fit=crop&w=1249&q=80" alt="Image Slide 3">
            </div>

        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <div class="slider-footer">
        <div class="mask">
            <img src="<?php echo site_url('assets/img/slider_bg.png') ?>" alt="slider footer">
        </div>
    </div>
    <div id="scrollBottom">
        <a href="#contact">
            <i class="fa fa-3x fa-angle-down" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- End Slider -->

<section class="main-content container-fluid">

    <div class="container content" id="contact">
        <div class="title">
            <h1><?php echo $this->lang->line('book-table') ?></h1>
        </div>

        <?php
        echo form_open_multipart('', array('class' => 'form-horizontal'));
        ?>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-name') . '(*)', 'contact_name');
                    echo form_error('contact_name');
                    echo form_input('contact_name', set_value('contact_name'), 'class="form-control" id="contact_name"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-mail') . '(*)', 'contact_mail');
                    echo form_error('contact_mail');
                    echo form_input('contact_mail', set_value('contact_mail'), 'class="form-control" id="contact_mail"');
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-phone') . '(*)', 'contact_phone');
                    echo form_error('contact_phone');
                    echo form_input('contact_phone', set_value('contact_phone'), 'class="form-control" id="contact_phone"');
                    ?>
                </div>
				<div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-address') . '(*)', 'contact_address');
                    echo form_error('contact_address');
                    echo form_input('contact_address', set_value('contact_address'), 'class="form-control" id="contact_address"');
                    ?>
				</div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-date') . '(*)', 'contact_date');
                    echo form_error('contact_date');
                    echo form_input('contact_date', set_value('contact_date'),'class="form-control" id="contact_date"');
                    ?>
                </div>
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <?php
                        echo form_label($this->lang->line('your-time') . '(*)', 'contact_time');
                        echo form_error('contact_time');
                        echo form_input('contact_time', set_value('contact_time'),'class="form-control" id="contact_time"');
                        ?>
                    </div>
                    <div class="form-group col-xs-12 col-sm-6 col-md-6">
                        <?php
                        echo form_label($this->lang->line('your-number') . '(*)', 'contact_quantity');
                        echo form_error('contact_quantity');
                        echo form_input('contact_quantity', set_value('contact_quantity'),'class="form-control" id="contact_quantity"');
                        ?>
                    </div>
                </div>
                <?php echo form_submit('submit', $this->lang->line('submit'), 'class="btn btn-outline"'); ?>
            </div>
        </div>


        <?php echo form_close(); ?>
    </div>
    <!-- End Contact -->


</section>