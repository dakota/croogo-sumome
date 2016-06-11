<?php

namespace Sumome\View\Helper;

use Croogo\Core\View\Helper\CroogoAppHelper;

/**
 * Class SumomeHelper
 */
class SumomeHelper extends CroogoAppHelper
{
    public function beforeRender()
    {
        debug('bla');
        exit;
    }
}
