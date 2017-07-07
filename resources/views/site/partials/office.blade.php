<!-- portfolio items start -->
              @for ($i=1 ; $i <= 12 ; $i++)
              <div class="col-sm-6 col-md-3 isotope-item office">
                <div class="image-box img_size">
                  <div class="overlay-container">
                    <img class="img_size" src="resources/images/office/esc{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
                    <a class="overlay" data-toggle="modal" data-target="#office-{{ $i }}">
                      <i class="fa fa-search-plus"></i>
                      <span>@lang('text.offices')</span>
                    </a>
                  </div>
             
                </div>
                <!-- Modal -->
                <div class="modal fade" id="office-{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="office-{{ $i }}-label" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('text.close')</span></button>
                        <h4 class="modal-title" id="office-{{ $i }}-label">@lang('text.offices')</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <img class="align-center" src="resources/images/office/esc{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
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
