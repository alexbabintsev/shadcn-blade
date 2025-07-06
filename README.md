# ShadCN Blade Components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexbabintsev/shadcn-blade.svg?style=flat-square)](https://packagist.org/packages/alexbabintsev/shadcn-blade)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/alexbabintsev/shadcn-blade/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/alexbabintsev/shadcn-blade/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/alexbabintsev/shadcn-blade/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/alexbabintsev/shadcn-blade/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alexbabintsev/shadcn-blade.svg?style=flat-square)](https://packagist.org/packages/alexbabintsev/shadcn-blade)

A Laravel package that brings shadcn/ui components to Blade templates using Tailwind CSS and Alpine.js. Build beautiful, accessible interfaces without React.

## Features

- 🎨 **Pixel-perfect** shadcn/ui components for Laravel Blade
- 🎯 **Tailwind CSS** powered with design tokens
- ⚡ **Alpine.js** for interactive components
- 🔧 **Easy to use** with familiar Laravel Blade syntax
- 📱 **Responsive** and accessible by default
- 🎭 **Dark mode** support included

## Installation

You can install the package via composer:

```bash
composer require alexbabintsev/shadcn-blade
```

Publish the CSS assets:

```bash
php artisan vendor:publish --tag="shadcn-blade-views"
```

Add the CSS to your layout:

```html
<link href="{{ asset('css/shadcn-blade.css') }}" rel="stylesheet">
```

Or include the CSS in your build process by adding the package views to your Tailwind config:

```javascript
// tailwind.config.js
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/alexbabintsev/shadcn-blade/resources/**/*.blade.php",
  ],
  // ... rest of your config
}
```

## Components

### Button

The Button component supports all shadcn/ui button variants and features.

#### Basic Usage

```blade
<x-shadcn::button>Click me</x-shadcn::button>
```

#### Variants

```blade
<x-shadcn::button variant="default">Default</x-shadcn::button>
<x-shadcn::button variant="secondary">Secondary</x-shadcn::button>
<x-shadcn::button variant="destructive">Destructive</x-shadcn::button>
<x-shadcn::button variant="outline">Outline</x-shadcn::button>
<x-shadcn::button variant="ghost">Ghost</x-shadcn::button>
<x-shadcn::button variant="link">Link</x-shadcn::button>
```

#### Sizes

```blade
<x-shadcn::button size="sm">Small</x-shadcn::button>
<x-shadcn::button size="default">Default</x-shadcn::button>
<x-shadcn::button size="lg">Large</x-shadcn::button>
<x-shadcn::button size="icon">
    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 12l-4-4h8l-4 4z"/>
    </svg>
</x-shadcn::button>
```

#### States

```blade
<!-- Disabled -->
<x-shadcn::button :disabled="true">Disabled</x-shadcn::button>

<!-- Loading -->
<x-shadcn::button :loading="true">Loading...</x-shadcn::button>
```

#### As Link

```blade
<x-shadcn::button href="/dashboard">Dashboard</x-shadcn::button>
<x-shadcn::button href="https://example.com" target="_blank">External Link</x-shadcn::button>
```

#### With Icons

```blade
<x-shadcn::button variant="outline">
    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
    </svg>
    Add Item
</x-shadcn::button>
```

#### AsChild Pattern

Use the `asChild` prop to apply button styling to custom elements:

```blade
<x-shadcn::button :asChild="true">
    <a href="/login">Login</a>
</x-shadcn::button>
```

#### Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `variant` | `string` | `'default'` | Button variant: `default`, `secondary`, `destructive`, `outline`, `ghost`, `link` |
| `size` | `string` | `'default'` | Button size: `default`, `sm`, `lg`, `icon` |
| `disabled` | `boolean` | `false` | Whether the button is disabled |
| `loading` | `boolean` | `false` | Whether the button is in loading state |
| `asChild` | `boolean` | `false` | Render as child element instead of button |
| `type` | `string` | `'button'` | Button type attribute |
| `href` | `string` | `null` | If provided, renders as link instead of button |
| `target` | `string` | `null` | Link target attribute |

## Styling

The package includes shadcn/ui design tokens and CSS variables. You can customize the appearance by overriding the CSS variables:

```css
:root {
  --primary: 221.2 83.2% 53.3%;
  --primary-foreground: 210 40% 98%;
  /* ... other variables */
}
```

## Dark Mode

Dark mode is supported out of the box. Add the `dark` class to your HTML element:

```html
<html class="dark">
```

## Examples

Check out the example file at `resources/views/examples/button-examples.blade.php` for a complete showcase of all button variants and features.

## Requirements

- PHP 8.4+
- Laravel 10.0+
- Tailwind CSS
- Alpine.js (for interactive components)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alex Babintsev](https://github.com/alexbabintsev)
- [shadcn/ui](https://ui.shadcn.com/) for the original design system
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
