      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->




      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">List of Assign Lessons</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Lesson Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">List of Assign Lessons</a></li>
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
                                          <div class="form-group col-md-3">
                                              <label>Teacher Name</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Cateogry Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-3">
                                              <label>Subjects</label>
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
                                              <th>Student Name</th>
                                              <th>Questions</th>
                                              <th>Answered Questions</th>
                                              <th>Left Questions</th>
                                              <th>Review</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>John Doe</td>
                                              <td>Total Questions 8</td>
                                              <td>Answered 5</td>
                                              <td>Left 3</td>
                                              <th>
                                                  <div class="d-flex gap-2 align-items-center">
                                                        No Review
                                                  </div>
                                              </th>
                                              <td><span class="badge badge-danger text-white">Incomplete</span></td>
                                              <td>2011/01/25</td>
                                              <td>
                                                  <a href="#" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i> Remove</a>
                                                  <a href="add-review.php" class="btn btn-warning btn-sm text-white"><i class="fa fa-star"></i> Add Review</a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>John Doe</td>
                                              <td>Total Questions 8</td>
                                              <td>Answered 8</td>
                                              <td>Left 0</td>
                                              <th>
                                                  <div class="d-flex gap-2 align-items-center">
                                                      <i class="fa fa-star text-yellow"></i>
                                                      <i class="fa fa-star text-yellow"></i>
                                                      <i class="fa fa-star text-yellow"></i>
                                                      <i class="fa fa-star text-yellow"></i>
                                                  </div>
                                              </th>
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