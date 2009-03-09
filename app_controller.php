<?php
/**
 * Controller class containing application controller's actions
 *
 * @author Chauncey Thorn <chaunceyt@gmail.com>
 * @version 1.0
 * @package Recovery
 */

class AppController extends Controller {

    /**
     * Property used to store view of controller
     *
     * @access public
     * @var string View of controller
     */
    var $view = 'Theme';

    /**
     * Property used to store list of components used by this controller's actions
     *
     * @access public
     * @var string List of components used by this controller's actions
     */
    var $components = array('Email');

    /**
     * Property used to store list of helpers used by application's all controller's actions' views
     *
     * @access public
     * @var string List of helpers used by application's all controller's actions' views
     */
    var $helpers = array('Html', 'Javascript');

    /**
     * Method called automatically before each action execution
     *
     * @access public
     */
    function beforeFilter()
    {
        $this->theme = 'Modern';
    }

    /**
     * Method called automatically before the view is rendered
     *
     * @access public
     */
    function beforeRender()
    {
        $this->theme = 'Modern';
        $viewPaths = Configure::read('viewPaths');
        array_unshift($viewPaths, array_pop($viewPaths));
        Configure::write('viewPaths', $viewPaths);
    }

    /**
     * Method used to set given error message to use in view and then render error view
     *
     * @access public
     * @param string $message Error message to be displayed
     */
    function renderError($message)
    {
        // Set error message to use in view
        $this->set('message', $message);

        // Render error view
        $this->render(null, null,  VIEWS . 'errors' . DS . 'error.ctp');
    }


    /**
     * Method used to send required e-mail to recoveryupdates@gsa.gov
     *
     * @access public
     * @param string $ofabbr Office Abbrev
     * @param string $report_type Report type
     */

    //initial nethod to send require email
    // i.e. 
    // HUD, Major Communications
    // HUD, Formula Block Grant Allocation
    // HUD, Weekly Report #X
    //templage: Templates for these files can be found at https://max.omb.gov/community/x/doC2Dw.
    // need special accout for above url (problem)
 
    public function sendEmail($ofabbr=null, $report_type=null)
    {
        $this->Email->smtpOptions = array(
            'port'=>'25',
            'timeout'=>'30',
            'host' =>'localhost');

            $this->Email->sendAs = 'html';

            $this->Email->delivery = 'smtp';

            $this->Email->to = "recoveryupdates@gsa.gov";
            $this->Email->subject = $ofabbr.', '.$report_type;
            $this->Email->from = $ofabbr. ' <domain-noreply@domain.com>';
            //$msg = 'This is a test to see if e-mail works';
            if ( $this->Email->send($msg) ) {
                $this->Session->setFlash('Template email sent');
            } else {
                $this->Session->setFlash('Template email not sent');
            }        
    }
}
