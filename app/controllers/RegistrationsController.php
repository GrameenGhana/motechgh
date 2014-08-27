<?php

class RegistrationsController extends BaseController {

    public function regClient() {

        return View::make('registrations.regClient');
    }

    public function outPatientVisit() {

        return View::make('patients.outPatientVisit');
    }
    

}
