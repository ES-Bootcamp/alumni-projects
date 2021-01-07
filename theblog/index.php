<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome to our blog</title>
</head>
<body>
    
    <?php include 'partials/navbar.partial.php'; ?>
    <div class="container">
      <div class="row pt-5">
        <div class="col">
          <h1>Latest news</h1>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col">
            <div class="card mb-3 main-card">
              <div class="row">
                <div class="col-md-4">
                  <img src="https://source.unsplash.com/random">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="row pt-5">
        <div class="col">
          <h3>More articles</h3>
        </div>
      </div>
      <div class="row pt-5">
          <div class="col">
            <div class="card mb-3">
              <div class="row">
                <div class="col-md-4">
                  <img src="https://source.unsplash.com/random">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
              <div class="row">
                <div class="col-md-4">
                  <img src="https://source.unsplash.com/random">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>

    <?php include 'partials/footer.partial.php'; ?>
    <?php require 'layouts/footer.layout.php'; ?>