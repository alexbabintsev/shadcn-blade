<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShadCN Blade Button Examples</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/shadcn-blade.css') }}" rel="stylesheet">
</head>
<body class="p-8 space-y-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">ShadCN Blade Button Examples</h1>

        <!-- Default Button -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">Default</h2>
            <div class="flex gap-4">
                <x-shadcn::button>Button</x-shadcn::button>
            </div>
        </section>

        <!-- Variants -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">Variants</h2>
            <div class="flex flex-wrap gap-4">
                <x-shadcn::button variant="default">Default</x-shadcn::button>
                <x-shadcn::button variant="secondary">Secondary</x-shadcn::button>
                <x-shadcn::button variant="destructive">Destructive</x-shadcn::button>
                <x-shadcn::button variant="outline">Outline</x-shadcn::button>
                <x-shadcn::button variant="ghost">Ghost</x-shadcn::button>
                <x-shadcn::button variant="link">Link</x-shadcn::button>
            </div>
        </section>

        <!-- Sizes -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">Sizes</h2>
            <div class="flex items-center gap-4">
                <x-shadcn::button size="sm">Small</x-shadcn::button>
                <x-shadcn::button size="default">Default</x-shadcn::button>
                <x-shadcn::button size="lg">Large</x-shadcn::button>
            </div>
        </section>

        <!-- Icon Button -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">Icon Button</h2>
            <div class="flex gap-4">
                <x-shadcn::button variant="secondary" size="icon">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </x-shadcn::button>
            </div>
        </section>

        <!-- With Icon -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">With Icon</h2>
            <div class="flex gap-4">
                <x-shadcn::button variant="outline" size="sm">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    New Branch
                </x-shadcn::button>
            </div>
        </section>

        <!-- Loading State -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">Loading State</h2>
            <div class="flex gap-4">
                <x-shadcn::button size="sm" :loading="true">Please wait</x-shadcn::button>
            </div>
        </section>

        <!-- Disabled State -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">Disabled State</h2>
            <div class="flex gap-4">
                <x-shadcn::button :disabled="true">Disabled Button</x-shadcn::button>
            </div>
        </section>

        <!-- As Link -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">As Link</h2>
            <div class="flex gap-4">
                <x-shadcn::button href="https://example.com" target="_blank">
                    External Link
                </x-shadcn::button>
                <x-shadcn::button href="/dashboard" variant="outline">
                    Internal Link
                </x-shadcn::button>
            </div>
        </section>

        <!-- AsChild Pattern -->
        <section class="space-y-4">
            <h2 class="text-xl font-semibold">AsChild Pattern</h2>
            <div class="flex gap-4">
                <x-shadcn::button :asChild="true">
                    <a href="/login" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2">
                        Login
                    </a>
                </x-shadcn::button>
            </div>
        </section>
    </div>
</body>
</html>
