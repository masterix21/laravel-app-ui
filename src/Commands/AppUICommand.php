<?php

namespace Masterix21\AppUI\Commands;

use Illuminate\Console\Command;

class AppUICommand extends Command
{
    public $signature = 'appui';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
