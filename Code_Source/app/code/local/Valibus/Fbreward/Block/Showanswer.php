<?php
class Valibus_Fbreward_Block_Showanswer extends Mage_Core_Block_Template{
    public function getDisplayCode(){
        return mage::helper('valibus_fbreward/data')->getGeneratedCouponLabel();
    }
}