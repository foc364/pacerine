
<footer id="footer">

	<div class="footer section">
		<div class="container">
			<h1 class="title text-center" id="contact">@lang('text.contact')</h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-sm-6">
					<div class="footer-content">
						<p class="large"><?php print $text->schedule;?></p>
						<ul class="list-icons">
							<li><i class="fa fa-phone pr-10"></i> <?php print $contact->phone;?></li>
							<li><i class="fa fa-phone pr-10"></i> <?php print $contact->phone_2;?>  </li>
							<li><i class="fa fa-envelope-o pr-10"></i> <?php print $contact->email;?></li>
						</ul>
					</div>
				</div>
    
				<div class="col-sm-6">
					<div class="footer-content">
						<div id="div_email">
				       		<span id="msg_email"></span>
			    		</div>
			    		
    				    <form method="post" action="{{ Request::route('site-requests') }}" id="form_contact">
							<div class="form-group has-feedback">
								<label class="sr-only" for="name">@lang('text.name')</label>
								<input type="text" class="form-control" id="name" placeholder="@lang('text.name')" name="name" required>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="email">E-mail</label>
								<input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="message2">@lang('text.message')</label>
								<textarea class="form-control" rows="8" id="message2" placeholder="@lang('text.message')" name="message2" required></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
							<input type="submit" value="@lang('text.send')" class="btn btn-default">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</footer>
<!-- footer end -->