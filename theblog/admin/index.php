<?php require '../layouts/header.layout.php'; ?>
<?php include '../partials/navbar.partial.php'; ?>
<div class="container">
  <div class="row py-4">
    <h1>Add new article</h1>
    <div class="card mt-4">
      <div class="card-title">
      </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control form-control-lg" name="title" placeholder="e.g: Lorem ipsum">
              </div>
              <div class="mb-3">
                <label for="scheduled_at" class="form-label">Schedule</label>
                <input type="date" class="form-control form-control-lg" name="scheduled_at">
              </div>
              <div class="mb-3">
                <label class="form-label">Body</label>
                <div id="editor">
                  <p>Hello World!</p>
                  <p>Some initial <strong>bold</strong> text</p>
                  <p><br></p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 pr-0">
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
              <button class="btn btn-lg btn-success">Add article</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require '../layouts/footer.layout.php'; ?>