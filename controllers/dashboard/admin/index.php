<?php
/**
 * Description of admin_settings
 * 
 * This class is an extension of the controller class
 * Within this class we handle everything needed for the admin_settings page
 * 
 * This is a private page. Login is required.
 *
 * @author Dennis Kuijpers
 * @copyright (c) 2014, Dennis Kuijpers
 * 
 */
class Index extends Controller{
    
// Setting the variables    
    // The main page used for this controller
    private $pagepath = 'dashboard/admin/'; // Always provide a trailing slash ( '/' ) at the end !!!
    // The view used for this page
    private $viewpath = 'admin/'; // Always provide a trailing slash ( '/' ) at the end !!!
    // Setup needed for this page
    private $setup = 'dashboard';
    // Basic for the page title
    private $pagetitle = 'Dashboard - Admin settings '; // Always provide space dash space ( ' - ' ) at the end!!!
    // This is ment for the navigation to show the active status.
    public $firstactive = 'settings';
    private $secondactive = 'admin';
    private $thirdactive = '';
    private $fourthactive = '';
    
    /**
     *  function __construct will automatically generate when method is called
     */
    
    public function __construct(){
        parent::__construct(); // Insert __construct method from Class controller
        
            //Debug::sentence("admin_settings controller");
        //Cookie::cookie_display();die();
                
        // Custom JS files
//        $this->view->js = ['toggle.js'
//                           //, 'pietje.js'
//                          ];
//        // Custom CSS files
//        $this->view->css = ['toggle.css'
//                            //, 'pietje.css'
//                           ];  
    }
    /**
     *  index() Standard displayed page when entering admin_settings
     * 
     *  - title                 The title of the page
     *  - topactive             The name of the active link in the top navigation
     *  - active                The name of the active link in the side navigation
     *  - render                The page to be rendered on the website with the type of rendering
     *
     */
    public function index(){
          $this->view->title = $this->pagetitle;
          $this->view->firstactive = $this->firstactive;
          $this->view->secondactive =  $this->secondactive;
          $this->view->thirdactive = $this->thirdactive;
          $this->view->fourthactive = $this->fourthactive;
          $this->view->render($this->viewpath.'index', $this->setup);
    }

    
}


