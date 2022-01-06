<?php

namespace App\Modules\Reports\Controllers;

use App\Modules\Reports\Contracts\IReports;
use App\Http\Controllers\Controller;

class ReportsController extends Controller{
    
    protected $IReports ;

    public function __construct(IReports $IReports){
        $this->IReports = $IReports;
    }

    public function getReports(){
        $results = $this->IReports->getReports();
        return $results;
    }
}


?>