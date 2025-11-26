# AGENTS.md - WesCar Health WordPress Theme

## Project Overview

WesCar Health is a custom WordPress theme built for a healthcare organization. The theme follows modern WordPress development standards with a mobile-first approach, block editor (Gutenberg) support, and strict security practices.

**Tech Stack:**
- WordPress 6.x+ (Block Theme with classic fallback)
- PHP 8.1+
- Modern CSS (Container Queries, Logical Properties, Custom Properties)
- Vanilla JavaScript (ES6+) with optional Alpine.js for interactivity
- WP-CLI for scaffolding and management

## Directory Structure

```
wescarhealth/
├── AGENTS.md
├── README.md
├── style.css                 # Theme metadata and base styles
├── functions.php             # Theme setup, hooks, and includes
├── index.php                 # Main fallback template
├── screenshot.png            # Theme screenshot (1200x900)
├── theme.json                # Block editor configuration
│
├── assets/
│   ├── css/
│   │   ├── main.css          # Compiled/main stylesheet
│   │   └── blocks/           # Block-specific styles
│   ├── js/
│   │   ├── main.js           # Main JavaScript
│   │   └── blocks/           # Block-specific scripts
│   ├── images/
│   └── fonts/
│
├── inc/
│   ├── setup.php             # Theme setup (supports, menus, sidebars)
│   ├── enqueue.php           # Asset enqueueing
│   ├── security.php          # Security hardening functions
│   ├── customizer.php        # Customizer settings
│   ├── template-functions.php # Template helper functions
│   ├── template-hooks.php    # Action/filter hooks
│   ├── block-patterns.php    # Custom block patterns
│   └── acf/                   # ACF field groups (if using ACF)
│
├── template-parts/
│   ├── header/
│   ├── footer/
│   ├── content/
│   ├── components/           # Reusable BEM components
│   └── blocks/               # Custom block templates
│
├── templates/                # Full page templates (block theme)
│   └── parts/                # Template parts for block theme
│
├── patterns/                 # Block patterns
│
├── languages/                # Translation files
│
└── tests/                    # Theme unit tests
```

## Setup Commands

```bash
# Navigate to theme directory
cd /Users/christophersmikle/Local Sites/wesscar/app/public/wp-content/themes/wescarhealth

# Activate theme via WP-CLI
wp theme activate wescarhealth

# Generate POT file for translations
wp i18n make-pot . languages/wescarhealth.pot

# Check theme for WordPress coding standards
composer install
./vendor/bin/phpcs --standard=WordPress .

# Export theme for distribution
wp theme export wescarhealth
```

## Code Style Guidelines

### PHP Standards
- Follow [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/)
- Use strict typing: `declare(strict_types=1);` in all PHP files
- Namespace custom classes: `namespace WescarHealth\ClassName;`
- Prefix all functions, hooks, and globals with `wescarhealth_`
- Use early returns to reduce nesting
- Document all functions with PHPDoc blocks

```php
<?php
/**
 * Example function with proper documentation.
 *
 * @param string $param Description of parameter.
 * @return string Sanitized output.
 */
function wescarhealth_example_function( string $param ): string {
    if ( empty( $param ) ) {
        return '';
    }
    return esc_html( $param );
}
```

### CSS Standards (BEM + Modern CSS)
- **BEM Naming:** `block__element--modifier`
- **Logical Properties:** Always use `margin-inline`, `padding-block`, `inset-inline-start` instead of directional properties
- **Container Queries:** Prefer over media queries for component-level responsiveness
- **Custom Properties:** Define in `:root` or `theme.json`
- **Mobile-First:** Start with mobile styles, enhance with container/media queries

```css
/* Component container for container queries */
.card-container {
  container-type: inline-size;
  container-name: card;
}

/* BEM component with logical properties */
.card {
  padding-block: var(--spacing-md);
  padding-inline: var(--spacing-lg);
  border-radius: var(--radius-md);
}

.card__title {
  font-size: var(--font-size-lg);
  margin-block-end: var(--spacing-sm);
}

.card__content {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-md);
}

.card--featured {
  border-inline-start: 4px solid var(--color-primary);
}

/* Container query for larger containers */
@container card (min-inline-size: 400px) {
  .card__content {
    flex-direction: row;
  }
}
```

