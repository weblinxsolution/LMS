      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->


      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Students Profile</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Student Managements</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Student Profile</a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->


          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-body row d-flex align-items-center">
                                      <div class="text-center col-lg-2">
                                          <img alt="" class="rounded-circle mt-4" src="images/users/5.jpg">
                                          <h6 class="card-widget__title text-dark mt-3">Deangelo Sena</h6>
                                          <p class="text-muted">Senior Teacher</p>
                                      </div>
                                      <div class="col-lg-10 border-0 bg-transparent">
                                          <div class="row">
                                              <div class="col-lg-4 pt-3">
                                                  <ul class="std-details">
                                                      <li><span class="font-weight-bold">Student Name:</span><span>John Doe</span></li>
                                                      <li><span class="font-weight-bold">Email:</span><span> JohnDoe@gmail.com</span></li>
                                                      <li><span class="font-weight-bold">Phone:</span><span>+92-3432-4345</span></li>
                                                  </ul>
                                              </div>
                                              <div class="col-lg-4 pt-3">
                                                  <ul class="std-details">
                                                      <li><span class="font-weight-bold">Age:</span><span>16 Year</span></li>
                                                      <li><span class="font-weight-bold">Gendar:</span><span> Femail</span></li>
                                                      <li><span class="font-weight-bold">Date of Birth:</span><span>1-2-2003</span></li>
                                                  </ul>
                                              </div>
                                              <div class="col-lg-4 pt-3">
                                                  <ul class="std-details">
                                                      <li><span class="font-weight-bold">Fathers Name:</span><span>Leon Doe</span></li>
                                                      <li><span class="font-weight-bold">Address:</span><span> Pakistan</span></li>
                                                      <li><span class="font-weight-bold">City:</span><span>Karachi</span></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="basic-form">
                                  <form>
                                      <div class="form-row">
                                          <div class="form-group col-md-4">
                                              <label>Category</label>
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
                                          <div class="col-lg-12">
                                              <button type="submit" class="btn btn-dark d-block ml-auto">Filter</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Ongoing Courses</h3>
                                  <div class="table-responsive">
                                      <table class="table table-striped table-bordered ">
                                          <thead>
                                              <tr>
                                                  <th>#iD</th>
                                                  <th>Name</th>
                                                  <th>Course</th>
                                                  <th>Course Category</th>
                                                  <th>Subject</th>
                                                  <th>Status</th>
                                                  <th>Date</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>32463</td>
                                                  <td>Meta Tags</td>
                                                  <td>Digital Marketing</td>
                                                  <td>Marketing</td>
                                                  <td>Facebook</td>
                                                  <td><span class="badge badge-success text-white">Active</span></td>
                                                  <td>2011/01/25</td>
                                              </tr>
                                              <tr>
                                                  <td>32463</td>
                                                  <td>Meta Tags</td>
                                                  <td>Digital Marketing</td>
                                                  <td>Marketing</td>
                                                  <td>Facebook</td>
                                                  <td><span class="badge badge-success text-white">Active</span></td>
                                                  <td>2011/01/25</td>
                                              </tr>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Completed Courses</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Name</th>
                                              <th>Course</th>
                                              <th>Course Category</th>
                                              <th>Subject</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>Meta Tags</td>
                                              <td>Digital Marketing</td>
                                              <td>Marketing</td>
                                              <td>Facebook</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>Meta Tags</td>
                                              <td>Digital Marketing</td>
                                              <td>Marketing</td>
                                              <td>Facebook</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Subjects</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Name</th>
                                              <th>Category</th>
                                              <th>Course</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>Lead Generation</td>
                                              <td>Facebook Marketing</td>
                                              <td>Digital Marketing</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>Lead Generation</td>
                                              <td>Facebook Marketing</td>
                                              <td>Digital Marketing</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body">
                              <div class="table-responsive">
                                  <h3>Lessons</h3>
                                  <table class="table table-striped table-bordered">
                                      <thead>
                                          <tr>
                                              <th>#iD</th>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>32463</td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
                                          </tr>
                                          <tr>
                                              <td>32463</td>
                                              <td>Donna Snider</td>
                                              <td>example@gmail.com</td>
                                              <td><span class="badge badge-success text-white">Active</span></td>
                                              <td>2011/01/25</td>
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