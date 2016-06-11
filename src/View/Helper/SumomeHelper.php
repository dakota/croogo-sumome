<?php

namespace SumoMe\View\Helper;

use Cake\Core\Configure;
use Croogo\Core\View\Helper\CroogoAppHelper;

/**
 * Class SumomeHelper
 */
class SumoMeHelper extends CroogoAppHelper
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