### JavaScript Standards
- Use ES6+ syntax (const/let, arrow functions, template literals)
- No jQuery dependency unless absolutely necessary
- Prefix global functions with `wescarhealth`
- Use event delegation where possible
- Defer non-critical scripts

```javascript
// Good: Modern, namespaced approach
const WescarHealth = {
  init() {
    this.bindEvents();
  },
  
  bindEvents() {
    document.addEventListener('click', this.handleClick.bind(this));
  },
  
  handleClick(event) {
    if (event.target.matches('.js-toggle')) {
      this.toggleElement(event.target);
    }
  },
  
  toggleElement(trigger) {
    const targetId = trigger.getAttribute('aria-controls');
    const target = document.getElementById(targetId);
    if (target) {
      const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
      trigger.setAttribute('aria-expanded', !isExpanded);
      target.hidden = isExpanded;
    }
  }
};

document.addEventListener('DOMContentLoaded', () => WescarHealth.init());
```

## Security Considerations

### CRITICAL - Always Follow These Rules

1. **Escape All Output:**
   - `esc_html()` for text content
   - `esc_attr()` for HTML attributes
   - `esc_url()` for URLs
   - `wp_kses_post()` for post content with allowed HTML
   - `esc_js()` for inline JavaScript strings

2. **Sanitize All Input:**
   - `sanitize_text_field()` for text inputs
   - `sanitize_email()` for email addresses
   - `absint()` for integers
   - `wp_kses()` for HTML with specific allowed tags

3. **Nonce Verification:**
   - Always use nonces for form submissions and AJAX requests
   - Verify with `wp_verify_nonce()` or `check_ajax_referer()`

4. **Capability Checks:**
   - Always verify `current_user_can()` before privileged operations

5. **Database Queries:**
   - Use `$wpdb->prepare()` for all custom queries
   - Never concatenate user input into SQL

6. **File Operations:**
   - Validate file types with `wp_check_filetype()`
   - Use WordPress filesystem API

```php
<?php
// CORRECT: Escaped output
echo '<a href="' . esc_url( $url ) . '">' . esc_html( $title ) . '</a>';

// CORRECT: Sanitized input with nonce
if ( isset( $_POST['wescarhealth_nonce'] ) && 
     wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['wescarhealth_nonce'] ) ), 'wescarhealth_action' ) ) {
    $clean_data = sanitize_text_field( wp_unslash( $_POST['user_input'] ) );
}

// CORRECT: Prepared database query
$results = $wpdb->get_results(
    $wpdb->prepare(
        "SELECT * FROM {$wpdb->posts} WHERE post_type = %s AND post_status = %s",
        'post',
        'publish'
    )
);
```

## Block Theme Configuration

### theme.json Structure
```json
{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "version": 3,
  "settings": {
    "appearanceTools": true,
    "color": {
      "palette": [
        { "slug": "primary", "color": "#0066CC", "name": "Primary" },
        { "slug": "secondary", "color": "#004D99", "name": "Secondary" },
        { "slug": "accent", "color": "#00A86B", "name": "Accent" }
      ]
    },
    "typography": {
      "fluid": true,
      "fontFamilies": [],
      "fontSizes": []
    },
    "spacing": {
      "units": ["rem", "em", "%", "vw"]
    },
    "layout": {
      "contentSize": "800px",
      "wideSize": "1200px"
    }
  },
  "styles": {},
  "templateParts": [],
  "customTemplates": []
}
```

## Template Hierarchy

Follow WordPress template hierarchy. Key templates for this theme:

- `front-page.php` - Homepage
- `page.php` - Generic pages
- `single.php` - Single posts
- `archive.php` - Archive pages
- `search.php` - Search results
- `404.php` - Not found page
- `page-{slug}.php` - Specific page templates (e.g., `page-services.php`)

## Component Development

### Creating a New BEM Component

1. Create template part in `template-parts/components/`
2. Create corresponding CSS in `assets/css/blocks/`
3. Register block pattern if reusable

