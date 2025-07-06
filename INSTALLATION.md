# Installation Guide

## Quick Installation

1. **Install the package via Composer:**
   ```bash
   composer require alexbabintsev/shadcn-blade
   ```

2. **Run the installation command:**
   ```bash
   php artisan shadcn-blade:install
   ```

3. **Add the CSS to your layout:**
   ```html
   <link href="{{ asset('css/shadcn-blade.css') }}" rel="stylesheet">
   ```

4. **Start using components:**
   ```blade
   <x-shadcn::button>Click me</x-shadcn::button>
   ```

## Manual Installation

### Step 1: Install Dependencies

```bash
composer require alexbabintsev/shadcn-blade
```

### Step 2: Publish Assets

```bash
# Publish CSS and views
php artisan vendor:publish --tag="shadcn-blade-views"
php artisan vendor:publish --tag="shadcn-blade-assets"
```

### Step 3: Configure Tailwind CSS

Add the package views to your `tailwind.config.js`:

```javascript
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/alexbabintsev/shadcn-blade/resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        border: "hsl(var(--border))",
        input: "hsl(var(--input))",
        ring: "hsl(var(--ring))",
        background: "hsl(var(--background))",
        foreground: "hsl(var(--foreground))",
        primary: {
          DEFAULT: "hsl(var(--primary))",
          foreground: "hsl(var(--primary-foreground))",
        },
        secondary: {
          DEFAULT: "hsl(var(--secondary))",
          foreground: "hsl(var(--secondary-foreground))",
        },
        destructive: {
          DEFAULT: "hsl(var(--destructive))",
          foreground: "hsl(var(--destructive-foreground))",
        },
        muted: {
          DEFAULT: "hsl(var(--muted))",
          foreground: "hsl(var(--muted-foreground))",
        },
        accent: {
          DEFAULT: "hsl(var(--accent))",
          foreground: "hsl(var(--accent-foreground))",
        },
        popover: {
          DEFAULT: "hsl(var(--popover))",
          foreground: "hsl(var(--popover-foreground))",
        },
        card: {
          DEFAULT: "hsl(var(--card))",
          foreground: "hsl(var(--card-foreground))",
        },
      },
      borderRadius: {
        lg: "var(--radius)",
        md: "calc(var(--radius) - 2px)",
        sm: "calc(var(--radius) - 4px)",
      },
    },
  },
  plugins: [],
}
```

### Step 4: Add Alpine.js (Optional)

For interactive components, add Alpine.js to your layout:

```html
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
```

### Step 5: Include CSS

Add the CSS to your main layout file:

```html
<link href="{{ asset('css/shadcn-blade.css') }}" rel="stylesheet">
```

Or compile it with your existing CSS build process.

## Customization

### CSS Variables

You can customize the appearance by overriding CSS variables in your main CSS file:

```css
:root {
  --primary: 221.2 83.2% 53.3%;
  --primary-foreground: 210 40% 98%;
  --secondary: 210 40% 96%;
  --secondary-foreground: 222.2 84% 4.9%;
  /* ... other variables */
}
```

### Dark Mode

Enable dark mode by adding the `dark` class to your HTML element:

```html
<html class="dark">
```

### Component Prefix

All components are prefixed with `shadcn::` to avoid conflicts:

```blade
<x-shadcn::button>Button</x-shadcn::button>
```

## Troubleshooting

### CSS Not Loading

Make sure the CSS file is published and accessible:

```bash
php artisan vendor:publish --tag="shadcn-blade-assets" --force
```

### Tailwind Classes Not Working

Ensure your Tailwind config includes the package views:

```javascript
content: [
  "./resources/**/*.blade.php",
  "./vendor/alexbabintsev/shadcn-blade/resources/**/*.blade.php",
],
```

### Components Not Found

Clear your view cache:

```bash
php artisan view:clear
php artisan config:clear
```

## Development

For package development:

```bash
# Install dependencies
composer install
npm install

# Run tests
composer test

# Build CSS
npm run build

# Watch for changes
npm run dev
```

## Support

- [GitHub Issues](https://github.com/alexbabintsev/shadcn-blade/issues)
- [Documentation](https://github.com/alexbabintsev/shadcn-blade)
- [Examples](./resources/views/examples/button-examples.blade.php) 
