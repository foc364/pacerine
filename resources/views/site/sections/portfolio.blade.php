    <div class="section">
      <div class="container">
        <h1 class="text-center title" id="portfolio">Portfolio</h1>
        <div class="separator"></div>
        <p class="lead text-center">Alguns dos trabalhos realizados.</p>
        <br>      
        <div class="row object-non-visible" data-animation-effect="fadeIn">
          <div class="col-md-12">

            <!-- isotope filters start -->
            <div class="filters text-center">
              <ul class="nav nav-pills">
               <!-- <li class="active"><a href="#" data-filter="*">All</a></li> -->
                <li class="active"><a href="#" data-filter=".bank-agencies">Agências Bancárias</a></li>
                <li><a href="#" data-filter=".project-residential">Projetos Residenciais</a></li>
                <li><a href="#" data-filter=".office">Escritórios</a></li>
                <li><a href="#" data-filter=".project-3d">Projetos 3D</a></li>
                <li><a href="#" data-filter=".project-technical">Plantas Técnicas de Projetos</a></li>
              </ul>
            </div>
            <!-- isotope filters end -->

            <div class="isotope-container row grid-space-20">

             @include('site.partials.office')

              @include('site.partials.project-residential')

             

              @include('site.partials.bank-agencies')

              @include('site.partials.project-3d')

              @include('site.partials.project-technical')
              
              
              
              
              
              

              
            </div>
            <!-- portfolio items end -->
          
          </div>
        </div>
      </div>
    </div>
    <!-- section end -->
