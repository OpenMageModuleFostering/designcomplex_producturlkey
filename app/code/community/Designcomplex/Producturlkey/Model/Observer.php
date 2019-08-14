<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Designcomplex
 * @package     Designcomplex_Urlkey
 * @copyright   Copyright (c) 2014 Thomas Klosinsky, Designcomplex
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Designcomplex_Producturlkey_Model_Observer{
    public function updateurl($observer){
        //Mage::log('URLKey log', null, 'urlkey.log');
        if($observer->getEvent()->getProduct()){
            $Product=$observer->getEvent()->getProduct();
            $Url='';
            if(!is_null($Product->getData('matchcode'))):
            $Url=$Url.$Product->getData('matchcode');
            endif;
            //Mage::log('URLKey log'.$Url, null, 'urlkey.log');
            $Product->setData('url_key',$Url);      

        }
    }
}