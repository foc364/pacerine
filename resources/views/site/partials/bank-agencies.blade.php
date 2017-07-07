<!-- portfolio items start -->
              @for ($i=2 ; $i <= 9 ; $i++)
              <div class="col-sm-6 col-md-3 isotope-item bank-agencies">
                <div  class="image-box img_size">
                  <div class="overlay-container">
                    <img class="img_size" src="resources/images/bank-agencies/ag{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
                    <a class="overlay" data-toggle="modal" data-target="#bank-agencies-{{ $i }}">
                      <i class="fa fa-search-plus"></i>
                      <span>@lang('text.bank_agencies')</span>
                    </a>
                  </div>
             
                </div>
                <!-- Modal -->
                <div class="modal fade" id="bank-agencies-{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="bank-agencies-{{ $i }}-label" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('text.close')</span></button>
                        <h4 class="modal-title" id="bank-agencies-{{ $i }}-label">@lang('text.bank_agencies')</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <img class="align-center" src="resources/images/bank-agencies/ag{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
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
