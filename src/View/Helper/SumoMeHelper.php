<?php

namespace SumoMe\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * Class SumomeHelper
 */
class SumoMeHelper extends Helper
{
    public $helpers = ['Html'];

    public function beforeRender()
    {
        if ($this->request->param('prefix') === 'admin') {
            return;
        }

        if (empty(Configure::read('Service.sumome_key'))) {
            return;
        }

        $this->Html->script('https://load.sumome.com/', [
            'block' => true,
            'data-sumo-site-id' => Configure::read('Service.sumome_key'),
            'async' => 'async'
        ]);
    }
}
