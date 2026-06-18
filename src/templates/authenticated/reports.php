<?php get_header(); ?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Reports Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="reports.php" class="dashboard__nav-link is-active">Reports</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Progress</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Attendance</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Export</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <h1 style="margin: var(--space-6) 0;">Reports</h1>

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
