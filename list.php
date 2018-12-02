<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">Hidden brand</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
</header>
<a href="?id=0">Add item</a>
<table border=1>
    <tr>
        <td><b>date</b></td>
        <td><b>name</b></td>
        <td><b>kpowner</b></td>
        <td><b>phone</b></td>
        <td><b>address</b></td>
        <td><b>percentage</b></td>
        <td><b>acctype</b></td>
        <td><b>haul</b></td>
        <td><b>tujuan</b></td>
        <td><b>amount</b></td>
        <td><b>consultantid</b></td>
        <td><b>method</b></td>
        <td><b>asnafLuar</b></td>
        <td><b>status</b></td>
        <td><b>...</b></td>
    </tr>
    <?php foreach ($LIST as $row): ?>
        <tr>
            <td><?=e($row['date'])?></td>
            <td><?=e($row['name'])?></td>
            <td><?=e($row['kpowner'])?></td>
            <td><?=e($row['phone'])?></td>
            <td><?=e($row['address'])?></td>
            <td><?=e($row['percentage'])?></td>
            <td><?=e($row['acctype'])?></td>
            <td><?=e($row['haul'])?></td>
            <td><?=e($row['tujuan'])?></td>
            <td><?=e($row['amount'])?></td>
            <td><?=e($row['consultantid'])?></td>
            <td><?=e($row['method'])?></td>
            <td><?=e($row['asnafLuar'])?></td>
            <td><?=e($row['status'])?></td>
            <td><a href="?id=<?=e($row['id'])?>">Edit</a></td>
        </tr>
    <?php endforeach ?>
</table>
<!-- Footer -->
<footer class="page-footer pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
          </li>
          <li>
              <a href="#!">Link 2</a>
          </li>
          <li>
              <a href="#!">Link 3</a>
          </li>
      </ul>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
      </li>
      <li>
          <a href="#!">Link 2</a>
      </li>
      <li>
          <a href="#!">Link 3</a>
      </li>
  </ul>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3"><a href="http://bezrukavnikov.ru">bezrukavnikov.ru</a> © 2018
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>