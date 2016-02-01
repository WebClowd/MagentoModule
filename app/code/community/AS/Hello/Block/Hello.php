<?php
class AS_Hello_Block_Hello extends Mage_Core_Block_Template
{
public function _prepareLayout()
    {
       $this->getLayout()->getBlock('breadcrumbs')
            ->addCrumb('home',
                array('label'=>Mage::helper('catalogsearch')->__('Home'), 'link'=>Mage::getBaseUrl())
                
               );
      return parent::_prepareLayout();
    } 
Public function getHelloworld()
    {
        return"Hello World";
    }
	
}

?>