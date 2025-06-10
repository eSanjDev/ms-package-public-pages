<?php

namespace Esanj\PublicPages\Console;

use Illuminate\Console\Command;

class PublishConfigCommand extends Command
{
    protected $signature = 'publicpages:publish-config';
    protected $description = 'Publish configuration file for public pages';

    public function handle(): int
    {
        $this->call('vendor:publish', [
            '--tag' => 'public-pages-config',
            '--force' => true
        ]);

        $this->info('🛠 Config file published.');
        return self::SUCCESS;
    }
}
