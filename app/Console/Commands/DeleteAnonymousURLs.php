<?php

namespace App\Console\Commands;

use App\Models\Link;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DeleteAnonymousURLs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'links:cleananonymous';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete anonymous links (links without user_id)';

    /**
     * Execute the console command.
     */
    
    public function handle()
    {
        Log::info('Deleting anonymous links');
        Link::wherenull('user_id')->delete();
    }
}
