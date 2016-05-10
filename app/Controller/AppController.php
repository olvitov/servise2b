<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {



  // public $theme = 'CuborgTheme';
   // public $layout = 'cyborg';
    public $components = array('DebugKit.Toolbar', 'Session', 'Auth'  => array(
        'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'users', 'action' => 'index'),
        'authenticate' => array(
            'Form' => array(
                'passwordHasher' => 'Blowfish'
            )

        ),
        'authError' => 'Вы не имеете прав доступа к данной странице',
        'authorize' => array('Controller')
    ));


    public $helpers = array('Html', 'Form', 'Flash', 'Session');
   // public $layout = 'simple';

    public function beforeFilter(){

        parent::beforeFilter();
        $this->layout = 'simplex';
        $this->Auth->allow('index', 'view');
        $this->set('logged_user', $this->Auth->user());
    }
    public function isAuthorized($user = null) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

}
