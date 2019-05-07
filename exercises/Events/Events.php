<?php

declare(strict_types=1);

namespace Exercises\Events;

/**
 * Create an event system similar to one used in jQuery.
 *
 * @property callable[] $events
 * @method void on(string $event, callable $callback)
 * @method void fire(string $event)
 * @method void off(string $event)
 */
final class Events
{
    /**
     * @var callable[]
     */
    private $events = [];

    public function on(string $event, callable $callback): void
    {
        $this->events[$event][] = $callback;
    }

    public function fire(string $event): void
    {
        if ($this->events[$event]) {
            foreach ($this->events[$event] as $listener) {
                $listener();
            }
        }
    }

    public function off(string $event): void
    {
        unset($this->events[$event]);
    }
}
