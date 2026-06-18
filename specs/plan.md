# Build Plan: Next Gen Theme Enterprise — Online Tutoring Marketplace + LMS Platform

## 1. Project Overview and Objectives

### Project Name
Next Gen Theme Enterprise — Online Tutoring Marketplace + LMS Platform

### Objective
Build a premium, conversion-focused, multi-role tutoring platform UI for Students, Parents, Tutors, Admins, Schools, and Universities. The platform combines a tutor marketplace (similar to Preply/Superprof) with a Learning Management System (LMS, similar to Coursera/Udemy) and SaaS dashboards.

### Core Goals
- Enable visitors to quickly find, compare, and book tutors
- Provide role-based dashboards (Student, Parent, Tutor, Admin)
- Deliver a premium, trustworthy, modern visual identity
- Ensure excellent mobile experience across all screens
- Maintain clean, maintainable frontend code with CSS variables and reusable components

### User Personas
- **Student**: Finds tutors, books lessons, tracks progress
- **Parent**: Monitors child's progress, manages payments, views reports
- **Tutor**: Manages profile, availability, earnings, and lessons
- **Admin**: Configures platform settings via no-code Mission Control

---

## 2. Recommended Tech Stack and Architecture

### Recommendation
This spec explicitly recommends a **WordPress + PHP templates** approach with **Vanilla JS or Alpine.js** for interactions. React is suggested only for admin dashboards or complex filters.

**If executing this plan:**
- **Public Pages**: PHP templates with Alpine.js for interactions, CSS variables for theming
- **Admin Dashboards**: React (if needed for complex UI like Mission Control, filters)
- **Styling**: CSS custom properties (variables) following the design token system
- **Data Layer**: REST API for tutor filtering, dashboard widgets, bookings
- **Icons**: SVG icon library (e.g., Heroicons or Phosphor)
- **Fonts**: Inter or Plus Jakarta Sans (headings), Inter or Open Sans (body)
- **Charts**: Lightweight charting library for dashboards (e.g., Chart.js)

### Architecture Decisions
- **Theme-based architecture**: All UI governed by CSS custom properties for easy re-theming
- **Component-driven**: Reusable components for cards, buttons, forms, navigation
- **Responsive-first**: Mobile-first CSS with defined breakpoints
- **State management**: Minimal — Alpine.js for reactive UI states, REST for data
- **Performance**: Avoid heavy frameworks on public pages; lazy-load where needed

### Files/Directories Structure
```
specs/
  plan.md                          ← this file
src/
  styles/
    tokens.css                     ← CSS custom properties (colors, spacing, typography)
    base.css                       ← Reset, global styles
    layout.css                     ← Grid, container, sidebar layouts
    components/                    ← Card, Button, Badge, Input, Calendar, etc.
    pages/                         ← Page-specific styles
    dashboard/                     ← Dashboard widget styles
    admin/                         ← Mission Control styles
  scripts/
    alpine-components/             ← Alpine.js components (search, filters, modals)
    dashboard/                     ← Dashboard interactions
    booking/                       ← Booking flow logic
  templates/
    public/
      header.php
      footer.php
      homepage.php
      find-tutor.php
      tutor-profile.php
      subjects.php
      courses.php
      about.php
      pricing.php
      blog.php
      contact.php
      become-tutor.php
    authenticated/
      student-dashboard.php
      parent-dashboard.php
      tutor-dashboard.php
      bookings.php
      payments.php
      reports.php
      profile-settings.php
    admin/
      mission-control.php
      branding-settings.php
      demo-import.php
```

---

## 3. Detailed Iteration Plan

### Iteration 1: Foundation — Design Tokens, Base Layout, and Navigation

**Objective**: Establish the design system, base styles, and global navigation before building pages.

