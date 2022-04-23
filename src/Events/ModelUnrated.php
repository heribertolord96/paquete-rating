<?php

namespace Laraveles\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ModelUnrated
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    private Model $qualifier;
    private Model $rateable;

    public function __construct(Model $qualifier, Model $rateable)
    {
        $this->qualifier = $qualifier;
        $this->rateable = $rateable;
    }

    public function getQualifier(): Model
    {
        return $this->qualifier;
    }

    public function getRateable(): Model
    {
        return $this->rateable;
    }
}
