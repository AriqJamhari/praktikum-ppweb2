<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container mt-5">
        <h2>Selamat Datang Di Perpustakaan Nurul Fikri</h2>
    </div>
</body>
<form method="post" action="kunjungan.php">
  <div class="form-group row">
    <label for="Fullname" class="col-6 col-form-label">Nama Lengkap</label> 
    <div class="col-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Fullname" name="fullname" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-6 col-form-label">Email</label> 
    <div class="col-6">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Message" class="col-6 col-form-label">Keperluan</label> 
    <div class="col-6">
      <textarea id="Message" name="message" cols="40" rows="5" class="form-control" required="required"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-6 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</html>