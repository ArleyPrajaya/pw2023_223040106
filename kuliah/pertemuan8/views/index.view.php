

  <!-- NAVBAR START -->
    <?php require('partials/header.php'); ?>
    <?php require('partials/nav.php'); ?>

    <!-- NAVBAR END -->

      <div class="container">
        <h1>Halaman Home</h1>

        <h3>Daftar Mahasiswa</h3>

        <?php foreach($students as $student) :?>
          <ul>
            <li>Nama : <?=  $student["nama"];  ?></li>
            <li>NPM : <?= $student["npm"]; ?></li>
            <li>Email : <?= $student["email"];  ?></li>
        </ul>
        <?php endforeach; ?>


      </div>


      <!-- FOOTER START -->
      
<?php require('partials/footer.php'); ?>

      <!-- FOOTER STOP -->