<section id="detail-blog">
	<div class="cover">
		<div class="mask">
			<img src="<?php echo base_url('assets/upload/blog/'. $detail['image']) ?>" alt="<?php echo $detail['imagealt'] ?>" title="<?php echo $detail['imagetitle'] ?>">
		</div>
	</div>

	<section class="main-content container-fluid">
		<div class="container content">
			<div class="row">
				<div class="left col-sm-8 col-xs-12">
					<div class="title">
						<h1><?php echo $detail['title'] ?></h1>
					</div>
					<div class="blog-content">
						<article>
							<p class="description"><?php echo $detail['description'] ?></p>

							<p class="paragraph"><?php echo $detail['content'] ?></p>
						</article>
						<div class="fb-comments" data-href="<?php echo base_url('blog/detail/' . $detail['slug']) ?>" data-width="100%" data-numposts="5"></div>
					</div>
					<div class="blog-related">
						<div class="title">
							<h3><?php echo $this->lang->line('related') ?></h3>
						</div>
						<div class="row">
                            <?php if($relative): ?>
                                <?php foreach ($relative as $key => $value): ?>
									<div class="media col-sm-6 col-xs-12">
										<div class="media-left media-middle">
											<a href="#">
												<div class="mask">
													<img class="media-object" src="<?php echo base_url('assets/upload/blog/'. $value['image']) ?>" alt="<?php echo $value['imagealt'] ?>" title="<?php echo $value['imagetitle'] ?>">
												</div>
											</a>
										</div>
										<div class="media-body">
											<h4 class="media-heading"><?php echo $value['title'] ?></h4>
										</div>
									</div>
                                <?php endforeach ?>
                            <?php endif ?>
						</div>
					</div>
				</div>
				<div class="right col-sm-4 col-xs-12">
					<div class="booking">
						<h2><?php echo $this->lang->line('book-your-table') ?></h2>

                        <?php
                        echo form_open_multipart('', array('class' => 'form-horizontal'));
                        ?>

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
                            echo form_label($this->lang->line('your-date') . '(*)', 'contact_date');
                            echo form_error('contact_date');
                            echo form_input('contact_date', set_value('contact_date'),'class="form-control" id="contact_date"');
                            ?>
						</div>
						<div class="form-group">
                            <?php
                            echo form_label($this->lang->line('your-time') . '(*)', 'contact_time');
                            echo form_error('contact_time');
                            echo form_input('contact_time', set_value('contact_time'),'class="form-control" id="contact_time"');
                            ?>
						</div>
						<div class="form-group">
                            <?php
                            echo form_label($this->lang->line('your-number') . '(*)', 'contact_quantity');
                            echo form_error('contact_quantity');
                            echo form_input('contact_quantity', set_value('contact_quantity'),'class="form-control" id="contact_quantity"');
                            ?>
						</div>

						<a href="tel:+84 913 315 127" class="btn btn-outline" id="clickToCall" role="button">
							<i class="fa fa-phone" aria-hidden="true"></i> Hotline
						</a>

                        <?php echo form_submit('submit', $this->lang->line('submit'), 'class="btn btn-outline"'); ?>

                        <?php echo form_close(); ?>
					</div>
					<div class="contact">
						<h2><?php echo $this->lang->line('contact-us') ?></h2>
						<p><?php echo $this->lang->line('company-address') ?></p>
						<p>Tel: 0913 31 51 27  | info@ngochuong.vn</p>
						<h2><?php echo $this->lang->line('company-open-time') ?></h2>
						<p>10h00 - 22:00</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>



