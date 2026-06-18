  </main>

  <footer class="site-footer" role="contentinfo">
    <div class="container site-footer__inner">
      <p>&copy; <?php echo date('Y'); ?> NxtGen Tutors. All rights reserved.</p>
      <nav aria-label="Footer">
        <ul class="site-footer__links">
          <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
          <li><a href="<?php echo home_url('/privacy'); ?>">Privacy</a></li>
          <li><a href="<?php echo home_url('/terms'); ?>">Terms</a></li>
        </ul>
      </nav>
    </div>
  </footer>

  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <?php wp_footer(); ?>
</body>
</html>
