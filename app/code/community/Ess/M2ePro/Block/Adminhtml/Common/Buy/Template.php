<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

class Ess_M2ePro_Block_Adminhtml_Common_Buy_Template extends Ess_M2ePro_Block_Adminhtml_Common_Template
{
    protected $nick = Ess_M2ePro_Helper_Component_Buy::NICK;

    //########################################

    public function __construct()
    {
        parent::__construct();

        // Initialization block
        // ---------------------------------------
        $this->setId('commonBuyTemplate');
        // ---------------------------------------
    }

    //########################################
}