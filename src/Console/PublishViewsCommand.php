<?php

namespace Esanj\PublicPages\Console;

use Illuminate\Console\Command;

class PublishViewsCommand  extends Command
{
    protected $signature = 'publicpages:publish-views';
    protected $description = 'Publish view and asset files for public pages';

    public function handle(): int
    {
        $this->call('vendor:publish', [
            '--tag' => 'esanj-public-pages-views',
            '--force' => true
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'esanj-public-pages-assets',
            '--force' => true
        ]);

        $this->info('🖼 Views and public assets published.');
        return self::SUCCESS;
    }
}