#### Tasks
1. **Create design token system (CSS variables)**
   - Define color palette (Primary Navy, Emerald, Academic Blue, Premium Gold, Soft Purple, White, backgrounds)
   - Define typography scale (H1–H3, body, small, button sizes)
   - Define spacing scale, border-radius (18px–28px), shadow system
   - Define breakpoints (Mobile, Tablet, Laptop, Desktop)
   - File: `src/styles/tokens.css`

2. **Build base/reset styles**
   - CSS reset
   - Base typography
   - Global utility classes

3. **Implement global layout system**
   - Container (max-width 1280px)
   - Grid/flex utilities
   - Dashboard sidebar layout (280px sidebar + full-width main)

4. **Build responsive navigation**
   - **Public header**: Logo, nav links (Find Tutor, Subjects, Pricing, Become Tutor, Blog), Login/Book a Tutor CTA
   - **Mobile**: Hamburger menu with slide-out drawer
   - **Header states**: Default, Sticky, Transparent hero overlay, Logged-in user state, Marketplace search state
   - File: `src/templates/public/header.php`, `footer.php`

#### Acceptance Criteria
- Design tokens render correctly across all defined breakpoints
- Navigation collapses into mobile drawer at ≤767px
- Navigation supports all 5 header states
- No hardcoded colors remain in layout files

#### Deliverables
- `src/styles/tokens.css`
- `src/styles/base.css`
- `src/styles/layout.css`
- `src/templates/public/header.php`
- `src/templates/public/footer.php`

#### Dependencies
- None (first iteration)

#### Testing
- Visual regression: compare header states across breakpoints
- Manual test: mobile hamburger menu, all states render

---

### Iteration 2: Public Homepage and Core Landing Pages

**Objective**: Build the high-conversion homepage and supporting landing pages.

#### Tasks
1. **Homepage (homepage.php)**
   - **Hero Section**: Badge, H1 heading, search input (Subject/Grade/Location), dual CTAs, stats row, floating tutor cards/dashboard preview on right
   - **Trust Metrics**: 4-column stat cards (Tutors, Students, Lessons, Provinces)
   - **Subject Categories**: Grid of cards (Maths, Science, English, Code, etc.) with icon, subject name, grade range, tutor count, CTA
   - **Featured Tutors**: Carousel or grid of tutor cards (photo, name, verified badge, subject tags, rating, price, View Profile CTA)
   - **How It Works**: 5-step timeline (horizontal desktop, vertical stepper mobile)
   - **Parent Value Proposition**: Feature highlight with progress reports, attendance, tutor feedback, invoices CTA
   - **Dashboard Preview**: Visual mockup ofStudent dashboard (progress chart, upcoming lessons, tasks)
   - **Success Stories**: Testimonial cards (student name, subject, before/after result, testimonial, tutor)
   - **CTA Section**: "Ready to Improve Your Results?" with Find Tutor and Request Callback buttons

2. **Supporting Public Pages**
   - About (about.php)
   - Subjects listing (subjects.php) and Subject Detail (subject-detail.php)
   - Pricing (pricing.php)
   - Blog listing + detail (blog.php, blog-detail.php)
   - Contact (contact.php)
   - Become a Tutor (become-tutor.php)
   - Request Callback page

3. **Component library**
   - Button variants (primary, secondary, outline, ghost)
   - Card component (with glassmorphism option)
   - Badge component (verified, category tags)
   - Input/Search component
   - Rating component (stars)

#### Acceptance Criteria
- Homepage loads with animated hero gradient and floating cards
- All sections match the spec wireframes
- All page templates are responsive (Mobile/Tablet/Desktop)
- Components support all required states: Default, Hover, Active, Loading, Empty, Error, Success, Disabled

#### Deliverables
- `src/templates/public/homepage.php`
- `src/templates/public/about.php`, `subjects.php`, `pricing.php`, `blog.php`, `contact.php`, `become-tutor.php`, `request-callback.php`
- `src/styles/components/` (Button, Card, Badge, Input, Rating)
- `src/styles/pages/homepage.css`

