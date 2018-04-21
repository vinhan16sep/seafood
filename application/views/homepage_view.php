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
        <?php if($banner): ?>
            <?php foreach($banner as $key => $value): ?>
                <?php $i = 1; ?>
                <div class="item <?php echo ($key == 0)? 'active' : '' ?>">
                    <div class="mask">
                        <img src="<?php echo base_url('assets/upload/banner/'. $value['image']) ?>" alt="Image Slide <?php echo $i++; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
		<div class="slide-banner">
			<div class="image">
				<img src="<?php echo site_url('assets/img/slider_img.png') ?>" alt="book now">
			</div>

			<div class="button">
				<a href="<?php echo base_url('booking') ?>" class="btn btn-default" role="button">
					<span><?php echo $this->lang->line('book-table') ?></span>
				</a>
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
		<a href="#about">
			<i class="fa fa-3x fa-angle-down" aria-hidden="true"></i>
		</a>
	</div>
</div>
<!-- End Slider -->

<section class="main-content container-fluid">

	<div class="container content" id="about">
		<div class="left col-xs-12 col-sm-6 col-md-6">
			<div class="mask">
				<img src="<?php echo base_url('assets/upload/about/thumb/'. $about['avatar']) ?>" alt="anh gioi thieu">
				<div class="image-decor"></div>
			</div>
		</div>
		<div class="right col-xs-12 col-sm-6 col-md-6 text">
			<h1><?php echo $this->lang->line('about-us') ?></h1>
			<p><?php echo $about['about_content'] ?></p>
		</div>
	</div>
	<!-- End About -->
	<?php $image_1 = base_url("assets/upload/break/". $break_1["image"]) ?>
	<div class="break" id="break-1" style="background-image: url('<?php echo $image_1 ?>')">
		<div class="container">
			<div class="title">
				<h2><?php echo $break_1['break_title'] ?></h2>
			</div>
		</div>
	</div>
	<!-- End Break 1 -->

	<div class="container content" id="food">
		<div class="left col-xs-12 col-sm-6 col-md-6 text">
			<h1><?php echo $this->lang->line('our-food') ?></h1>
			<p><?php echo $our_food['our_food_content'] ?></p>
			<br>
			<a href="<?php echo base_url('assets/doc/menu.pdf') ?>" class="btn btn-outline" role="button" target="_blank">
                <?php echo $this->lang->line('show-menu') ?>
			</a>

		</div>
		<div class="right col-xs-12 col-sm-6 col-md-6">
			<div class="mask">
				<img src="<?php echo base_url('assets/upload/our_food/thumb/'. $our_food['avatar']) ?>" alt="anh mon an">
				<div class="image-decor"></div>
			</div>
		</div>
	</div>
	<!-- End Food -->
	
	<?php $image_2 = base_url("assets/upload/break/". $break_2["image"]) ?>
	<div class="break" id="break-2" style="background-image: url('<?php echo $image_2 ?>')">
		<div class="container">
			<div class="title">
				<h2><?php echo $break_2['break_title'] ?></h2>
			</div>
		</div>
	</div>
	<!-- End Break 2 -->

	<div class="container content" id="events">
		<div class="left col-xs-12 col-sm-6 col-md-6">
			<div class="mask">
				<img src="<?php echo base_url('assets/upload/event/thumb/'. $event['image']) ?>" alt="anh su kien">
				<div class="image-decor"></div>
			</div>
		</div>
		<div class="right col-xs-12 col-sm-6 col-md-6 text">
			<h1><?php echo $this->lang->line('events') ?></h1>
			<p><?php echo $event['event_description'] ?></p>
			<div class="box">
				<h3><?php echo $this->lang->line('private-rooms') ?></h3>
				<p><?php echo $this->lang->line('up-to') ?> <?php echo $event['private_rooms'] ?> <?php echo $this->lang->line('guests') ?></p>
				<h3><?php echo $this->lang->line('private-floors') ?></h3>
				<p><?php echo $this->lang->line('up-to') ?> <?php echo $event['private_floors'] ?> <?php echo $this->lang->line('guests') ?></p>
				<h3><?php echo $this->lang->line('full-restaurant') ?></h3>
				<p><?php echo $this->lang->line('up-to') ?> <?php echo $event['full_restaurant'] ?> <?php echo $this->lang->line('guests') ?></p>
				<br>
				<a href="<?php echo base_url('assets/doc/floor-plan.pdf') ?>" class="btn btn-outline" role="button" target="_blank">
                    <?php echo $this->lang->line('show-floor-plan') ?>
				</a>
			</div>
		</div>
	</div>
	<!-- End Events -->

	<div class="container-fluid content" id="gallery">
		<div class="title">
			<h1><?php echo $this->lang->line('gallery') ?></h1>
		</div>

		<div id="slideGallery" class="carousel slide" data-ride="carousel">
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
                <?php if($library): ?>
                    <?php foreach ($library as $key => $value): ?>
                        <div class="item <?php echo ($key == 0)? 'active' : '' ?>">
                            <div class="row">
                                <?php foreach ($value as $k => $val): ?>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                    <div class="inner">
                                        <div class="mask">
                                            <a href="<?php echo base_url('assets/upload/library/'. $val['image']) ?>" data-lightbox="slideGallery" data-title="<?php echo $val['image_title'] ?>">
                                                <img src="<?php echo base_url('assets/upload/library/thumb/'. $val['image_thumb']) ?>" alt="<?php echo $val['image_title'] ?>">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
			</div>


			<!-- Controls -->
			<a class="left carousel-control" href="#slideGallery" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slideGallery" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- Item slider end-->

	<div class="container content" id="contact">
		<div class="title">
			<h1><?php echo $this->lang->line('contact-us') ?></h1>
		</div>

