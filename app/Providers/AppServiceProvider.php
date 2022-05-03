<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //#1 Here I'm providing the channels to all my views
        // View::share('channels', Channel::orderBy('name')->get());

        //#2  - Granular views -I can filter the views that I want use this variable
        //and I'm focus on a single place to lead with this variable - One single change will spread to every use
//        View::composer(['post.*', 'channel.index'], function ($view) {
//            $view->with('channels', Channel::orderBy('name')->get());
//        });

        //#3 - If I have a big query or having multiples conditions, I can pass this
        // responsability to a class
//        View::composer(['post.*', 'channel.index'], ChannelsComposer::class);

        //#4 - I even can use partials to split my views in components and use this variable only in partials
        View::composer('partials.channels.*', ChannelsComposer::class);

    }
}
