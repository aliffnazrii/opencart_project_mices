<?php

namespace queue\jobs;

class DatabaseJobRecord
{
	protected $record;

	public function __construct($record)
    {
        $this->record = $record;
    }

    public function increment()
    {
        $this->record->attempts++;

        return $this->record->attempts;
    }

    public function touch()
    {
        $this->record->reserved_at = time();

        return $this->record->reserved_at;
    }

    public function __get($key)
    {
        return $this->record->{$key};
    }
}