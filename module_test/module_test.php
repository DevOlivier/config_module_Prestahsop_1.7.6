<?php

use PrestaShopBundle\Entity\Tab;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Module_Test extends Module
{
    public function __construct()
    {
        $this->name = 'module_test';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Prestashop';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('module_test');
        $this->description = $this->l('Une petite description de notre module');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->l('No name provided');
        }   
    }

    /**
     * Installation du Module 
     * @return boolean
     */

    public function install()
    {

        $tab = new Tab();
            $tab->class_name = 'DemoController';
            $tab->id_parent = Tab::getIdFromClassName('AdminAdvancedParameters');
            $languages = Language::getLanguages();

            foreach($languages as $lang){
                $tab->name[$lang['id_lang']] = $this->l('Menus');
            }
        
            try{

                $tab->save();

            }catch(Exception $e){

                echo $e->getMessage();
                return false;
            }

            return true;   
    }

}

