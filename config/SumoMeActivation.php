<?php
use Cake\ORM\TableRegistry;

/**
 * Class SumomeActivation
 */
class SumoMeActivation
{
    public function beforeActivation()
    {
        return true;
    }

    /**
     * Creates the necessary settings
     *
     * @param object $controller Controller
     * @return void
     */
    public function onActivation()
    {
        $settings = TableRegistry::get('Croogo/Settings.Settings');
        $settings->write('Service.sumome_key', '', [
            'title' => 'SumoMe Site ID',
            'editable' => true
        ]);

        return true;
    }

    /**
     * onDeactivate will be called if this returns true
     *
     * @param  object $controller Controller
     * @return boolean
     */
    public function beforeDeactivation()
    {
        return true;
    }

    /**
     * onDeactivation
     *
     * @param object $controller Controller
     * @return void
     */
    public function onDeactivation()
    {
        $settings = TableRegistry::get('Croogo/Settings.Settings');
        $settings->deleteKey('Service.sumome_key');
    }
}
