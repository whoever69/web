<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi Rental</title>
    <!-- Tambahkan CSS Bootstrap atau stylesheet sesuai kebutuhan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h3>Form signup Rental</h3>

    <form method="post" action="login_submit.php">
        <!-- Email -->
        <div class="form-group">
        <i class="fas fa-envelope position-absolute"></i><input type="text" class="form-control" placeholder="username_rakhi" name="username_rakhi" required>
          
        </div>

        <!-- Password -->
        <div class="form-group">
        <i class="fas fa-lock"></i> <input type="password" class="form-control" placeholder="Password_rakhi" name="password_rakhi" required>
  
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary login-btn" name="submit">Login</button>
    </form>

    <!-- Link untuk Register -->
    <div class="register-link">
        Tidak Punya Akun? <a href="signup.php">Register</a>
    </div>

  </div>


</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<!-- Tambahkan script untuk menghitung total bayar -->
<script>
    document.getElementById('lama-rental').addEventListener('input', function() {
        var lamaRental = parseInt(this.value);
        var hargaPerHari = 400000;  // Harga per hari yang tetap
        var totalBayar = lamaRental * hargaPerHari;
        document.getElementById('total-bayar').value = totalBayar.toLocaleString();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
