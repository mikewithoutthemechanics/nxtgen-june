<?php get_header(); ?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Settings Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="profile-settings.php" class="dashboard__nav-link is-active">Profile</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Account</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Notifications</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Security</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <h1 style="margin: var(--space-6) 0;">Profile Settings</h1>

      <div class="card">
        <div class="card__body">
          <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 90%;"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
