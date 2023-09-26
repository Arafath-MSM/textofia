<?php

namespace App\Providers;

use App\Models\{Category, Post};
use App\Observers\PostObserver;
use App\Models\CaseStudies;
use App\Models\Testimonial;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    	$this->app->bind('path.public', function(){
            return base_path().'/public_html';
    	});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $categories = Category::all();
        View::composer('*', function ($view) use ($categories) {
            $view->with('categories', $categories);
        });
        $CaseStudies = CaseStudies::all();
        View::composer('*', function ($view) use ($CaseStudies) {
            $view->with('CaseStudies', $CaseStudies);
        });
        $Testimonial = Testimonial::all();
        View::composer('*', function ($view) use ($Testimonial) {
            $view->with('Testimonial', $Testimonial);
        });
        
       
        Post::observe(PostObserver::class);


        \Config::set('app.name', setting('app_name'));
        \Config::set('app.env', setting('app_env'));
        \Config::set('app.url', setting('app_url'));
        \Config::set('app.debug', setting('app_log_mode'));

        \Config::set('mail.default', setting('mail_driver'));
        \Config::set('mail.mailers.smtp.host', setting('main_host'));
        \Config::set('mail.mailers.smtp.username', setting('mail_username'));
        \Config::set('mail.mailers.smtp.password', setting('mail_password'));
        \Config::set('mail.mailers.smtp.port', setting('main_port'));
        \Config::set('mail.from.address', setting('from_email'));
        \Config::set('mail.from.name', setting('from_name'));
        \Config::set('newsletter.apiKey', setting('mailchimp_api'));
        \Config::set('newsletter.lists.subscribers.id', setting('mailchimp_list_id'));
    }
}