#### Dependencies
- Iteration 1 complete (tokens, base styles, layout, header/footer)

#### Testing
- Visual review: compare rendered pages to spec wireframes
- Responsive: test at 320px, 768px, 1024px, 1440px
- Component states: hover, active, disabled, loading for all interactive elements
- Performance: no CSS animation overload, optimized assets

---

### Iteration 3: Tutor Marketplace and Tutor Profile

**Objective**: Build the tutor discovery and profile experience.

#### Tasks
1. **Find Tutor page (find-tutor.php)**
   - Page title + search bar (Subject/Grade/Province/Online)
   - **Filters sidebar**: Subject, Grade, Province, Price, Availability, Online, In-person, Verified
   - **Results area**: Tutor card grid/list
   - Tutor card: Photo, Name, Verified badge, Subject tags, Rating, Price, View Profile + Book Lesson CTAs
   - **Mobile**: Collapsible filters (modal/drawer), Sort control

2. **Tutor Profile page (tutor-profile.php)**
   - **Tutor Hero**: Photo, Name, Verified badge, Rating, Subject tags, Province, Book Lesson / Message Tutor / Compare buttons
   - **Tab navigation**: About | Subjects | Availability | Reviews | Qualifications
   - **Main content**: Biography, Experience, Qualifications, Review cards
   - **Sticky booking card**: Photo, Name, Subject, Price, Date picker, Time picker, Book Lesson CTA
   - Calendar availability visualization

3. **Marketplace interactions (Alpine.js)**
   - Real-time search filtering without full page reload
   - Filter collapse/expand on mobile
   - Empty state with helpful suggestions
   - Sort functionality

#### Acceptance Criteria
- Filters update results dynamically (or via fast API calls)
- Mobile filters collapse into slide-out drawer
- Booking CTA is always visible on tutor profile
- Calendar shows tutor availability
- Empty search results show helpful suggestions

#### Deliverables
- `src/templates/public/find-tutor.php`
- `src/templates/public/tutor-profile.php`
- `src/scripts/alpine-components/search-filter.js`
- `src/styles/pages/marketplace.css`
- REST API endpoints: tutor search/filter, tutor availability

#### Dependencies
- Iteration 1 complete
- Iteration 2 complete (component library available)

#### Testing
- Functional: filter combinations return correct results
- Responsive: mobile filter drawer, sticky booking card
- UX: empty state messaging, loading states
- API: verify REST endpoints for search and availability

---

### Iteration 4: Booking, Checkout, and Course/LMS Screens

**Objective**: Build the transactional flows and LMS experience.

#### Tasks
1. **Booking Screen**
   - 5-step wizard: Select Lesson Type → Select Date → Select Time → Confirm Details → Pay
   - Tutor summary sidebar (photo, name, subject, price)
   - Step indicators with progress
   - Calendar/time picker integration

2. **Checkout Screen**
   - Two-column layout: Billing Details | Order Summary
   - Fields: Student Name, Grade, Parent Details (if applicable), Payment Method
   - Order Summary: Tutor name, Lesson type, Subject, Total, Trust badges
   - Trust badges and security indicators

3. **Course/LMS Screens**
   - **Course Listing** (courses.php): Grid of course cards
   - **Course Detail** (course-detail.php): Course hero (title, subject, grade, instructor, CTA), tabs (Curriculum | Overview | Reviews | Instructor), lessons list sidebar, enrollment card (price, access, Enroll Now)
   - **Course Dashboard** (if LMS dashboard needed): Progress chart, lesson list, assignments

4. **Dashboard preview interactions**
   - Animate/preview dashboard widgets on homepage

#### Acceptance Criteria
- Booking flow completes end-to-end (mock payment for now)
- Checkout shows correct order summary
- Course listing and detail pages are fully responsive
- All forms have validation and proper error/success states

