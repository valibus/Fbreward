<?php
/**
 * User: pvalibus
 * Date: 31/10/14
 * Time: 17:18
 */
class Valibus_Fbreview_Block_List extends Mage_Review_Block_Product_View_List {
    public function dgetReviewsCollection(){
        //initialisation appel du graph Facebook
        $client = new Zend_Http_Client('https://graph.facebook.com/v2.1/');
        //ajout des paramètres
        $urlPage=$this->getProduct()->getUrl();
        $client->setParameterGet(array(
            'fields'=>'og_object{comments}',
            'id' => $urlPage,
            'access_token' =>''
        ));
        //appel et conversion en objet JSON / ZEND
        //$response=Zend_Json::decode($client->request(),Zend_Json::TYPE_OBJECT);
        //récupération valeur
        //$listComment=var_dump($response);
    }
}