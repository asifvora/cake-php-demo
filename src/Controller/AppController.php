<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('ImageUpload');
        $this->loadComponent('Math');

        $this->loadComponent('Auth', [  
            'loginAction'=>['controller'=>'Users', 'action'=>'login'],
            'loginRedirect'=>['controller'=>'Users', 'action'=>'index'],
            'logoutRedirect'=>[ 'controller'=>'Users', 'action'=>'login']
        ]);
    }

//    public function isAuthorized($user)
//    {
//        // Admin can access every action
//        if(isset($user['role'])&&$user['role']==='Admin'){
//            return true;
//        }
//        // Default deny
//        return false;
//    }

//    public function beforeFilter(Event $event)
//    {
//       // $this->Auth->allow('login');
//    }

//    public function afterFilter(Event $event)
//    {
//        parent::afterFilter($event);
//        if(isset($user['role'])&& $user['role']==='Admin'){
//            $this->Auth->allow(['logout', 'index', 'edit', 'delete', 'view']);
//            return true;
//        }else{
//            $this->Auth->allow(['logout', 'index', 'edit', 'delete', 'view']);
//        }
//    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if(!array_key_exists('_serialize', $this->viewVars)&&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ){
            $this->set('_serialize', true);
        }
    }

}
