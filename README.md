# Bespoke RX — WordPress Theme
Custom FSE (Full Site Editing) WordPress theme built from Figma design.

---

## Requirements
- WordPress 6.4+
- PHP 8.1+
- MySQL 8.0+

---

## Installation

### 1. Install WordPress
Install WordPress on your server normally.

### 2. Upload the theme
- Go to **Appearance → Themes → Add New → Upload Theme**
- Upload `bespokerx-theme.zip`
- Click **Activate**

### 3. Configure Permalinks
- Go to **Settings → Permalinks**
- Select **Post name**
- Click **Save Changes**

### 4. Set Homepage
- Go to **Settings → Reading**
- Select **A static page**
- Homepage: **Home**
- Posts page: *(leave empty)*
- Click **Save Changes**

---

## Creating Pages

### Home Page
1. Go to **Pages → Add New**
2. Title: `Home`
3. Insert patterns in this order via the **+** button → Patterns:
   - Hero Section
   - Experience Section
   - Discover Section
   - Services Section
   - Gallery Section
   - Reviews Section
4. Publish

### Contact Page
1. Go to **Pages → Add New**
2. Title: `Contact`
3. Template: `page-contact`
4. Insert pattern: **Contact Section**
5. Publish

### Procedures Page
1. Go to **Pages → Add New**
2. Title: `Procedures`
3. Template: **Procedures Page**
4. Publish *(content is managed via Treatments CPT)*

---

## Managing Procedures Content

The Procedures page is powered by a **Custom Post Type (CPT)** called Treatments. Content is fully manageable from the dashboard.

### Add a Treatment Category
1. Go to **Treatments → Categories**
2. Add category name (e.g. Botox, Chemical Peels, Dermal Fillers)
3. Click **Add New Category**

### Add a Treatment (Before/After)
1. Go to **Treatments → Add New**
2. Title: name of the procedure
3. **Featured Image**: upload the before/after photo
4. **Category**: select the appropriate category
5. Publish

The treatment will appear automatically on the Procedures page with the category filter.

---

## Theme Architecture

```
bespokerx-theme/
├── assets/
│   ├── css/          # One CSS file per section
│   ├── fonts/        # Local font files
│   ├── images/       # Theme decorative images
│   └── js/
│       └── main.js   # All JavaScript (slider, filters, interactions)
├── parts/
│   ├── header.html   # Site header (logo + navigation)
│   └── footer.html   # Site footer
├── patterns/         # One PHP file per section
│   ├── hero.php
│   ├── experience.php
│   ├── discover.php
│   ├── services.php
│   ├── gallery.php
│   ├── reviews.php
│   └── contact.php
├── templates/
│   ├── front-page.html       # Homepage template
│   ├── page-contact.html     # Contact page template
│   └── page-procedures.php   # Procedures page template (dynamic)
├── functions.php     # Theme setup, pattern registration, CPT
├── theme.json        # Design tokens (colors, fonts, spacing)
├── style.css         # Theme metadata
└── index.php         # Required WordPress file
```

---

## Design System

Defined in `theme.json`:

| Token | Value |
|-------|-------|
| Cream | `#F5F0EB` |
| Aqua | `#7FBAC8` |
| Dark Green | `#00202C` |
| Dark | `#2E2E2E` |
| Heading font | Cormorant Garamond |
| Body font | Montserrat |

---

## Notes

- **Images**: Theme decorative images are in `assets/images/`. Client content images (treatments) are managed via the WordPress Media Library.
- **Fonts**: Fonts are loaded locally from `assets/fonts/` for performance and privacy.
- **No page builders**: Theme is built with native WordPress FSE blocks for performance and maintainability.
- **JavaScript**: All interactive functionality (hero slider, services switcher, procedures filter) is in `assets/js/main.js`.
- **Adding new sections**: Create a new pattern file in `patterns/`, register it in `functions.php`, and add corresponding CSS in `assets/css/`.

---

## Contact Form

The contact form uses **Contact Form 7** plugin. Install it from **Plugins → Add New** if not already installed.

---

*Built by Javier Arancibia — February 2026*
