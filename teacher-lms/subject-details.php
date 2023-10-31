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
                  <h4 class="card-title">Subject Details</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Subject Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Subject Details</a></li>
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
                                              <h5 class="card-widget__subtitle text-dark">Subject:</h5>
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
                                              <h5 class="card-widget__subtitle text-dark">Lessons:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">10</h2>
                                          </div>
                                          <div class="col-lg-2">
                                              <h5 class="card-widget__subtitle text-dark">Created:</h5>
                                              <h2 class="card-widget__title mb-0 text-dark">30-10-2023</h2>
                                          </div>
                                          <div class="col-lg-2">
                                              <div class="d-flex align-items-center gap-2">
                                                  <a href="#" class="btn btn-warning text-white ">Active</a>
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
                                  <h3>Students</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Profile</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Number</th>
                                              <th>DOB</th>
                                              <th>Age</th>
                                              <th>Gender</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&amp;s=170667a&amp;w=0&amp;k=20&amp;c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td>+92 3542352434</td>
                                              <td>2000/05/25</td>
                                              <td>16</td>
                                              <td>Male</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&amp;s=170667a&amp;w=0&amp;k=20&amp;c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td>+92 3542352434</td>
                                              <td>2000/05/25</td>
                                              <td>16</td>
                                              <td>Female</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Lessons</h3>
                                  <table class="table table-striped table-bordered zero-configuration">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Course</th>
                                              <th>Subject</th>
                                              <th>Lesson</th>
                                              <th>Date</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>Digital Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>Facebook Lead</td>
                                              <td>2011/01/25</td>
                                              <td><span class="badge badge-warning text-white">Active</span></td>
                                              <td>
                                                  <a href="lesson-detail.php" class="btn btn-success btn-sm text-white"> View Lesson</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>Digital Marketing</td>
                                              <td>Lead Generation</td>
                                              <td>Facebook Lead</td>
                                              <td>2011/01/25</td>
                                              <td><span class="badge badge-warning text-white">Active</span></td>
                                              <td>
                                                  <a href="lesson-detail.php" class="btn btn-success btn-sm text-white"> View Lesson</a>
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