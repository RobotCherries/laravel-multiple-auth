<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated worker can listen to the channel.
|
*/

Broadcast::channel('App.Worker.{id}', function ($worker, $id) {
    return (int) $worker->id === (int) $id;
});
