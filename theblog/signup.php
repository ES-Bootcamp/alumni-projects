<?php require 'layouts/header.layout.php'; ?>
<?php include 'partials/navbar.partial.php'; ?>
<div class="container py-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="text-center">
                <h1>Connect to your account</h1>
                <br>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="firstname" class="form-label">First name</label>
                                <input type="text" class="form-control form-control-lg" id="firstname" name="firstname" placeholder="John">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="secret">
                    </div>
                    <div class="mb-3">
                        <label for="c_password" class="form-label">Confirm your password</label>
                        <input type="password" class="form-control form-control-lg" id="c_password" name="c_password" placeholder="confirm secret">
                    </div>
                    <div class="mb-3">
                        <div class="d-inline-block pt-3">
                            <p>Already registered? <a href="login.php">Login here</a></p>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg float-end">Create my account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'layouts/footer.layout.php'; ?>