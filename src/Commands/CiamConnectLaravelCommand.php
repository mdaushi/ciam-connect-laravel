<?php

namespace Mdaushi\CiamConnectLaravel\Commands;

use Illuminate\Console\Command;

class CiamConnectLaravelCommand extends Command
{
    public $signature = 'ciam-connect-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
