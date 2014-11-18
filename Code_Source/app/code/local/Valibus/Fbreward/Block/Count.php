<?php
/**
 * User: pvalibus
 * Date: 31/10/14
 * Time: 17:18
 */
class Valibus_Fbreview_Block_Count extends Mage_Review_Block_Helper {
    public function getReviewsCount(){
        //initialisation appel du graph Facebook
        $client = new Zend_Http_Client('https://graph.facebook.com/v2.1/');
        //ajout des paramètres
        $client->setParameterGet(array(
            'fields'  => 'share{comment_count}',
            'id' => $this->getProduct()->getUrl()
        ));
        //appel et conversion en objet JSON / ZEND
        $response=Zend_Json::decode($client->request()->getBody(),Zend_Json::TYPE_OBJECT);
        //récupération valeur
        $nbCommentValue=$response->share->comment_count;
        return $nbCommentValue+1;
    }
}