<?php

class RegistrationsController extends BaseController {

    public function regClient() {

        return View::make('registrations.regClient');
    }

    public function regANC() {

        return View::make('registrations.regANC');
    }
    
    public function regCWC() {

        return View::make('registrations.regCWC');
    }
    
    public function editClient() {

        return View::make('registrations.editClient');
    }
    

}
