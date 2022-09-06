<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Base\BusinessLogic\IUserLogic;
use App\Base\DataAccess\IUserDataAccess;
use App\Base\BusinessLogic\ISectionLogic;
use App\Base\DataAccess\ISectionDataAccess;
use App\Base\BusinessLogic\ISerieLogic;
use App\Base\DataAccess\ISerieDataAccess;
use App\Base\BusinessLogic\ISeasonLogic;
use App\Base\DataAccess\ISeasonDataAccess;

use App\BusinessLogic\UserLogic;
use App\DataAccess\UserDataAccess;
use App\BusinessLogic\SectionLogic;
use App\DataAccess\SectionDataAccess;
use App\BusinessLogic\SerieLogic;
use App\DataAccess\SerieDataAccess;
use App\BusinessLogic\SeasonLogic;
use App\DataAccess\SeasonDataAccess;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IUserLogic::class, UserLogic::class);
        $this->app->singleton(IUserDataAccess::class, UserDataAccess::class);
        $this->app->singleton(ISectionLogic::class, SectionLogic::class);
        $this->app->singleton(ISectionDataAccess::class, SectionDataAccess::class);
        $this->app->singleton(ISerieLogic::class, SerieLogic::class);
        $this->app->singleton(ISerieDataAccess::class, SerieDataAccess::class);
        $this->app->singleton(ISeasonLogic::class, SeasonLogic::class);
        $this->app->singleton(ISeasonDataAccess::class, SeasonDataAccess::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
