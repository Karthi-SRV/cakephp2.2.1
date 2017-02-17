CakePHP v_2.2.1 Auth Component Login Tutorial

In this tutorial we are going to see user login and registration using CakePHP AuthComponent. Every php frameworks will have their own Auth component that will handle user authentcation and authorization functionality. All we need to is just include that login component in our application and write few lines of code that will handle will the login functionality.

The CakePHP is one of the nice PHP framework that has Authcompoent. This CakePHP Authcompoent will handle user authentcation and authorization functionality. Please download source and follow the tutorial step by step to integrate CakePHP AuthComponent in your CakePHP webapplication.

Create Sample Database with Tables:
Before continuing this tutorial please create sample datebase with table using below SQL queries.

--
-- Database: `user_login`
--
CREATE DATABASE IF NOT EXISTS `user_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user_login`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `social_id` varchar(100) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uuid` varchar(70) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `login` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

Include and Configure CakePHP AuthComponent In AppController:
 

Before you going to include CakePHP AuthComponent in your CakePHP web application, please ensure following two things

1. User need to be authenticated application wide or 2. User need to be authenticated only for particular Controller. If user need to be authenticated only for particular Controller then you need to add CakePHP AuthComponent in that particular Controller itself enough. But if user need to be authenticated application wide, then you need to add CakePHP AuthComponent in the CakePHP AppController. I am going to add CakePHP AuthComponent in the AppController to implement user authentcation and authorization functionality application wide.

To add CakePHP AuthComponent in your web application include following lines of code.

public $components = array('Auth');
Now Iam going to implement CakePHP AuthComponent login using email instead of username. So we need to configure CakePHP AuthComponent based on email using CakePHP authenticate method. As well as initialize Auth login Loginredirect page, loginAction page and logoutRedirect page like in the below code.

class AppController extends Controller {
	public $components = array( 'Cookie', 'Session', 'RequestHandler', 'Auth');
	public $helpers = array('Cache', 'Html', 'Form', 'Session');

	public function beforeFilter(){
		$this->Auth->loginAction = array( 'controller' => 'users', 'action' => 'login');
		$this->Auth->loginRedirect = array( 'controller' => 'users', 'action' => 'index');
		$this->Auth->logoutRedirect = array( 'controller' => 'users', 'action' => 'login');
		$this->Auth->authenticate = array( 'Form' => array( 'userModel' => 'User', 'fields' => array( 'username' => 'email', 'password' => 'password')));
		$this -> set('name', $this->Auth->user('name'));
		$this -> set('uuid', $this->Auth->user('uuid'));
	}
}

Now you successfully included and configured CakePHP Authcomponent.

Create UsersController and add User Login and Registration Page:
 

Now create UsersController in the app/Controller folder and add beforeFilter method. This beforeFilter method will get excuted before start excute other methods in UsersController. So here i am going to allow few methods not validate user authentication by Authcomponent.

Class UsersController extends AppController
{
	public function beforeFilter()
	{
		$this->Auth->allow( 'register');
		parent::beforeFilter();
	}
}
Now add login and registration method that will handle user login and registration functionality. During user registration we must hash his/her password and save it to the database.

$this->request->data['User']['password'] = $this->Auth->password( $this->request->data['User']['password'] );
here is the login method script.

public function login()
{
	$this->layout = 'login';
	if ( !empty( $this->request->data )) {
		$this->Auth->login();
		$id = $this->Auth->user('id');
		if (!empty($id)) {
			$this->Session->setFlash(LOGIN_SUCCESS, 'default', array( 'class' => 'message success'), 'success' );
			$this->redirect(BASE_PATH);
		} else {
			$this->Session->setFlash(LOGIN_ERROR, 'default', array( 'class' => 'message error'), 'error' );
			$this->redirect(BASE_PATH.'login');
		}
	}
}
here is the registration method script.

public function register()
{
	$this->layout = 'login';
	if( !empty( $this->request->data ) ) {
		$this->request->data['User']['password'] = $this->Auth->password( $this->request->data['User']['password'] );
		$this->request->data['User']['uuid'] = String::uuid ();
		if( $this->User->save( $this->request->data ) ){
			$this->Session->setFlash(REGISTRATION_SUCCESS, 'default', array( 'class' => 'message error'), 'success' );
			$this->redirect(BASE_PATH.'login');
		}else{
			$this->Session->setFlash(REGISTRATION_FAILURE, 'default', array( 'class' => 'message error'), 'error' );
			$this->redirect(BASE_PATH.'login');
		}

	}
}
Create User Login and Registration View Files:
Now create Users folder in app/View directory, and create following two ctp files login.ctp and register.php

here is login.ctp file form script.

here id the register.ctp file form script.

We successfully completed CakePHP AuthComponent Integration in CakePHP web application. Any issues leave your comments below..