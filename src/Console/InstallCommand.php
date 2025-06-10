<?php

namespace Esanj\PublicPages\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'publicpages:install';
    protected $description = 'Install public pages - publish views and assets';

    public function handle(): int
    {
        $this->call('publicpages:publish-views');

        $this->info('✅ Public Pages installed successfully.');
        return self::SUCCESS;
    }
}
