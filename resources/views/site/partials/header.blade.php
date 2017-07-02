<!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

    <!-- header start -->
    <!-- ================ --> 
    <header class="header fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">

              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="#banner"><img id="logo" src="resources/images/favicon.png" alt="faveicon"></a>
              </div>

              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="#banner">Bruno Pacerini Moreno</a></div>
                <div class="site-slogan">@lang('text.role')</div>
              </div>

            </div>
            <!-- header-left end -->

          </div>
          <div class="col-md-2">
            <a href="{{ url('pt')}}"><img class="flags" src="resources/images/brazil.png"></a>
            <a href="{{ url('en')}}"><img class="flags" src="resources/images/eua.png"></a>
            <a href="{{ url('sp')}}"><img class="flags" src="resources/images/spain.png"></a>
          </div>
          <div class="col-md-6">

            <!-- header-right start -->
            <!-- ================ -->
            <div class="header-right clearfix">

              <!-- main-navigation start -->
              <!-- ================ -->
              <div class="main-navigation animated">

                <!-- navbar start -->
                <!-- ================ -->
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">

                    <!-- Toggle -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#banner">Home</a></li>
                        <li><a href="#about">@lang('text.about')</a></li>
                        <li><a href="#services">@lang('text.services')</a></li>
                        <li><a href="#portfolio">@lang('text.projects')</a></li>
                        <li><a href="#contact">@lang('text.contact')</a></li>
                      </ul>
                    </div>

                  </div>
                </nav>
                <!-- navbar end -->

              </div>
              <!-- main-navigation end -->

            </div>
            <!-- header-right end -->

          </div>
        </div>
      </div>
    </header>
    <!-- header end -->