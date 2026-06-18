@extends('templates.public.header')

@section('content')
<section class="section section--lg">
  <div class="container">
    <h1>Find Your Tutor</h1>
    <p style="color: var(--color-text-secondary);">Search by subject, grade, location, or online availability.</p>

    <form class="search-bar" style="margin-top: var(--space-6);" x-data="{ filtersOpen: false }">
      <div class="grid grid--2" style="gap: var(--space-3);">
        <div class="search-input-wrapper">
          <svg class="search-input-wrapper__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
          <input type="text" class="form-input" placeholder="Subject / Grade" aria-label="Search by subject or grade">
          <button type="button" class="search-input-wrapper__clear" aria-label="Clear">&times;</button>
        </div>
        <button type="submit" class="btn btn--primary">Search</button>
      </div>
      <button type="button" class="btn btn--ghost" style="margin-top: var(--space-3);" @click="filtersOpen = !filtersOpen">
        Filters
      </button>
    </form>

    <div class="grid grid--3" style="margin-top: var(--space-10); gap: var(--space-6);">
      <!-- Tutor cards rendered via loop -->
      <?php for ($i = 0; $i < 6; $i++): ?>
      <div class="card">
        <div class="card__body">
          <div style="display: flex; gap: var(--space-3); align-items: center; margin-bottom: var(--space-3);">
            <div class="skeleton skeleton--avatar"></div>
            <div>
              <div class="skeleton skeleton--text" style="width: 8rem;"></div>
              <div class="skeleton skeleton--text" style="width: 5rem;"></div>
            </div>
          </div>
          <div class="skeleton skeleton--text" style="width: 100%;"></div>
          <div class="skeleton skeleton--text" style="width: 80%;"></div>
        </div>
        <div class="card__footer" style="display: flex; gap: var(--space-2); justify-content: space-between;">
          <a href="#" class="btn btn--outline btn--sm">View Profile</a>
          <a href="#" class="btn btn--primary btn--sm">Book Lesson</a>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <div class="empty-state" style="display: none;">
      <svg class="empty-state__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
      <h3 class="empty-state__title">No tutors found</h3>
      <p class="empty-state__description">Try broadening your search or adjusting your filters.</p>
      <button class="btn btn--primary">Clear Filters</button>
    </div>
  </div>
</section>

@extends('templates.public.footer')
