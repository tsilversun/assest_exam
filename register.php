<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <section class="vh-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-primary text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                    <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="name" name="name" id="name" class="form-control form-control-lg">
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" />
                        <label class="form-label" for="email">Email Address</label>
                    </div>

                    <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" />
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <div data-mdb-input-init class="form-outline form-white mb-4">
                        <input type="password" name="cpassword" id="cpassword" class="form-control form-control-lg" />
                        <label class="form-label" for="cpassword">Confirm Password</label>
                    </div>
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" id="btn-reg">Submit</button>
                    <div>
                    <p class="mb-0">Already Have an Account <a href="index.php" class="text-white-50 fw-bold">Sign Up</a>
                    </p>

                    <p class="mb-0">Thank you for registering</p>
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" id="btn-page">Continue</button>
                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

     <!-- MDB -->
     <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
    ></script>
    <script src="./assets/jquery.js"></script>
    <script src="./assets/register.js"></script>
</body>
</html>