<?php

namespace App\Providers;

use App\Events\ActivationEvent;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ActivationEvent::class =>[
            \App\Listeners\ActivationListener::class,
            \App\Listeners\RegisterNewsLetterListener::class,
            \App\Listeners\NotifyAdminListener::class,

            //you can add more classses to send more mails here
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
