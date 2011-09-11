<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller {

    public function action_index()
    {
        $view = new View_Contact_Index;
        $view->set("message", "Contact Us");
        $this->response->body($view);
    }

}
