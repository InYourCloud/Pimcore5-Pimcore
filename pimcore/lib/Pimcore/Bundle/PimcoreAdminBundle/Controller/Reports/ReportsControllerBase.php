<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) 2009-2016 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\PimcoreAdminBundle\Controller\Reports;

use Pimcore\Bundle\PimcoreAdminBundle\Controller\AdminController;
use Pimcore\Config;

class ReportsControllerBase extends AdminController
{

    /**
     * @var
     */
    public $conf;

    /**
     * @return \Pimcore\Config\Config
     */
    public function getConfig()
    {
        return Config::getReportConfig();
    }
}
