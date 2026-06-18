<?php get_header(); ?>

<main id="main" class="section section--lg" role="main">
  <div class="container" style="max-width: 28rem;">
    <h1 style="text-align: center; margin-bottom: var(--space-2);">Welcome Back</h1>
    <p style="text-align: center; color: var(--color-text-secondary); margin-bottom: var(--space-8);">Log in to your account</p>

    <div class="card">
      <div class="card__body">
        <form x-data="{ loading: false, error: '', success: '' }" @submit.prevent="loading = true; setTimeout(() => { loading = false; success = 'Logged in successfully!'; }, 1200);">
          <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" class="form-input" placeholder="you@example.com" required>
          </div>

          <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-input" placeholder="Enter your password" required>
          </div>

          <div class="form-error" x-show="error" x-text="error"></div>
          <div class="form-success" x-show="success" x-text="success"></div>

          <button type="submit" class="btn btn--primary btn--lg" style="width: 100%; margin-top: var(--space-4);" :class="{ 'is-loading': loading }">
            <span x-show="!loading">Log In</span>
          </button>
        </form>

        <p style="text-align: center; margin-top: var(--space-4); font-size: var(--text-small);">
          <a href="#" style="color: var(--color-academic-blue);">Forgot password?</a>
        </p>

        <hr style="border: none; border-top: 1px solid var(--color-border); margin: var(--space-6) 0;">

        <p style="text-align: center; font-size: var(--text-small); color: var(--color-text-secondary);">
          Don't have an account?
          <a href="<?php echo home_url('/register'); ?>" style="color: var(--color-academic-blue); font-weight: var(--font-medium);">Create one</a>
        </p>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
