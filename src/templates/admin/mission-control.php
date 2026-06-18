<?php get_header(); ?>

<main id="main" class="section section--lg" role="main">
  <div class="container">
    <h1 class="section__title">Mission Control</h1>
    <p style="color: var(--color-text-secondary); margin-bottom: var(--space-8);">Configure your platform settings.</p>

    <div class="grid grid--2" style="gap: var(--space-8);">
      <aside class="mission-control__sidebar">
        <nav>
          <ul>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">General</a></li>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">Branding</a></li>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">Typography</a></li>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">Colors</a></li>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">Header</a></li>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">Footer</a></li>
            <li><a href="#" class="btn btn--ghost" style="width: 100%;">Demo Import</a></li>
          </ul>
        </nav>
      </aside>

      <div class="mission-control__panel">
        <div class="card" style="margin-bottom: var(--space-6);">
          <div class="card__header"><h3>General Settings</h3></div>
          <div class="card__body">
            <div class="form-group">
              <label class="form-label" for="site-title">Site Title</label>
              <input type="text" id="site-title" class="form-input" value="NxtGen Tutors">
            </div>
            <div class="form-group">
              <label class="form-label" for="site-tagline">Tagline</label>
              <input type="text" id="site-tagline" class="form-input" value="Find the perfect tutor for every subject.">
            </div>
          </div>
          <div class="card__footer" style="display: flex; gap: var(--space-2); justify-content: flex-end;">
            <button class="btn btn--ghost">Reset</button>
            <button class="btn btn--primary">Save Changes</button>
          </div>
        </div>

        <div class="card">
          <div class="card__header"><h3>Brand Colors</h3></div>
          <div class="card__body">
            <div class="grid grid--2">
              <div class="form-group">
                <label class="form-label">Primary Navy</label>
                <input type="color" class="form-input" value="#071827" style="height: 3rem; padding: var(--space-1);">
              </div>
              <div class="form-group">
                <label class="form-label">Primary Emerald</label>
                <input type="color" class="form-input" value="#10B981" style="height: 3rem; padding: var(--space-1);">
              </div>
            </div>
          </div>
          <div class="card__footer" style="display: flex; gap: var(--space-2); justify-content: flex-end;">
            <button class="btn btn--primary">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
