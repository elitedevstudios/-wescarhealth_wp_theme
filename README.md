# WesCar Health WordPress Theme

A modern, accessible WordPress theme built for healthcare organizations. Features mobile-first design, BEM methodology, container queries, and strict security practices.

## Features

- **Modern WordPress Development** - Block editor (Gutenberg) support with classic fallback
- **Mobile-First Design** - Responsive layouts using container queries
- **BEM Methodology** - Consistent, maintainable CSS architecture
- **Accessibility Ready** - WCAG AA compliant with skip links, ARIA labels, and keyboard navigation
- **Security Hardened** - Proper escaping, sanitization, and nonce verification
- **Performance Optimized** - Deferred scripts, lazy loading, and minimal dependencies
- **Customizer Integration** - Easy theme customization without code
- **Block Patterns** - Pre-built healthcare-focused content patterns

## Requirements

- WordPress 6.4+
- PHP 8.1+

## Installation

1. Download or clone this theme to your WordPress themes directory:
   ```bash
   cd wp-content/themes/
   git clone [repository-url] wescarhealth
   ```

2. Activate the theme via WP-CLI or WordPress admin:
   ```bash
   wp theme activate wescarhealth
   ```

3. Configure theme settings in **Appearance > Customize**

## Directory Structure

```
wescarhealth/
├── assets/
│   ├── css/          # Stylesheets
│   ├── js/           # JavaScript files
│   ├── images/       # Theme images
│   └── fonts/        # Custom fonts
├── inc/              # PHP includes
├── template-parts/   # Reusable template parts
├── templates/        # Full page templates
├── patterns/         # Block patterns
└── languages/        # Translation files
```

## Development

### CSS Guidelines

- Use BEM naming: `.block__element--modifier`
- Use logical properties: `margin-inline`, `padding-block`
- Use container queries for component responsiveness
- Mobile-first approach

### PHP Guidelines

- Prefix functions with `wescarhealth_`
- Use strict typing: `declare(strict_types=1);`
- Always escape output and sanitize input
- Follow WordPress Coding Standards

### JavaScript Guidelines

- Use ES6+ syntax
- No jQuery dependency
- Namespace under `WescarHealth` object

## Customization

### Theme Options

Navigate to **Appearance > Customize > WesCar Health Settings** to configure:

- Header settings (sticky header, CTA button)
- Footer settings (copyright text)
- Contact information
- Social media links

### Menus

Register menus in **Appearance > Menus**:

- Primary Menu - Main navigation
- Footer Menu - Footer links
- Mobile Menu - Mobile navigation
- Social Links - Social media icons

### Widget Areas

- Sidebar
- Footer Columns 1-4

## Block Patterns

Pre-built patterns available in the block editor:

- Hero Section
- Services Grid
- Call to Action
- Contact Information

## Security

This theme implements WordPress security best practices:

- All output is escaped using appropriate functions
- All input is sanitized before processing
- Nonces are used for form submissions
- Capability checks for privileged operations
- Security headers are set

## Accessibility

- Skip link for keyboard navigation
- Semantic HTML structure
- ARIA labels and roles
- Focus indicators
- Reduced motion support
- Color contrast compliance

## Browser Support

- Chrome (last 2 versions)
- Firefox (last 2 versions)
- Safari (last 2 versions)
- Edge (last 2 versions)

## License

GPL-2.0-or-later

## Credits

- Built with WordPress theme development best practices
- Icons from Lucide Icons
- Inspired by modern healthcare design patterns

## Support

For support, please open an issue in the repository or contact the development team.