#### Deliverables
- `src/templates/public/book-lesson.php`
- `src/templates/public/checkout.php`
- `src/templates/public/courses.php`
- `src/templates/public/course-detail.php`
- `src/scripts/booking/booking-flow.js`
- `src/styles/pages/booking.css`
- `src/styles/pages/lms.css`

#### Dependencies
- Iteration 1 complete
- Iteration 2 complete
- Iteration 3 complete (tutor profile available)

#### Testing
- End-to-end: book a lesson from tutor profile through checkout
- Form validation: test error, success, disabled, loading states
- Responsive: checkout and booking on mobile

---

### Iteration 5: Authenticated Dashboards

**Objective**: Build role-based dashboards for Student, Parent, and Tutor.

#### Tasks
1. **Student Dashboard (student-dashboard.php)**
   - 280px sidebar: Overview, Courses, Lessons, Assignments, Progress, Bookings, Payments
   - Main area: Welcome back, KPI cards (Active Courses, Lessons, Assignments, Certificates, Progress %)
   - Upcoming Lessons list
   - Progress chart (academic/course progress)
   - Assignment deadlines

2. **Parent Dashboard (parent-dashboard.php)**
   - 280px sidebar: Children, Progress, Attendance, Bookings, Invoices, Reports, Messages
   - Child selector dropdown
   - KPI cards: Progress, Lessons, Spend, Tutor Rating
   - Attendance chart
   - Tutor feedback section
   - Invoice table
   - Booking history
   - Academic progress report
   - Downloadable reports

3. **Tutor Dashboard (tutor-dashboard.php)**
   - 280px sidebar: Profile, Availability, Lessons, Students, Reviews, Earnings, Resources
   - KPI cards: Earnings, Lessons, Students, Rating
   - Upcoming Lessons list
   - Availability calendar management
   - Profile completeness indicator
   - Earnings transparency (charts/tables)

4. **Shared authenticated pages**
   - Bookings history (bookings.php)
   - Payments (payments.php)
   - Reports (reports.php)
   - Profile Settings (profile-settings.php)
   - Login (login.php) + Register (register.php)

5. **Dashboard interactivity (Alpine.js)**
   - Sidebar navigation
   - Chart rendering
   - Calendar interactions
   - Data table sorting/filtering

#### Acceptance Criteria
- All 3 dashboards render with correct role-specific content
- Sidebar navigation works across all dashboards
- Parent can see child progress within 2 clicks
- Tutor can update availability quickly
- Invoices and reports are accessible and (where possible) downloadable
- All dashboard widgets have loading, empty, and error states

#### Deliverables
- `src/templates/authenticated/student-dashboard.php`
- `src/templates/authenticated/parent-dashboard.php`
- `src/templates/authenticated/tutor-dashboard.php`
- `src/templates/authenticated/bookings.php`, `payments.php`, `reports.php`, `profile-settings.php`
- `src/templates/authenticated/login.php`, `register.php`
- `src/scripts/dashboard/dashboard-init.js`
- `src/styles/dashboard/dashboard.css`
- REST API endpoints: dashboard widget data, bookings, invoices, reports

#### Dependencies
- Iteration 1 complete
- Iteration 2 complete
- Iteration 3 complete (booking flow available)
- Iteration 4 complete (checkout, payments)

#### Testing
- Role-based access: verify each role sees only their data
- Responsive: dashboard sidebar collapses on mobile
- Functional: charts render, calendar works, invoices download
- Empty/error states: test with no data or API failure

---

### Iteration 6: Admin Mission Control and Configuration

**Objective**: Build the no-code admin interface for platform configuration.

#### Tasks
1. **Admin Dashboard Shell**
   - Layout: 280px sidebar (General, Branding, Typography, Colors, Header, Footer, Demo Import) + main panel

