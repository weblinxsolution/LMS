      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->

      <style>
          .lesson-dtls li {
              display: flex;
              align-items: center;
              margin-bottom: 6px;
          }

          .lesson-dtls li span {
              min-width: 70px;

          }
      </style>


      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Lessons Details</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Lesson Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Lessons Details</a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->

          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <!-- <div class="row align-items-center">
                                  <div class="col-lg-2">
                                      <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" width="200" class="rounded-circle overflow-hidden" alt="image">
                                  </div>
                                  <div class="col-lg-8">
                                      <h3>Lead Generations</h3>
                                      <ul class="lesson-dtls mb-0">
                                          <li><span>Course:</span> <span>Digital Marketing</span></li>
                                          <li><span>Subject:</span> <span>Facebook Marketing</span></li>
                                          <li><span>Status:</span> <span>
                                                  <div class="badge badge-success text-white">Active</div>
                                              </span></li>
                                          <li><span>Date:</span> <span>30-10-2023</span></li>
                                      </ul>
                                  </div>
                              </div> -->
                              <div class="lesson-box">
                                  <div class="media">
                                      <span class="card-widget__icon"><i class="icon-note text-dark menu-icon"></i></span>
                                      <div class="row media-body align-items-center">
                                          <div class="col">
                                              <h5 class="card-widget__subtitle text-dark">Lesson:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">Facebook Marketing</h2>
                                          </div>
                                          <!-- <div class="col">
                                              <h5 class="card-widget__subtitle text-dark">Lesson:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">Facebook Marketing</h2>
                                          </div> -->
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Students:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">20</h2>
                                          </div>
                                          <div class="col-lg-1">
                                              <h5 class="card-widget__subtitle text-dark">Questions:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">10</h2>
                                          </div>
                                          <div class="col-lg-2">
                                              <h5 class="card-widget__subtitle text-dark">Created:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">30-10-2023</h2>
                                          </div>
                                          <div class="col-lg-2">
                                              <div class="d-flex align-items-center gap-2">
                                                  <a href="#" class="btn btn-warning text-white ">Active</a>
                                                  <a href="lesson-detail.php" class="btn btn-success text-white">View Lesson</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered zero-configuration">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Student Name</th>

                                              <th>Answered Questions</th>
                                              <th>Left Questions</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>John Doe</td>

                                              <td>Answered 5</td>
                                              <td>Left 3</td>
                                              <td><span class="badge badge-danger text-white">Incomplete</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Remove</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>John Doe</td>

                                              <td>Answered 8</td>
                                              <td>Left 0</td>
                                              <td><span class="badge badge-success text-white">Completed</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Remove</a>
                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
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


      <!--********************************** Footer ***********************************-->
      <?php include('./footer.php'); ?>
      <!--********************************** Footer ***********************************-->