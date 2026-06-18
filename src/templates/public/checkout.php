<?php get_header(); ?>

<main id="main" class="section section--lg" role="main">
  <div class="container">
    <h1 class="section__title">Checkout</h1>

    <div class="grid grid--2" style="gap: var(--space-8);">
      <div>
        <div class="card" style="margin-bottom: var(--space-6);">
          <div class="card__header"><h3>Billing Details</h3></div>
          <div class="card__body">
            <div class="form-group">
              <label class="form-label">Student Name</label>
              <input type="text" class="form-input" placeholder="Full name">
            </div>
            <div class="form-group">
              <label class="form-label">Grade</label>
              <select class="form-select"><option>Grade 10</option><option>Grade 11</option></select>
            </div>
            <div class="form-group">
              <label class="form-label">Parent Email</label>
              <input type="email" class="form-input" placeholder="parent@example.com">
            </div>
            <div class="form-group">
              <label class="form-label">Payment Method</label>
              <select class="form-select"><option>Card</option><option>EFT</option></select>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="card" style="position: sticky; top: var(--space-6);">
          <div class="card__header"><h3>Order Summary</h3></div>
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
            <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
            <div class="skeleton skeleton--text" style="width: 60%; margin-bottom: var(--space-4);"></div>
            <hr style="border: none; border-top: 1px solid var(--color-border); margin: var(--space-4) 0;">
            <div class="skeleton skeleton--title" style="width: 40%;"></div>
          </div>
          <div class="card__footer">
            <button class="btn btn--primary btn--lg" style="width: 100%;">Pay Now</button>
            <p style="text-align: center; font-size: var(--text-small); color: var(--color-text-secondary); margin-top: var(--space-2);">
              Secure checkout powered by PayFast
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