2. **Mission Control Settings**
   - **General**: Site title, tagline, default settings
   - **Branding**: Logo upload, favicon
   - **Typography**: Font family selection, size controls with live preview
   - **Colors**: Color picker for all design tokens with live preview panel
   - **Header Builder**: Layout options, menu items, CTA button config
   - **Footer Builder**: Columns, links, copyright

3. **Demo Import Suite**
   - Import options: School, University, Tutors, Online Learning
   - Each option shows preview + Import button
   - Import state: Importing... → Pages created, Menus assigned, Tutors imported, Settings applied, Front page assigned
   - Progress indicator during import

4. **Admin Analytics & Integrations** (stretch)
   - Analytics page (placeholder/high-level)
   - AI Assistant placeholder
   - Integration settings (placeholder)

#### Acceptance Criteria
- Admin can change brand colors and see live preview
- Importing demo data completes without errors
- All settings persist (via WordPress options or API)
- Mission Control is fully responsive

#### Deliverables
- `src/templates/admin/mission-control.php`
- `src/templates/admin/branding-settings.php`
- `src/templates/admin/demo-import.php`
- `src/styles/admin/admin.css`

#### Dependencies
- Iteration 1 complete (tokens system enables live preview)
- Iteration 2 complete (all public pages read from token system)

#### Testing
- Functional: color changes reflect on live site, demo import completes
- Data integrity: imported pages, menus, tutors appear correctly
- Responsive: admin panel usable on tablet/mobile

---

### Iteration 7: Polish, Accessibility, and Performance

**Objective**: Finalize all component states, ensure accessibility, and optimize performance.

#### Tasks
1. **All component states audit**
   - Verify every component supports: Default, Hover, Active, Loading, Empty, Error, Success, Disabled
   - Add skeleton loaders, spinner components
   - Toast/notification system for success/error feedback

2. **Accessibility (a11y)**
   - WCAG 2.1 AA compliance check
   - Keyboard navigation for all interactive elements
   - Screen reader labels (aria-labels, roles)
   - Color contrast verification (all text/background combinations)
   - Focus indicators

3. **SEO & Meta**
   - Semantic HTML structure
   - Meta tags for all public pages
   - Open Graph tags for sharing
   - Structured data (if applicable)

4. **Performance optimization**
   - CSS: remove dead styles, optimize selectors
   - JS: lazy-load non-critical scripts
   - Images: responsive images, lazy loading
   - Font loading: font-display swap
   - Avoid animation overload on hero sections

5. **Browser testing**
   - Chrome, Firefox, Safari, Edge
   - iOS Safari, Chrome Mobile

#### Acceptance Criteria
- 100% of interactive components have all required states
- No a11y violations on Lighthouse/axe
- PageSpeed score ≥ 90 on mobile for homepage
- No console errors or warnings
- All pages render correctly in supported browsers

#### Deliverables
- Updated component styles
- Skeleton/loader components
- Toast notification system
- Accessibility audit report
- Performance audit report

#### Dependencies
- All prior iterations complete

---

## 4. Dependencies Between Tasks/Phases

```
Iteration 1 (Foundation)
    └── Iteration 2 (Public Homepage + Landing)
            └── Iteration 3 (Marketplace + Tutor Profile)
                    └── Iteration 4 (Booking + LMS)
                            └── Iteration 5 (Dashboards)
                                    └── Iteration 6 (Admin Mission Control)
                                            └── Iteration 7 (Polish)
```

**Critical path**: Iteration 1 → 2 → 3 → 4 → 5. Iterations 6 and 7 depend on the public and authenticated surfaces being functional.

---

## 5. Testing Strategy

