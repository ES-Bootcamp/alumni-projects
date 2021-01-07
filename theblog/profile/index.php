<?php require '../layouts/header.layout.php'; ?>
<?php include '../partials/navbar.partial.php'; ?>
<div class="container">
  <div class="row py-4">
    <h1>Update profile</h1>
    <div class="card mt-4">
      <div class="card-title">
      </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-12 col-md-7">
              <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control form-control-lg" name="firstname" placeholder="John">
              </div>
              <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Doe">
              </div>
              <div class="mb-3">
                <label for="introduction" class="form-label">Introduce yourself</label>
                <textarea type="text" class="form-control form-control-lg" name="introduction" placeholder="My name is..." rows="4"></textarea>
              </div>
            </div>
            <div class="col-sm-12 col-md-5 pr-0">
              <div class="upload h-100">
                <label for="photo" class="form-label upload-label text-center">
                  <span class="v-center">Choose a picture</span>
                </label>
                <input type="file" class="upload-control" name="photo" id="photo">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col pt-4">
              <button class="btn btn-lg btn-success">Update profile</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require '../layouts/footer.layout.php'; ?>