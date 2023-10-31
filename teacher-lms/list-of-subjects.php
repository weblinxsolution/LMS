      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Subjects Management</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Course Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Subjects Management </a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->

          <div class="container-fluid">
              <div class="row">
                  <!-- <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="basic-form">
                                  <form>
                                      <div class="form-row">
                                          <div class="form-group col-md-4">
                                              <label>Lessons</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-4">
                                              <label>Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-4">
                                              <label>Subject</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Filter</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div> -->

                  <!-- <div class="col-12">
                      <div class="row py-3">
                          <div class="col">
                              <h3 class="card-title">List of Subjects</h3>
                          </div>
                      </div>
                  </div> -->
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="basic-form">
                                  <form>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>From</label>
                                              <input type="date" class="form-control">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>To</label>
                                              <input type="date" class="form-control">
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Filter</button>
                                  </form>
                              </div>
                              <div class="subject-listing mt-4">
                                  <div class="media py-4 border-bottom">
                                      <span class="card-widget__icon"><i class="icon-note text-dark menu-icon"></i></span>
                                      <div class="row media-body align-items-center">
                                          <div class="col">
                                              <h5 class="card-widget__subtitle text-dark">Course:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">Digital Marketing</h2>
                                          </div>
                                          <div class="col">
                                              <h5 class="card-widget__subtitle text-dark">Subject:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">Lead Generation</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Lessons:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">20</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Sessions:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">30</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Students:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">300</h2>
                                          </div>
                                          <div class="col-lg-2">
                                              <div class="d-flex align-items-center gap-2">
                                                  <a href="subject-details.php" class="btn btn-warning text-white btn-sm ">Details</a></a>
                                                  <a href="#" class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#exampleModalCenter">Go to Live</a></a>
                                              </div>
                                              <p class="mt-2">Created: 30-10-2023</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="media py-4 border-bottom">
                                      <span class="card-widget__icon"><i class="icon-note text-dark menu-icon"></i></span>
                                      <div class="row media-body align-items-center">
                                          <div class="col">
                                              <h5 class="card-widget__subtitle text-dark">Course:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">Digital Marketing</h2>
                                          </div>
                                          <div class="col">
                                              <h5 class="card-widget__subtitle text-dark">Subject:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">Lead Generation</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Lessons:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">20</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Sessions:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">30</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Students:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">300</h2>
                                          </div>
                                          <div class="col-lg-2">
                                              <div class="d-flex align-items-center gap-2">
                                                  <a href="subject-details.php" class="btn btn-warning text-white btn-sm ">Details</a></a>
                                                  <a href="#" class="btn btn-success btn-sm text-white" data-toggle="modal" data-target="#exampleModalCenter">Go to Live</a></a>
                                              </div>
                                              <p class="mt-2">Created: 30-10-2023</p>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #/ container -->
      </div>
      <!--**********************************
            Content body end
        ***********************************-->

      <div class="modal fade" id="exampleModalCenter">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <h3 class="text-center py-3">Do you want to Continue</h3>
                      <div class="p-3 d-flex align-items-center gap-2 justify-content-center">
                          <button type="button" class="btn btn-secondary text-white px-5" data-dismiss="modal">Yes</button>
                          <button type="button" class="btn btn-primary text-white px-5">No</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>

      <!--********************************** Footer ***********************************-->
      <?php include('./footer.php'); ?>
      <!--********************************** Footer ***********************************-->