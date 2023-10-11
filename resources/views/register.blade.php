<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <title>Login</title>
</head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Welcome To Blogposts</h4>
                      </div>
      
                      <form>
                        <p>Please Register Your Account</p>
      
                        <div class="form-outline mb-4" >
                          <input type="email" id="form2Example11" class="form-control"
                            placeholder="Username, Phone or Email ID" />
                          <label class="form-label" for="form2Example11">Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="username" id="form2Example11" class="form-control"
                              placeholder="Username, Phone or Email ID" />
                            <label class="form-label" for="form2Example11">Username</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example22" class="form-control" />
                          <label class="form-label" for="form2Example22">Password</label>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <button type="button" class="btn btn-outline-danger">Create new</button>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Blog Posts</h4>
                      <p class="small mb-0">Discover Blog Posts</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>