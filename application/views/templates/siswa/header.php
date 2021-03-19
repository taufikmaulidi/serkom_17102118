<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="assets/css/datepicker.css">
  <title><?php echo $title;?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <img src="<?php echo base_url('/assets/img/logo.png'); ?>" alt="" width="50" height="50" class="d-inline-block align-top"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ms-4">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'siswa/cekLulus' ?>">Cek Kelulusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'siswa/logout' ?>">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>