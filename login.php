<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Masyamrif Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Masukkan alamat email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Masukkan password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Belum Mendaftar? <a href="index.php">Daftar Sekarang</a></div>
    </section>
  </div>

  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>

</body>

</html>