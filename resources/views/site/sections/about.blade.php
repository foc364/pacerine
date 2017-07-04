<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 id="about" class="title text-center">@lang('text.about') <span>Bruno Pacerini Moreno</span></h1>
        <p class="lead text-center">@lang('text.role')</p>
        <div class="space"></div>
        <div class="row">
          <div class="col-md-6">
            <img src="resources/images/image1.jpg" alt="logo">
            <div class="space"></div>
          </div>
          <div class="col-md-6">
            <?php print $text->about ?>
          
            <ul class="list-unstyled">
              <li><i class="fa fa-caret-right pr-10 text-colored"></i>  <?php print $text->about_li ?></li>
              <li><i class="fa fa-caret-right pr-10 text-colored"></i>  <?php print $text->about_li_2 ?></li>
              <li><i class="fa fa-caret-right pr-10 text-colored"></i>  <?php print $text->about_li_3 ?></li>
            </ul>
          </div>
        </div>
        <div class="space"></div>
      
        <div class="row">
          <div class="col-md-6">
            <?php print $text->about_experience ?>
          </div>

          <div class="col-md-6">
              <?php print $text->about_conclusion ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
