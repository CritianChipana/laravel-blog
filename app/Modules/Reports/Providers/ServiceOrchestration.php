<?php

namespace App\Modules\Reports\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use App\Modules\Reports\Contracts\IReports;
use App\Modules\Reports\Repositories\RepoReports;

class ServiceOrchestration extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(IReports::class, function (){
            return new RepoReports(new DB);
        });
    }

}


?>