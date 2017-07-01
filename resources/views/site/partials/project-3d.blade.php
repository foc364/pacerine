<!-- portfolio items start -->
              @for ($i=1 ; $i <= 12 ; $i++)
              <div class="col-sm-6 col-md-3 isotope-item project-3d">
                <div class="image-box">
                  <div class="overlay-container">
                    <img src="resources/images/project-3d/3d{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
                    <a class="overlay" data-toggle="modal" data-target="#project-3d-{{ $i }}">
                      <i class="fa fa-search-plus"></i>
                      <span>Escritórios</span>
                    </a>
                  </div>
             
                </div>
                <!-- Modal -->
                <div class="modal fade" id="project-3d-{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="project-3d-{{ $i }}-label" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="project-3d-{{ $i }}-label">Escritórios</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <img class="align-center" src="resources/images/project-3d/3d{{ str_pad($i, 2, '0', STR_PAD_LEFT)  }}.jpg" alt="img">
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal end -->
              </div>
              @endfor
