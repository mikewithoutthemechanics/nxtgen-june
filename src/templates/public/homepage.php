@extends('templates.public.header')

@section('content')
<section class="hero section section--lg">
  <div class="container grid grid--2">
    <div class="hero__content">
      <span class="badge badge--primary" style="margin-bottom: var(--space-4);">Trusted tutors across South Africa</span>
      <h1>Find the Perfect Tutor<br>For Every Subject, Grade & Learning Goal</h1>
      <p class="hero__subtitle" style="font-size: var(--text-body); color: var(--color-text-secondary); margin-top: var(--space-4);">
        Expert tutors for Maths, Science, English, Coding and more. Online or in-person.
      </p>

      <form class="hero__search" x-data="{ query: '' }" style="margin-top: var(--space-6);">
        <div class="grid grid--2" style="gap: var(--space-3);">
          <div class="search-input-wrapper">
            <svg class="search-input-wrapper__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            <input type="text" class="form-input" placeholder="Subject / Grade / Location" x-model="query" aria-label="Search tutors">
            <button type="button" class="search-input-wrapper__clear" aria-label="Clear search">&times;</button>
          </div>
          <button type="submit" class="btn btn--primary btn--lg">Find Tutor</button>
        </div>
        <button type="button" class="btn btn--outline" style="margin-top: var(--space-3);">Become a Tutor</button>
      </form>

      <div class="hero__stats" style="display: flex; gap: var(--space-6); margin-top: var(--space-8); flex-wrap: wrap;">
        <div><strong>500+</strong> Tutors</div>
        <div><strong>10,000+</strong> Students</div>
        <div><strong>25,000+</strong> Lessons</div>
        <div><strong>9</strong> Provinces</div>
      </div>
    </div>

    <div class="hero__visual" style="position: relative; display: flex; align-items: center; justify-content: center; min-height: 24rem;">
      <div class="card card--glass" style="position: absolute; right: var(--space-8); top: var(--space-6); width: 16rem;">
        <div class="skeleton skeleton--avatar" style="margin-bottom: var(--space-2);"></div>
        <div class="skeleton skeleton--text" style="width: 80%;"></div>
        <div class="skeleton skeleton--text" style="width: 60%;"></div>
      </div>
      <div class="card card--glass" style="position: absolute; left: var(--space-4); bottom: var(--space-8); width: 14rem;">
        <div class="skeleton skeleton--text" style="width: 100%;"></div>
        <div class="skeleton skeleton--text" style="width: 70%;"></div>
      </div>
    </div>
  </div>
</section>

<section class="section section--sm">
  <div class="container">
    <h2 class="section__title" style="text-align: center; margin-bottom: var(--space-12);">Popular Subjects</h2>
    <div class="grid grid--4">
      <!-- Subject cards generated via loop -->
      <?php for ($i = 0; $i < 8; $i++): ?>
      <div class="card">
        <div class="card__body">
          <div class="skeleton skeleton--title" style="width: 50%; margin-bottom: var(--space-2);"></div>
          <div class="skeleton skeleton--text" style="width: 90%;"></div>
          <div class="skeleton skeleton--text" style="width: 70%;"></div>
        </div>
        <div class="card__footer">
          <a href="<?php echo home_url('/find-tutor'); ?>" class="btn btn--primary btn--sm">View Tutors</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="section" style="background-color: var(--color-bg-dark); color: var(--color-text-inverse);">
  <div class="container" style="text-align: center;">
    <h2>Ready to Improve Your Results?</h2>
    <p style="margin: var(--space-4) 0;">Find trusted tutors today.</p>
    <div style="display: flex; gap: var(--space-3); justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo home_url('/find-tutor'); ?>" class="btn btn--primary btn--lg">Find Tutor</a>
      <a href="<?php echo home_url('/request-callback'); ?>" class="btn btn--outline btn--lg" style="color: var(--color-white); border-color: var(--color-white);">Request Callback</a>
    </div>
  </div>
</section>

@extends('templates.public.footer')
