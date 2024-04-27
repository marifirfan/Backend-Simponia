<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Simponia</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Custom styles */
    body {
      font-family: 'Montserrat', sans-serif;
      background: radial-gradient(circle, #101D37, #1B3E84);
      color: #15264A;
      padding-bottom: 50px;
    }
    .dashboard-container {
      max-width: 800px;
      margin: auto;
      margin-top: 50px;
    }
    .rounded-content {
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      padding: 20px;
      text-align: left;
    }
    .portfolio-category-container {
      margin-top: 50px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
    }
    .portfolio-card {
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- Include Navbar -->
  @include('partials.navbar')

  <!-- Dashboard Content -->
  <div class="container dashboard-container">

    <!-- Dashboard Section -->
    <div class="rounded-content">
      <h2>Dashboard</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque suscipit odio delectus vero voluptatem dolorum ratione harum quibusdam saepe, perspiciatis et porro velit ipsam possimus facilis quis modi maiores accusamus.</p>
    </div>

    <!-- Portfolio Categories Section -->
    <div class="portfolio-category-container">
      <h4>Kategori Portfolio</h4>
      <div class="row">
        <!-- Portfolio Cards -->
        <div class="col-md-4">
          <div class="portfolio-card">
            <!-- Card content goes here (initially empty) -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-card">
            <!-- Card content goes here (initially empty) -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="portfolio-card">
            <!-- Card content goes here (initially empty) -->
          </div>
        </div>
      </div>
    </div>

    <!-- Backend Data Section -->
    <div class="mt-5">
      <div class="container bg-white p-4">
        <h4>Kategori Portfolio</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Kategori</th>
              <th scope="col">Tahun</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Backend data goes here (initially empty) -->
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
