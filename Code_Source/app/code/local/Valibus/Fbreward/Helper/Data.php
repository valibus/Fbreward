<?php
/*
 * @author Pvalibus
 * @description Fbreward class */

class Valibus_Fbreward_Helper_Data extends Mage_Core_Helper_Abstract{
    const FBREWARD_SHAREPAGE_RULE_ID = 12;
    public function getGeneratedCouponLabel(){
        return $this->getGeneratedCoupon()->code;

    }
    private function getGeneratedCoupon(){
        /** @var $couponCollection Mage_SalesRule_Model_Resource_Coupon_Collection */
        $couponCollection=mage::getModel('salesrule/coupon')
            ->getCollection()
            ->addFieldToFilter('rule_id',$this::FBREWARD_SHAREPAGE_RULE_ID)
            ->getLastItem();
        return $couponCollection;
    }
}