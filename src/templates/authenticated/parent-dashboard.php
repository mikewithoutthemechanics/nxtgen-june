<?php
if (!defined('ABSPATH')) { exit; }
get_header();
?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Parent Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="parent-dashboard.php" class="dashboard__nav-link is-active">Overview</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Children</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Progress</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Attendance</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Bookings</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Invoices</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Reports</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Messages</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <div style="display: flex; justify-content: space-between; align-items: center; margin: var(--space-6) 0; flex-wrap: wrap; gap: var(--space-3);">
        <h1>Parent Dashboard</h1>
        <select class="form-select" style="width: auto;" aria-label="Select child">
          <option>John Doe — Grade 10</option>
          <option>Jane Doe — Grade 8</option>
        </select>
      </div>

      <div class="grid grid--4" style="margin-bottom: var(--space-8);">
        <div class="card">
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 70%;"></div>
            <div class="skeleton skeleton--title" style="width: 40%;"></div>
          </div>
        </div>
        <div class="card">
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 70%;"></div>
            <div class="skeleton skeleton--title" style="width: 40%;"></div>
          </div>
        </div>
        <div class="card">
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 70%;"></div>
            <div class="skeleton skeleton--title" style="width: 40%;"></div>
          </div>
        </div>
        <div class="card">
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 70%;"></div>
            <div class="skeleton skeleton--title" style="width: 40%;"></div>
          </div>
        </div>
      </div>

      <h2 style="margin-bottom: var(--space-4);">Academic Progress</h2>
      <div class="card" style="margin-bottom: var(--space-8);">
        <div class="card__body">
          <div class="skeleton skeleton--image" style="height: 14rem;"></div>
        </div>
      </div>

      <h2 style="margin-bottom: var(--space-4);">Recent Invoices</h2>
      <div class="card">
        <div class="card__body">
          <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 95%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 90%;"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
