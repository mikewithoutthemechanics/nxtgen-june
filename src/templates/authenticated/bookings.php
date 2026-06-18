<?php get_header(); ?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Student Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="student-dashboard.php" class="dashboard__nav-link is-active">Dashboard</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Courses</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Lessons</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Bookings</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Payments</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Reports</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Settings</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <h1 style="margin: var(--space-6) 0;">Page Title</h1>

      <div class="card">
        <div class="card__body">
          <div class="skeleton skeleton--text" style="width: 100%;"></div>
          <div class="skeleton skeleton--text" style="width: 90%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 95%;"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
