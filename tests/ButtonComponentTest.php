<?php

namespace AlexBabintsev\ShadcnBlade\Tests;

use Illuminate\Support\Facades\View;

class ButtonComponentTest extends TestCase
{
    /** @test */
    public function it_renders_a_basic_button()
    {
        $view = View::make('shadcn-blade::components.button', [
            'variant' => 'default',
            'size' => 'default',
            'disabled' => false,
            'loading' => false,
            'asChild' => false,
            'type' => 'button',
            'href' => null,
            'target' => null,
            'slot' => 'Click me',
        ]);

        $html = $view->render();

        $this->assertStringContainsString('<button', $html);
        $this->assertStringContainsString('Click me', $html);
        $this->assertStringContainsString('bg-primary', $html);
    }

    /** @test */
    public function it_renders_button_variants()
    {
        $variants = ['default', 'secondary', 'destructive', 'outline', 'ghost', 'link'];

        foreach ($variants as $variant) {
            $view = View::make('shadcn-blade::components.button', [
                'variant' => $variant,
                'size' => 'default',
                'disabled' => false,
                'loading' => false,
                'asChild' => false,
                'type' => 'button',
                'href' => null,
                'target' => null,
                'slot' => 'Button',
            ]);

            $html = $view->render();
            $this->assertStringContainsString('<button', $html);
        }
    }

    /** @test */
    public function it_renders_as_link_when_href_provided()
    {
        $view = View::make('shadcn-blade::components.button', [
            'variant' => 'default',
            'size' => 'default',
            'disabled' => false,
            'loading' => false,
            'asChild' => false,
            'type' => 'button',
            'href' => '/dashboard',
            'target' => null,
            'slot' => 'Dashboard',
        ]);

        $html = $view->render();

        $this->assertStringContainsString('<a', $html);
        $this->assertStringContainsString('href="/dashboard"', $html);
        $this->assertStringContainsString('Dashboard', $html);
    }

    /** @test */
    public function it_shows_loading_state()
    {
        $view = View::make('shadcn-blade::components.button', [
            'variant' => 'default',
            'size' => 'default',
            'disabled' => false,
            'loading' => true,
            'asChild' => false,
            'type' => 'button',
            'href' => null,
            'target' => null,
            'slot' => 'Loading',
        ]);

        $html = $view->render();

        $this->assertStringContainsString('animate-spin', $html);
        $this->assertStringContainsString('disabled', $html);
    }

    /** @test */
    public function it_handles_disabled_state()
    {
        $view = View::make('shadcn-blade::components.button', [
            'variant' => 'default',
            'size' => 'default',
            'disabled' => true,
            'loading' => false,
            'asChild' => false,
            'type' => 'button',
            'href' => null,
            'target' => null,
            'slot' => 'Disabled',
        ]);

        $html = $view->render();

        $this->assertStringContainsString('disabled', $html);
    }
}
