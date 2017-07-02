<!-- portfolio items start -->
              @for ($i=1 ; $i <= 14 ; $i++)
              <div class="col-sm-6 col-md-3 isotope-item project-technical">
                <div class="image-box">
                  <div class="overlay-container">
                    <img src="resources/images/project-technical/plant{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
                    <a class="overlay" data-toggle="modal" data-target="#project-technical-{{ $i }}">
                      <i class="fa fa-search-plus"></i>
                      <span>@lang('text.project_technical')</span>
                    </a>
                  </div>
             
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-technical-{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="project-technical-{{ $i }}-label" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('text.close')</span></button>
                        <h4 class="modal-title" id="project-technical-{{ $i }}-label">@lang('text.project_technical')</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <img class="align-center" src="resources/images/project-technical/plant{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">@lang('text.close')</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal end -->
              </div>
              @endfor
