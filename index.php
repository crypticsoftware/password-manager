<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Cryptic Password Manager</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Cryptic Password Manager</span>
  </nav>

  <!-- Container for input form and password viewer -->
  <div class="container-fluid">
    <!-- Row for input form and password viewer -->
    <div class="row">
      <!-- Input form column -->
      <div class="col-6">
        <!-- Input form -->
        <form method="post" id="passwordForm">
          <!-- Website name -->
          <div class="form-group">
            <label for="websiteName">Website name:</label>
            <input type="text" class="form-control" name="websiteName" id="websiteName">
          </div>
          <!-- Email -->
          <div class="form-group">
            <label for="email">Email (optional):</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <!-- Username -->
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <!-- Password -->
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
      </div>
      <!-- Password viewer column -->
      <div class="col-6">
        <!-- Password viewer -->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Website</th>
              <th scope="col">Email</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Read the cache file
            $passwords = json_decode(file_get_contents('cache/passwords.json'), true);

            // Display the passwords
            foreach ($passwords as $password) {
              echo '<tr>';
              echo '<td>' . $password['websiteName'] . '</td>';
              echo '<td>' . $password['email'] . '</td>';
              echo '<td>' . $password['username'] . '</td>';
              echo '<td>' . $password['password'] . '</td>';
              echo '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- PHP code for processing form submissions -->
  <?php
   // Check if the form has been submitted
  if (isset($_POST['submit'])) {
    // Save the password to the cache file
    $passwords = json_decode(file_get_contents('cache/passwords.json'), true);
    $passwords[] = [
      'websiteName' => $_POST['websiteName'],
      'email' => $_POST['email'],
      'username' => $_POST['username'],
      'password' => $_POST['password']
    ];
    file_put_contents('cache/passwords.json', json_encode($passwords));
  }
  ?>
</body>
</html>
