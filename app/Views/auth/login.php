<!-- Outer Row -->
<div class="row justify-content-center">
  <div class="col-xl-9 col-lg-9 col-md-10">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Now!</h1>
              </div>
              <?= $this->session->flashdata('message'); ?>
              <!-- Form -->
              <form class="user" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="email" value="<?= set_value('name') ?>" id="email" placeholder="Enter Email Address">
                  <?= form_error('email', '<small class="text-danger pl-2 ">', '</small>') ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Enter Password">
                  <?= form_error('password', '<small class="text-danger pl-2 ">', '</small>') ?>
                </div>
                <button type="submit" href="index.html" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
              </form>

              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>