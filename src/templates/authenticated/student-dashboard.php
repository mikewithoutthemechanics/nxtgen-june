<?php
if (!defined('ABSPATH')) { exit; }
$xbox_data = [
  'active_courses' => [1, 2, 3],
  'upcoming_lessons' => [1, 2, 3],
  'assignments_due' => [1, 2],
  'certificates_earned' => [1],
  'progress' => 72,
];
get_header();
?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Student Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="student-dashboard.php" class="dashboard__nav-link is-active">Overview</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Courses</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Lessons</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Assignments</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Progress</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Bookings</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Payments</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <h1 style="margin: var(--space-6) 0;">Welcome back, Student</h1>

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

      <h2 style="margin-bottom: var(--space-4);">Upcoming Lessons</h2>
      <div class="card" style="margin-bottom: var(--space-8);">
        <div class="card__body">
          <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 90%;"></div>
          <div class="skeleton skeleton--text" style="width: 95%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 85%;"></div>
        </div>
      </div>

      <h2 style="margin-bottom: var(--space-4);">Course Progress</h2>
      <div class="card">
        <div class="card__body">
          <div class="skeleton skeleton--image" style="height: 16rem;"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
