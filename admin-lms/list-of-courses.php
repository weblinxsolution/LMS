      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">List of Courses</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">List of Courses </a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->

          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="basic-form">
                                  <form>
                                      <div class="form-row">
                                          <div class="form-group col-md-4">
                                              <label>Category Course</label>
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
                                              <label>Level</label>
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
                  </div>
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered zero-configuration">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Image</th>
                                              <th>Title</th>
                                              <th>Description</th>
                                              <th>Category</th>
                                              <th>Level</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Computer</td>
                                              <td style="width: 250px;white-space:normal;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias ab neque veritatis earum exercitationem doloremque</td>
                                              <td>Digital Marketing</td>
                                              <th>10</th>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                  <a href="edit-course.php" class="btn btn-secondary btn-sm text-white">Edit</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>
                                                  <img src="https://media.istockphoto.com/id/1473711199/photo/face-portrait-student-and-man-in-university-ready-for-back-to-school-learning-goals-or.webp?b=1&s=170667a&w=0&k=20&c=RrvtNNmwGSJQn58gdYYM3xP-IVUIdKj29G4aJw-jJsE=" class="user-profile" alt="">
                                              </td>
                                              <td>Computer</td>
                                              <td style="width: 250px;white-space:normal;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias ab neque veritatis earum exercitationem doloremque</td>
                                              <td>Digital Marketing</td>
                                              <th>10</th>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                  <a href="edit-course.php" class="btn btn-secondary btn-sm text-white">Edit</a>
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