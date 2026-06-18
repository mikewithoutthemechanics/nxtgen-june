@extends('templates.public.header')

@section('content')
<section class="section section--lg">
  <div class="container">
    <div class="grid grid--3" style="gap: var(--space-8);">
      <div class="tutor-profile__main" style="grid-column: span 2;">
        <div class="card" style="margin-bottom: var(--space-6);">
          <div class="card__body" style="display: flex; gap: var(--space-6); align-items: center; flex-wrap: wrap;">
            <div class="skeleton skeleton--avatar" style="width: 6rem; height: 6rem; border-radius: var(--radius-full);"></div>
            <div>
              <div class="skeleton skeleton--text" style="width: 10rem; height: 1.5rem;"></div>
              <div class="skeleton skeleton--text" style="width: 8rem; margin-top: var(--space-2);"></div>
              <div class="skeleton skeleton--text" style="width: 12rem; margin-top: var(--space-2);"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-2);"></div>
            <div class="skeleton skeleton--text" style="width: 90%;"></div>
            <div class="skeleton skeleton--text" style="width: 80%;"></div>
          </div>
        </div>
      </div>

      <aside class="tutor-profile__booking">
        <div class="card" style="position: sticky; top: var(--space-6);">
          <div class="card__header">
            <div class="skeleton skeleton--text" style="width: 60%;"></div>
            <div class="skeleton skeleton--text" style="width: 40%;"></div>
          </div>
          <div class="card__body">
            <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-3);"></div>
            <div class="skeleton skeleton--text" style="width: 100%; margin-bottom: var(--space-4);"></div>
            <button class="btn btn--primary btn--lg" style="width: 100%;" disabled>Loading...</button>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

@extends('templates.public.footer')
