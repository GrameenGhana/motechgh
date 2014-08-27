<?php

class PatientsController extends BaseController {

    

    public function outPatientVisit() {

        return View::make('patients.outPatientVisit');
    }
    
    
    public function ANCVisit() {

        return View::make('patients.ANCVisit');
    }
    
    public function CWCVisit() {

        return View::make('patients.CWCVisit');
    }

}
