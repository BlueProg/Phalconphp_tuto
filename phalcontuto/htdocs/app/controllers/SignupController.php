<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {
    	$user = new Users();

    	echo $user->getSource();
    	$success = $user->save($this->request->getPost(), array('name', 'email'));

    	if ($success) {
    		echo "Success register";
    	}
    	else {
    		echo "Fail";
    	}

    	$this->view->disable();
    }

}