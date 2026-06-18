<?php get_header(); ?>

<main id="main" class="section section--lg" role="main">
  <div class="container">
    <h1 class="section__title">Book a Lesson</h1>
    <p style="color: var(--color-text-secondary);">Complete the steps below to book your lesson.</p>

    <div class="grid grid--2" style="gap: var(--space-8); margin-top: var(--space-8);">
      <div class="booking__steps">
        <div class="card" style="margin-bottom: var(--space-4);">
          <div class="card__header"><h3>1. Select Lesson Type</h3></div>
          <div class="card__body">
            <div class="form-group">
              <label class="form-label">Lesson Type</label>
              <select class="form-select">
                <option>One-on-One Tutoring</option>
                <option>Group Session</option>
                <option>Exam Prep</option>
              </select>
            </div>
          </div>
        </div>

        <div class="card" style="margin-bottom: var(--space-4);">
          <div class="card__header"><h3>2. Select Date</h3></div>
          <div class="card__body">
            <input type="date" class="form-input">
          </div>
        </div>

        <div class="card" style="margin-bottom: var(--space-4);">
          <div class="card__header"><h3>3. Select Time</h3></div>
          <div class="card__body">
            <input type="time" class="form-input">
          </div>
        </div>

        <div class="card" style="margin-bottom: var(--space-4);">
          <div class="card__header"><h3>4. Confirm Details</h3></div>
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 100%;"></div>
            <div class="skeleton skeleton--text" style="width: 80%;"></div>
          </div>
        </div>

        <div class="card">
          <div class="card__header"><h3>5. Pay</h3></div>
          <div class="card__body">
            <button class="btn btn--primary btn--lg" style="width: 100%;">Proceed to Checkout</button>
          </div>
        </div>
      </div>

      <aside class="booking__summary">
        <div class="card" style="position: sticky; top: var(--space-6);">
          <div class="card__header"><h3>Tutor Summary</h3></div>
          <div class="card__body" style="display: flex; gap: var(--space-3); align-items: center; margin-bottom: var(--space-4);">
            <div class="skeleton skeleton--avatar" style="width: 3.5rem; height: 3.5rem;"></div>
            <div>
              <div class="skeleton skeleton--text" style="width: 8rem;"></div>
              <div class="skeleton skeleton--text" style="width: 5rem;"></div>
            </div>
          </div>
          <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 60%;"></div>
        </div>
      </aside>
    </div>
  </div>
</main>

<?php get_footer(); ?>
