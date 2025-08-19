<?php

namespace Esanj\PublicPages\Console;

use Illuminate\Console\Command;

class PublishLangCommand extends Command
{
    protected $signature = 'publicpages:publish-lang';
    protected $description = 'Publish language files for public pages';

    public function handle(): int
    {
        $this->call('vendor:publish', [
            '--tag' => 'esanj-public-pages-lang',
            '--force' => true
        ]);

        $this->info('📘 Language files published.');
        return self::SUCCESS;
    }
}
