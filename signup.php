<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Signup</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Login</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Please Fillup</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="saveuser.php" method="POST" enctype='multipart/form-data'>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-5">
                        <input type="file" name="file" accept=".png,.jpg.,.gif,.jpeg" onchange="loadFile(event)" required>
                        <img id="output" width="200" height="200"/>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Firstname</label>
                        <div class="col-sm-5">
                          <input type="text" name="fname" class="form-control" id="inputName" placeholder="First Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Middle Name</label>
                        <div class="col-sm-5">
                          <input type="text" name="mname" class="form-control" id="inputEmail" placeholder="Middle Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-5">
                          <input type="text" name="lname" class="form-control" id="inputName2" placeholder="Last Name" required>
                        </div>
                      </div>
                      <br />
                      <br />
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Birthday</label>
                        <div class="col-sm-5">
                          <input type="date" class="form-control" name="birthday" id="inputExperience" placeholder="Experience" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-5">
                          <input type="text" name="address" class="form-control" id="inputSkills" placeholder="Address" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Course</label>
                        <div class="col-sm-5">
                          <input type="text" name="course" class="form-control" id="inputSkills" placeholder="Course" required>
                        </div>
                      </div>
                      <br />
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-5">
                          <input type="text" name="position" class="form-control" id="inputSkills" placeholder="Position">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-5">
                          <input type="text" name="skills" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <br />
                      <br />
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                          <input type="text" name="username" class="form-control" id="inputSkills" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                          <input type="password" name="password" class="form-control" id="inputSkills" placeholder="Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-5">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" required> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="signup" class="btn btn-info">Sign Up</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->


                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021<a href="#"> Joenell Alonzo</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
  }
</script>
</body>
</html>
