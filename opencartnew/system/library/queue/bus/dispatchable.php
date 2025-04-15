<?php

namespace queue\bus;

trait Dispatchable
{
	public static function dispatch()
    {
         return new PendingDispatch($this->registry, new static(...func_get_args()));
    }

    public static function dispatchNow()
    {
        // return app(Dispatcher::class)->dispatchNow(new static(...func_get_args()));
    }
}