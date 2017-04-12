<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Departments Controller
 *
 * @property \App\Model\Table\DepartmentsTable $Departments
 */
class DashbordsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->set('title', 'Dashbord');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        //   echo "Wel Come";
    }

}
