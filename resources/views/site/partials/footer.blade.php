
<footer id="footer">

	<div class="footer section">
		<div class="container">
			<h1 class="title text-center" id="contact">@lang('text.contact')</h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-sm-6">
					<div class="footer-content">
						<p class="large">Atendimento de segunda a sexta feira, das 9 às 18h.</p>
						<ul class="list-icons">
							<li><i class="fa fa-phone pr-10"></i> 55 11 99184 2993</li>
							<li><i class="fa fa-phone pr-10"></i> 55 11 5062 5842  </li>
							<li><i class="fa fa-envelope-o pr-10"></i> bruno@pacerini.pe.hu</li>
						</ul>
						<ul class="social-links">
							<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="footer-content">
						<form role="form" id="footer-form">
							<div class="form-group has-feedback">
								<label class="sr-only" for="name2">@lang('text.name')</label>
								<input type="text" class="form-control" id="name2" placeholder="@lang('text.name')" name="name2" required>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="email2">E-mail</label>
								<input type="email" class="form-control" id="email2" placeholder="E-mail" name="email2" required>
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