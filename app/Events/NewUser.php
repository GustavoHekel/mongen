<?php

namespace App\Events;

use App\Models\Usuario;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewUser extends Event
{
    use SerializesModels;

    public $usuario;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
