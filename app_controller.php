<?php
class AppController extends Controller {
    var $components = array('Email');
    var $helpers = array('Html', 'Javascript');

    var $view = 'Theme';

    function beforeFilter()
    {
        $this->theme = 'Modern';
    }
    function beforeRender()
    {
        $this->theme = 'Modern';
        $viewPaths = Configure::read('viewPaths');
        array_unshift($viewPaths, array_pop($viewPaths));
        Configure::write('viewPaths', $viewPaths);
    }

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
