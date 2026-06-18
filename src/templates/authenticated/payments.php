<?php get_header(); ?>

<main id="main" class="dashboard" role="main">
  <aside class="dashboard__sidebar" aria-label="Payments Menu">
    <nav>
      <ul class="dashboard__nav">
        <li class="dashboard__nav-item"><a href="payments.php" class="dashboard__nav-link is-active">Payments</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">History</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Invoices</a></li>
        <li class="dashboard__nav-item"><a href="#" class="dashboard__nav-link">Settings</a></li>
      </ul>
    </nav>
  </aside>

  <div class="dashboard__main">
    <div class="container">
      <h1 style="margin: var(--space-6) 0;">Payments</h1>

      <div class="card">
        <div class="card__body">
          <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 95%;"></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
