<?php

    namespace App\Modules\Reports\Contracts;

    interface IReports {
        
        public function getReports();
        public function getReportById($id);
        public function createReport($data);
        public function updateReport($id, $data);
        public function deleteReport($id);

    }
    


?>