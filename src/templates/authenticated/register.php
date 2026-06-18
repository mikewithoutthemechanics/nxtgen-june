<?php get_header(); ?>

<main id="main" class="section section--lg" role="main">
  <div class="container" style="max-width: 28rem;">
    <h1 style="text-align: center; margin-bottom: var(--space-2);">Create Account</h1>
    <p style="text-align: center; color: var(--color-text-secondary); margin-bottom: var(--space-8);">Start your learning journey</p>

    <div class="card">
      <div class="card__body">
        <form x-data="{ loading: false, success: '' }" @submit.prevent="loading = true; setTimeout(() => { loading = false; success = 'Account created! Please log in.'; }, 1200);">
          <div class="form-group">
            <label class="form-label" for="name">Full Name</label>
            <input type="text" id="name" class="form-input" placeholder="John Doe" required>
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" class="form-input" placeholder="you@example.com" required>
          </div>

          <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-input" placeholder="Create a password" required minlength="8">
            <div class="form-success" x-show="success" x-text="success"></div>
          </div>

          <button type="submit" class="btn btn--primary btn--lg" style="width: 100%; margin-top: var(--space-4);" :class="{ 'is-loading': loading }">
            <span x-show="!loading">Create Account</span>
          </button>
        </form>

        <p style="text-align: center; margin-top: var(--space-4); font-size: var(--text-small); color: var(--color-text-secondary);">
          Already have an account?
          <a href="<?php echo home_url('/login'); ?>" style="color: var(--color-academic-blue); font-weight: var(--font-medium);">Log in</a>
        </p>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
