<?php require 'layouts/header.layout.php'; ?>
<?php include 'partials/navbar.partial.php'; ?>
<?php 
if(isset($_SESSION['errors'])){
    $errors = $_SESSION['errors'];
}
?>

<div class="container py-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-md-3">
            <div class="text-center">
                <h1>Connect to your account</h1>
                <br>
            </div>
            <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success">You are registered successfully. log in to your account</div>
            <?php endif; ?>

            <?php if(isset($_GET['prompt']) && $_GET['prompt'] == 'true'): ?>
            <div class="alert alert-warning">You have to login first!</div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <form action="src/login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input 
                            type="email" 
                            class="form-control form-control-lg <?php if(isset($errors['email'])): ?>is-invalid<?php endif;?>" 
                            id="email" 
                            name="email" 
                            placeholder="name@example.com">
                            <?php if(isset($errors['email'])): ?>
                            <small class="text-danger"><?= $errors['email'] ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input 
                            type="password" 
                            class="form-control form-control-lg <?php if(isset($errors['password'])): ?>is-invalid<?php endif;?>" 
                            id="password" 
                            name="password" 
                            placeholder="secret">
                            <?php if(isset($errors['password'])): ?>
                            <small class="text-danger"><?= $errors['password'] ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <div class="d-inline-block pt-3">
                                <p>Don't have an account? <a href="signup.php">Register here</a></p>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg float-end">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'layouts/footer.layout.php'; ?>