<!--        --><?php
//        echo form_open_multipart('', array('class' => 'form-horizontal'));
//        ?>
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash() ?>" id="csrf" />
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-name') . '(*)', 'contact_name');
                    echo form_error('contact_name');
                    echo form_input('contact_name', set_value('contact_name'), 'class="form-control" id="contact_name"');
                    ?>
                    <span class="name_error"></span>
				</div>
				<div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-mail') .'(*)', 'contact_mail');
                    echo form_error('contact_mail');
                    echo form_input('contact_mail', set_value('contact_mail'), 'class="form-control" id="contact_mail"');
                    ?>
                    <span class="email_error"></span>
				</div>
				<div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-phone') .'(*)', 'contact_phone');
                    echo form_error('contact_phone');
                    echo form_input('contact_phone', set_value('contact_phone'), 'class="form-control" id="contact_phone"');
                    ?>
                    <span class="phone_error"></span>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-way') .'(*)', 'contact_reason');
                    echo form_error('contact_reason');
                    echo form_dropdown('contact_reason', $option = array('1' => 'Reason 1', '2' => 'Reason 2') ,0, 'class="form-control" id="contact_reason"');
                    ?>
                    <span class="reason_error"></span>
				</div>
				<div class="form-group">
                    <?php
                    echo form_label($this->lang->line('your-message'), 'contact_message');
                    echo form_error('contact_message');
                    echo form_textarea('contact_message', set_value('contact_message'), 'class="form-control" id="contact_message"');
                    ?>
                    <span class="message_error"></span>
				</div>
                <?php echo form_submit('submit', $this->lang->line('submit'), 'class="btn btn-outline pull-right btn-contact"'); ?>
			</div>
		</div>


<!--        --><?php //echo form_close(); ?>
	</div>
	<!-- End Contact -->

	<div class="container-fluid content" id="getDirection">
		<div class="title">
			<h1><?php echo $this->lang->line('get-direction') ?></h1>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.16776955629!2d108.20111104784492!3d16.0529015712601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219bab3e5ab59%3A0xc53bd360a446d08c!2zQnVyZ2VyIEtpbmcgU8OibiBCYXkgxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1522685834411" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- End Map -->

</section>

<!--
MODAL PARTS
-->
<!--
<div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="menuLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title" id="menuLabel"><?php echo $this->lang->line('modal-menu') ?></h3>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php echo $this->lang->line('modal-close') ?>
				</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="floor-plan" tabindex="-1" role="dialog" aria-labelledby="floorPlanLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title" id="floorPlanLabel"><?php echo $this->lang->line('modal-floor-plan') ?></h3>
			</div>
			<div class="modal-body">
				<img src="https://i.pinimg.com/originals/68/e6/6e/68e66ee8c9e307b1a1c72c70808060ba.jpg" alt="Restaurant Floor Plan">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
                    <?php echo $this->lang->line('modal-close') ?>
				</button>
			</div>
		</div>
	</div>
</div>
-->

<script>
    HOSTNAME = window.location.origin + '/seafood/';
    var csrf_hash = $('#csrf').val();
    $('.btn-contact').click(function () {
        var url = HOSTNAME + 'homepage/create';
        var name = $('#contact_name').val();
        var email = $('#contact_mail').val();
        var phone = $('#contact_phone').val();
        var reason = $('#contact_reason').val();
        var message = $('#contact_message').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(name.length == 0){
            //$('.name_error').text('Họ và Tên không được trống!');
            $('.name_error').text('Name must be filled!');
        }else{
            $('.name_error').text('');
        }

        if(email.length == 0){
            //$('.email_error').text('Email không được trống!');
            $('.email_error').text('Email must be filled!');
        }
        else{
            $('.email_error').text('');
        }

        // if(message.length == 0){
        //     $('.message_error').text('Nội dung không được trống!');
        //     $('.message_error').text('Message must be filled!');
        // }
        // else{
        //     $('.message_error').text('');
        // }

        if(phone.length == 0){
            //$('.message_error').text('Nội dung không được trống!');
            $('.phone_error').text('Phone Number must be filled!');
        }
        else{
            $('.phone_error').text('');
        }
        if(name.length != 0 && email.length != 0 && message.length != 0) {
            if(filter.test(email)) {
                $.ajax({
                    method: "post",
                    url: url,
                    data: {
                        csrf_seafood_token: csrf_hash,
                        name: name,
                        email: email,
                        phone: phone,
                        reason: reason,
                        message: message
                    },
                    success: function (response) {
                        console.log(response);
                        // if(response.success == true){
                        //     csrf_hash = response.reponse.csrf_hash;
                        //
                        // }else{
                        //     location.reload();
                        // }
                    },
                    error: function (jqXHR, exception) {
                        // console.log(errorHandle(jqXHR, exception));
                    }
                });
            }else{
                //$('.email_error').text('Định dạng email không đúng, Vui lòng kiểm tra lại!');
                $('.email_error').text('Email Format is not Correct, please check it again!');
            }
        }
    });
</script>
