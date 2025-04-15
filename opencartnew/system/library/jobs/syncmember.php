<?php

namespace Jobs;

use queue\InteractsWithQueue;
use queue\SerializesModels;
use queue\bus\Dispatchable;
use queue\bus\Queueable;
use queue\Dispatcher;
use acilit\AcilitMember;

class SyncMember
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $table = 'oc_acilit_jobs';
    public $queue = 'sync_member';
    public $id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id) {
    	$this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() {
        $acilit_member = new AcilitMember($this->registry);
        $acilit_member->syncMember($this->id);
    }
}
