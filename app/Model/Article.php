<?php
    class Article extends AppModel{

       // public $belongsTo = 'Category';

    	public $validate = array(
        'apmac' => array(
            
            'rule' => '/^([a-f0-9]{2}:){5}[a-f0-9]{2}$/ims'
            ),
    
        'apname' => array(
            'rule' => 'notBlank'
        ),

        'ssid' => array(
            'rule' => 'notBlank'
        ),
 'sessions_count' => array(
            'rule' => 'numeric',
        'message' => 'Please supply the number.'

            ),
 'authtime' => array(
            'rule' => 'numeric',
        'message' => 'Please supply the number.'

            ),
 'banners_delay' => array(
            'rule' => 'numeric',
        'message' => 'Please supply the number.'

            )
 

    );

    }
?>