| Phase | Testing Type | Approach |
|-------|-------------|----------|
| Iteration 1 | Visual/Responsive | Manual breakpoint review; validate no hardcoded colors |
| Iteration 2 | Visual/Component | Visual regression; component state review; responsive audit |
| Iteration 3 | Functional/E2E | Filter/results API tests; mobile drawer UX; empty states |
| Iteration 4 | E2E/Form | Booking flow end-to-end; form validation; checkout UX |
| Iteration 5 | Functional/Accessibility | Role-based access; dashboard data; screen reader test |
| Iteration 6 | Functional/Data | Settings persistence; demo import integrity |
| Iteration 7 | A11y/Performance | Lighthouse/axe audit; PageSpeed; cross-browser |

---

## 6. Deployment/Milestone Checkpoints

| Milestone | Description | Criteria |
|-----------|-------------|----------|
| M1: Foundation | Tokens, base styles, navigation live | All breakpoints functional; no hardcoded values |
| M2: Public Site Live | Homepage + landing pages production-ready | All 16 public screens functional and responsive |
| M3: Marketplace Live | Tutor search, profile, booking flow | End-to-end booking works; filters update dynamically |
| M4: All Screens Live | Courses, LMS, checkout, dashboards | All 19 required screens built |
| M5: Dashboards Live | Student, Parent, Tutor dashboards | Role-based access; all widgets functional |
| M6: Admin Live | Mission Control + Demo Import | Admin can configure full site via UI |
| M7: Production Ready | Polish, a11y, performance | Lighthouse ≥ 90; zero a11y violations |

---

## 7. Risk Assessment and Mitigation

| Risk | Likelihood | Impact | Mitigation |
|------|-----------|--------|------------|
| Scope creep on 30+ page templates | High | High | Strict iteration boundaries; defer to v2 if behind schedule |
| WordPress/PHP theme constraints limit React usage in admin | Medium | Medium | Limit React to admin only; use Alpine.js/vanilla JS everywhere else |
| Performance issues with complex dashboard widgets | Medium | Medium | Lazy-load charts; use efficient selectors; profile early |
| Mobile UX gaps on dashboard sidebar | Medium | Medium | Prototype sidebar behavior early; test on real devices |
| Accessibility gaps found late | Medium | High | Build a11y checks into each iteration, not just iteration 7 |
| Design token misalignment between CSS and PHP templates | Low | Medium | Token audit at M1 and M4 checkpoints |
| REST API delays blocking frontend | Low | Medium | Use mock data for frontend; swap to API calls later |

---

## 8. Timeline Estimate

Based on the iteration plan and 1–2 frontend engineers working in parallel:

| Iteration | Estimated Duration |
|-----------|-------------------|
| Iteration 1 (Foundation) | 1–2 weeks |
| Iteration 2 (Public Homepage + Landing) | 2–3 weeks |
| Iteration 3 (Marketplace + Profile) | 2–3 weeks |
| Iteration 4 (Booking + LMS) | 2 weeks |
| Iteration 5 (Dashboards) | 3–4 weeks |
| Iteration 6 (Admin Mission Control) | 2–3 weeks |
| Iteration 7 (Polish + A11y) | 1–2 weeks |

**Total Estimated Timeline: 13–19 weeks** (~3–5 months)

---

## 9. Review and Approval Checklist

- [ ] Tech stack alignment (WordPress PHP + Alpine.js + CSS variables) is acceptable
- [ ] Design token system scope is sufficient
- [ ] Public page count (16 screens) matches current roadmap
- [ ] Authenticated page count (11 screens) matches current roadmap
- [ ] Admin feature scope (Mission Control, Demo Import) is approved
- [ ] Iteration boundaries allow parallel work streams if needed
- [ ] Timeline estimate aligns with business launch goals
- [ ] Risk mitigations are acceptable to engineering/product
- [ ] Testing strategy has adequate coverage for compliance needs

---

*This plan is a planning-only deliverable. No implementation has been started.*

*Built for [Michael Kidd](https://agentcy-talk.slack.com/archives/C0BBGRG4E0L/p1781743798536079?thread_ts=1781743131.139689&cid=C0BBGRG4E0L) by [Kilo for Slack](https://kilo.ai/slack)*
