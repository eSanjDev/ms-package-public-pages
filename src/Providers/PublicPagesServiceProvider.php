<?php

namespace Esanj\PublicPages\Providers;

use Esanj\PublicPages\Console\{InstallCommand, PublishConfigCommand, PublishLangCommand, PublishViewsCommand};
use Illuminate\Support\ServiceProvider;

class PublicPagesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                PublishConfigCommand::class,
                PublishLangCommand::class,
                PublishViewsCommand::class,
            ]);
        }
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'publicpages');

        $this->loadViewsFrom(__DIR__ . '/../resources/views/errors', 'errors');

        $this->mergeConfigFrom(__DIR__ . '/../config/publicpages.php', 'publicpages');

        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'publicpages');

        // Views
        $this->publishes([
            __DIR__ . '/../resources/views/home.blade.php' => resource_path('views/vendor/publicpages/home.blade.php'),
            __DIR__ . '/../resources/views/errors' => resource_path('views/errors'),
        ], 'public-pages-views');

        // Assets
        $this->publishes([
            __DIR__ . '/../public' => public_path(),
        ], 'public-pages-assets');

        // Lang
        $this->publishes([
            __DIR__ . '/../lang' => lang_path(),
        ], 'public-pages-lang');

        // Config
        $this->publishes([
            __DIR__ . '/../config/publicpages.php' => config_path('publicpages.php'),
        ], 'public-pages-config');
    }
}
