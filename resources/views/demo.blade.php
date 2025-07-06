<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShadCN Blade Demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        :root {
            --background: 0 0% 100%;
            --foreground: 222.2 84% 4.9%;
            --card: 0 0% 100%;
            --card-foreground: 222.2 84% 4.9%;
            --popover: 0 0% 100%;
            --popover-foreground: 222.2 84% 4.9%;
            --primary: 221.2 83.2% 53.3%;
            --primary-foreground: 210 40% 98%;
            --secondary: 210 40% 96%;
            --secondary-foreground: 222.2 84% 4.9%;
            --muted: 210 40% 96%;
            --muted-foreground: 215.4 16.3% 46.9%;
            --accent: 210 40% 96%;
            --accent-foreground: 222.2 84% 4.9%;
            --destructive: 0 84.2% 60.2%;
            --destructive-foreground: 210 40% 98%;
            --border: 214.3 31.8% 91.4%;
            --input: 214.3 31.8% 91.4%;
            --ring: 221.2 83.2% 53.3%;
            --radius: 0.5rem;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
        }

        .border-border { border-color: hsl(var(--border)); }
        .bg-background { background-color: hsl(var(--background)); }
        .text-foreground { color: hsl(var(--foreground)); }
        .bg-primary { background-color: hsl(var(--primary)); }
        .text-primary-foreground { color: hsl(var(--primary-foreground)); }
        .bg-secondary { background-color: hsl(var(--secondary)); }
        .text-secondary-foreground { color: hsl(var(--secondary-foreground)); }
        .bg-destructive { background-color: hsl(var(--destructive)); }
        .text-destructive-foreground { color: hsl(var(--destructive-foreground)); }
        .bg-accent { background-color: hsl(var(--accent)); }
        .text-accent-foreground { color: hsl(var(--accent-foreground)); }
        .hover\:bg-primary\/90:hover { background-color: hsl(var(--primary) / 0.9); }
        .hover\:bg-secondary\/80:hover { background-color: hsl(var(--secondary) / 0.8); }
        .hover\:bg-destructive\/90:hover { background-color: hsl(var(--destructive) / 0.9); }
        .hover\:bg-accent:hover { background-color: hsl(var(--accent)); }
        .hover\:text-accent-foreground:hover { color: hsl(var(--accent-foreground)); }
        .text-primary { color: hsl(var(--primary)); }
        .focus-visible\:ring-ring:focus-visible { --tw-ring-color: hsl(var(--ring)); }
    </style>
</head>
<body class="min-h-screen bg-background">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-foreground mb-4">ShadCN Blade Demo</h1>
            <p class="text-lg text-muted-foreground">Beautiful UI components for Laravel Blade</p>
        </header>

        <div class="max-w-4xl mx-auto space-y-12">
            <!-- Hero Section -->
            <section class="text-center space-y-6">
                <h2 class="text-3xl font-semibold">Get Started Today</h2>
                <p class="text-muted-foreground max-w-2xl mx-auto">
                    Build stunning interfaces with our collection of shadcn/ui components,
                    perfectly adapted for Laravel Blade templates.
                </p>
                <div class="flex justify-center gap-4">
                    <x-shadcn::button size="lg">
                        Get Started
                    </x-shadcn::button>
                    <x-shadcn::button variant="outline" size="lg">
                        View Documentation
                    </x-shadcn::button>
                </div>
            </section>

            <!-- Features Section -->
            <section class="grid md:grid-cols-3 gap-6">
                <div class="p-6 border border-border rounded-lg">
                    <h3 class="font-semibold mb-2">Easy to Use</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Simple Blade syntax with powerful customization options.
                    </p>
                    <x-shadcn::button variant="secondary" size="sm">
                        Learn More
                    </x-shadcn::button>
                </div>
                <div class="p-6 border border-border rounded-lg">
                    <h3 class="font-semibold mb-2">Fully Customizable</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Tailwind CSS powered with CSS variables for theming.
                    </p>
                    <x-shadcn::button variant="secondary" size="sm">
                        Customize
                    </x-shadcn::button>
                </div>
                <div class="p-6 border border-border rounded-lg">
                    <h3 class="font-semibold mb-2">Accessible</h3>
                    <p class="text-sm text-muted-foreground mb-4">
                        Built with accessibility and best practices in mind.
                    </p>
                    <x-shadcn::button variant="secondary" size="sm">
                        Explore
                    </x-shadcn::button>
                </div>
            </section>

            <!-- Action Section -->
            <section class="bg-accent p-8 rounded-lg text-center">
                <h3 class="text-2xl font-semibold mb-4">Ready to build something amazing?</h3>
                <p class="text-accent-foreground mb-6">
                    Install the package and start building beautiful interfaces today.
                </p>
                <div class="flex justify-center gap-4 flex-wrap">
                    <x-shadcn::button>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Install Package
                    </x-shadcn::button>
                    <x-shadcn::button variant="outline">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                        View Examples
                    </x-shadcn::button>
                    <x-shadcn::button variant="ghost">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                        </svg>
                        GitHub
                    </x-shadcn::button>
                </div>
            </section>

            <!-- Interactive Demo -->
            <section x-data="{ loading: false, disabled: false }">
                <h3 class="text-2xl font-semibold mb-6 text-center">Interactive Demo</h3>
                <div class="bg-card p-6 border border-border rounded-lg">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" x-model="loading" class="rounded">
                                Loading State
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" x-model="disabled" class="rounded">
                                Disabled State
                            </label>
                        </div>
                        <div class="flex gap-4 flex-wrap">
                            <button
                                :disabled="disabled || loading"
                                :class="[
                                    'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50',
                                    'bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2'
                                ]"
                                @click="alert('Button clicked!')"
                            >
                                <svg x-show="loading" class="animate-spin -ml-1 mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span x-text="loading ? 'Loading...' : 'Click me'"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
