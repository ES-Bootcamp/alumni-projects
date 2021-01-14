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
            <form action="<?= htmlspecialchars('src/signup.php') ?>" method="POST">            
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="firstname" class="form-label">First name</label>
                                    <input 
                                    type="text" 
                                    class="form-control form-control-lg <?php if(isset($errors['firstname'])): ?> is-invalid <?php endif; ?>" id="firstname" 
                                    name="firstname" 
                                    placeholder="John">
                                    <?php if(isset($errors['firstname'])): ?>
                                    <small class="text-danger">
                                        <?= $errors['firstname'] ?>
                                    </small>
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="lastname" class="form-label">Last name</label>
                                    <input 
                                        type="text" 
                                        class="form-control form-control-lg <?php if(isset($errors['lastname'])): ?> is-invalid <?php endif; ?>" 
                                        id="lastname" 
                                        name="lastname" 
                                        placeholder="Doe">
                                        <?php if(isset($errors['lastname'])): ?>
                                        <small class="text-danger">
                                            <?= $errors['lastname'] ?>
                                        </small>
                                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input 
                            type="email" 
                            class="form-control form-control-lg <?php if(isset($errors['email'])): ?> is-invalid <?php endif; ?>" 
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
                            class="form-control form-control-lg <?php if(isset($errors['password'])): ?> is-invalid <?php endif; ?>" 
                            id="password" 
                            name="password" 
                            placeholder="secret">
                            <?php if(isset($errors['password'])): ?>
                            <small class="text-danger"><?= $errors['password'] ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="c_password" class="form-label">Confirm your password</label>
                            <input 
                            type="password" 
                            class="form-control form-control-lg <?php if(isset($errors['c_password'])): ?> is-invalid <?php endif; ?>" 
                            id="c_password" 
                            name="c_password" 
                            placeholder="confirm secret">
                            <?php if(isset($errors['c_password'])): ?>
                            <small class="text-danger"><?= $errors['c_password'] ?></small>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <div class="d-inline-block pt-3">
                                <p>Already registered? <a href="login.php">Login here</a></p>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg float-end">Create my account</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require 'layouts/footer.layout.php'; ?>