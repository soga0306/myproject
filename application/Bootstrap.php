<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initSystem() {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace('Tools_');
        $autoloader->registerNamespace('Widgets_');
        $autoloader->registerNamespace('Aliyun_');
        $autoloader->registerNamespace('Haiyun_');
		$autoloader->registerNamespace('Cloudwebsite_');
		$autoloader->registerNamespace('Wymailbox_');
		$autoloader->registerNamespace('Vipmail_');
		$autoloader->registerNamespace('Server_');
        $autoloader->registerNamespace('Qcloud_');
		$autoloader->registerNamespace('Xmispyun_');
		$autoloader->registerNamespace('MongoDB_');
		$autoloader->registerNamespace('Domain_');
		$autoloader->registerNamespace('Invoice_');
		$autoloader->registerNamespace('Vhost_');
		$autoloader->registerNamespace('Database_');
		$autoloader->registerNamespace('Array_');
        $autoloader->registerNamespace('Coupons_');
		$autoloader->registerNamespace('Others_');
        $autoloader->registerNamespace('Website_');
		$autoloader->registerNamespace('Aliyunrds_');
		$autoloader->registerNamespace('Newhost_');
		$autoloader->registerNamespace('Newdb_');
		$autoloader->registerNamespace('Price_');
		$autoloader->registerNamespace('Services_');
		$autoloader->registerNamespace('Gift');
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Application_Plugin_Session());
        $front->registerPlugin(new Application_Plugin_Haiyunserver());
        Zend_Session::start();
        //Zend_Layout::startMvc(array('layoutPath' => APPLICATION_PATH .'/layout'));
    }
	/**
     * Add databases to the registry
     * 
     * @return void
     */
    public function _initDbRegistry()
    {
        $this->bootstrap('multidb');
        $multidb = $this->getPluginResource('multidb');
        Zend_Registry::set('sales', $multidb->getDb('sales'));
		Zend_Registry::set('xmisp', $multidb->getDb('xmisp'));
		Zend_Registry::set('cloudwebsite', $multidb->getDb('cloudwebsite'));
		Zend_Registry::set('newxmisp', $multidb->getDb('newxmisp'));
		Zend_Registry::set('aliyun', $multidb->getDb('aliyun'));
		Zend_Registry::set('server', $multidb->getDb('server'));
		//Zend_Registry::set('newicp', $multidb->getDb('newicp'));
		Zend_Registry::set('gift', $multidb->getDb('gift'));
		//Zend_Registry::set('haiyun', $multidb->getDb('haiyun'));
    }
}
?>
