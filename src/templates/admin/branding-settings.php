<?php get_header(); ?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Admin Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="mission-control.php" class="dashboard__nav-link is-active">Mission Control</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Branding</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Header Builder</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Footer Builder</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Design System</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Demo Import</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Integrations</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Analytics</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">AI Assistant</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <h1 style="margin: var(--space-6) 0;">Admin Dashboard</h1>

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
