<?php include("partials/head.php"); ?>
<?php include("partials/nav.php"); ?>
<?php include("partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <?php foreach ($posts as $post) : ?>
        <li><?= $post['note'] ?></li>
      <?php endforeach; ?>
    </div>
  </main>
  <?php include("partials/foot.php"); ?>