```php
<?php
// template-parts/components/service-card.php
/**
 * Service Card Component
 *
 * @param array $args {
 *     @type string $title   Card title.
 *     @type string $content Card content.
 *     @type string $icon    Icon identifier.
 *     @type string $url     Link URL.
 * }
 */

$defaults = [
    'title'   => '',
    'content' => '',
    'icon'    => '',
    'url'     => '',
];

$args = wp_parse_args( $args ?? [], $defaults );
?>

<article class="service-card">
    <?php if ( $args['icon'] ) : ?>
        <div class="service-card__icon">
            <?php echo esc_html( $args['icon'] ); ?>
        </div>
    <?php endif; ?>
    
    <h3 class="service-card__title">
        <?php echo esc_html( $args['title'] ); ?>
    </h3>
    
    <div class="service-card__content">
        <?php echo wp_kses_post( $args['content'] ); ?>
    </div>
    
    <?php if ( $args['url'] ) : ?>
        <a href="<?php echo esc_url( $args['url'] ); ?>" class="service-card__link">
            <?php esc_html_e( 'Learn More', 'wescarhealth' ); ?>
        </a>
    <?php endif; ?>
</article>
```

## Accessibility Requirements

- All interactive elements must be keyboard accessible
- Use semantic HTML elements (`<nav>`, `<main>`, `<article>`, `<aside>`)
- Include skip links
- Ensure color contrast meets WCAG AA (4.5:1 for text)
- Use `aria-` attributes appropriately
- Support `prefers-reduced-motion`
- Support `prefers-color-scheme` for dark mode

## Testing Instructions

```bash
# PHP CodeSniffer - WordPress standards
./vendor/bin/phpcs --standard=WordPress --extensions=php .

# PHP CodeSniffer - Auto-fix
./vendor/bin/phpcbf --standard=WordPress --extensions=php .

# Theme Check plugin (install via WP admin)
# Validates theme against WordPress.org requirements

# Accessibility testing
# Use axe DevTools browser extension
# Test with keyboard navigation
# Test with screen reader (VoiceOver on Mac)

# Performance testing
# Run Lighthouse audit
# Check Core Web Vitals
```

## Internationalization

- Wrap all user-facing strings in translation functions
- Text domain: `wescarhealth`
- Use `__()` for simple strings
- Use `_e()` for echoed strings
- Use `esc_html__()` and `esc_html_e()` for escaped output
- Use `_n()` for plurals
- Use `_x()` for context-specific translations

```php
<?php
// Correct i18n usage
echo esc_html__( 'Read More', 'wescarhealth' );

printf(
    /* translators: %s: post title */
    esc_html__( 'Continue reading %s', 'wescarhealth' ),
    esc_html( get_the_title() )
);
```

## Performance Guidelines

- Enqueue scripts with `defer` or `async` attributes
- Use `wp_enqueue_script()` with proper dependencies
- Lazy load images below the fold
- Use responsive images with `srcset`
- Minimize render-blocking resources
- Leverage browser caching via `.htaccess` or server config
- Use CSS `content-visibility: auto` for off-screen content

## Git Workflow

- Branch naming: `feature/`, `bugfix/`, `hotfix/`
- Commit messages: `type(scope): description`
  - Types: `feat`, `fix`, `docs`, `style`, `refactor`, `test`, `chore`
- Always test locally before pushing
- Create PR for review before merging to main

## Common WP-CLI Commands

```bash
# Theme management
wp theme activate wescarhealth
wp theme status wescarhealth

# Plugin management (commonly used with theme)
wp plugin install advanced-custom-fields --activate
wp plugin install safe-svg --activate

# Database
wp db export backup.sql
wp search-replace 'old-domain.com' 'new-domain.com'

# Cache
wp cache flush
wp transient delete --all

# Debugging
wp option get siteurl
wp post list --post_type=page --format=table
```

## Dependencies

### Required Plugins (Recommended)
- **Advanced Custom Fields PRO** - Custom fields management
- **Safe SVG** - SVG upload support
- **Yoast SEO** or **Rank Math** - SEO optimization

### Development Dependencies
```json
{
  "require-dev": {
    "squizlabs/php_codesniffer": "^3.7",
    "wp-coding-standards/wpcs": "^3.0",
    "phpcompatibility/phpcompatibility-wp": "^2.1"
  }
}
```

## Troubleshooting

| Issue | Solution |
|-------|----------|
| Styles not loading | Check `wp_enqueue_style()` hook priority and dependencies |
| Block patterns not showing | Verify `register_block_pattern()` is called on `init` hook |
| Template not found | Check template hierarchy and file naming |
| PHP errors | Enable `WP_DEBUG` in `wp-config.php` |
| JavaScript errors | Check browser console, verify dependencies loaded |

## Contact & Resources

- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- [theme.json Reference](https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/)
