<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace HookCookies\Hook;
use Thelia\Core\Event\Hook\HookRenderEvent;
use Thelia\Core\Hook\BaseHook;


/**
 * Class FrontHookCookies
 * @package HookCookies\Hook
 * @author Damien Foulhoux <dfoulhoux@openstudio.fr>
 */
class FrontHookCookies extends BaseHook {

    public function addCookiesCSS(HookRenderEvent $event)
    {
        $content = $this->addCSS('assets/css/cookie-headband.css');
        $event->add($content);
    }

    public function addCookies(HookRenderEvent $event)
    {
        $content = $this->addJS('assets/js/cookie-headband.min.js');
        $event->add($content);

        $content = $this->render("cookie-headband.html");
        $event->add($content);

        $content = $this->addJS('assets/js/init-cookie-headband.js');
        $event->add($content);
    }

} 