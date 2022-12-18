<?php

namespace App\Listeners;

use App\Events\SeriesCreated as EventsSeriesCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\SeriesCreated;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class EmailUserAboutSeriesCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventsSeriesCreated $event)
    {
        $usersAll = User::all();
        
        foreach($usersAll as $key => $user) {

            $email = new SeriesCreated(
                $event->SeiresNome,
                $event->SeriesId,
                $event->SeriesSeasonsQty,
                $event->SeriesEpisodesPerSeason,
            );

            $when = now()->addSeconds($key * 5);
            Mail::to($user)->later($when, $email);
        }
    }
}
