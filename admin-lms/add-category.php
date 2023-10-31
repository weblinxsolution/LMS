      <!--********************************** Footer ***********************************-->
      <?php include('./header.php'); ?>
      <!--********************************** Footer ***********************************-->



      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">

          <div class="row page-titles mx-0 mt-3">
              <div class="col">
                  <h4 class="card-title">Add Category</h4>
              </div>
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Course Management</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Category</a></li>
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
                                          <div class="form-group col-md-12">
                                              <label>Category Name</label>
                                              <input type="text" class="form-control" placeholder="Course Name">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                                      </div>
                                      <div class="form-row">
                                          <div class="form-group col-md-12">
                                              <label>Image</label>
                                              <input type="file" class="form-control">
                                          </div>
                                      </div>
                                      <button type="submit" class="btn btn-dark d-block ml-auto">Add Category</button>
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