<section class="vh-100">
<link rel="stylesheet" href="login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
        

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="CekLogin.php">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing  : 1px;">Log in</h3>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="Username" class="form-control form-control-lg" name="username" />
              <label class="form-label" for="Username">Username</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="Password" class="form-control form-control-lg" name="password"/>
              <label class="form-label" for="Password">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!"></a></p>
            <p><a href="#!" class="link-info"></a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>