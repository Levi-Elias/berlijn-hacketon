<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<nav class="bottom-nav">
  <a href="index.php" class="nav-item <?= $current_page == 'index.php' ? 'active' : '' ?>">
    <span class="material-symbols-rounded">home</span>
    <span>Home</span>
  </a>
  <a href="sights.php" class="nav-item <?= $current_page == 'sights.php' ? 'active' : '' ?>">
    <span class="material-symbols-rounded">location_city</span>
    <span>Beziensw.</span>
  </a>
  <a href="activities.php" class="nav-item <?= $current_page == 'activities.php' ? 'active' : '' ?>">
    <span class="material-symbols-rounded">local_activity</span>
    <span>Acties</span>
  </a>
  <a href="info.php" class="nav-item <?= $current_page == 'info.php' ? 'active' : '' ?>">
    <span class="material-symbols-rounded">info</span>
    <span>Info</span>
  </a>
</nav>
