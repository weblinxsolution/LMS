      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->



      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Add Lesson</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Course Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Lesson</a></li>
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
                                          <div class="form-group col-md-6">
                                              <label>Lesson Name</label>
                                              <input type="text" class="form-control" placeholder="Lesson Name">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Course</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Course Category</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Subject</label>
                                              <select id="inputState" class="form-control">
                                                  <option selected="selected">Choose...</option>
                                                  <option>Option 1</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-6">
                                              <label>Question</label>
                                              <input type="text" class="form-control" placeholder="Question">
                                          </div>
                                          <div class="form-group col-md-6">
                                              <label>Audio</label>
                                              <input type="file" class="form-control">
                                          </div>
                                          <div class="form-row col-md-12 d-flex flex-wrap">
                                              <div class="col-lg-3">
                                                  <label for="q1" class="ml-2">Awsner 1</label>
                                                  <input type="text" name="question" id="q1" class="form-control" placeholder="Awnser 1">
                                              </div>
                                              <div class="col-lg-3">
                                                  <label for="q2" class="ml-2">Awsner 2</label>
                                                  <input type="text" name="question" id="q2" class="form-control" placeholder="Awnser 2">
                                              </div>
                                              <div class="col-lg-3">
                                                  <label for="q3" class="ml-2">Awsner 3</label>
                                                  <input type="text" name="question" id="q3" class="form-control" placeholder="Awnser 3">
                                              </div>
                                              <div class="col-lg-3">
                                                  <label for="q4" class="ml-2">Awsner 4</label>
                                                  <input type="text" name="question" id="q4" class="form-control" placeholder="Awnser 4">
                                              </div>
                                          </div>
                                      </div>
                                      <hr class="mt-0">
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Add Lesson</button>
                                  </form>
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