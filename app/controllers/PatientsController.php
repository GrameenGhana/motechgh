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
    
    public function delivery() {

        return View::make('patients.delivery');
    }

    
    public function deliveryNotification() {

        return View::make('patients.deliveryNotification');
    }
    
    public function PNCBaby() {

        return View::make('patients.PNCBaby');
    }
    
    public function PNCMother() {

        return View::make('patients.PNCMother');
    }
    
    public function caseHistory() {

        return View::make('patients.caseHistory');
    }
    
    public function TTNonPregnant() {

        return View::make('patients.TTNonPregnant');
    }
    
    public function pregTermination() {

        return View::make('patients.pregTermination');
    }
    
    public function clientDeath() {

        return View::make('patients.clientDeath');
    }
}
