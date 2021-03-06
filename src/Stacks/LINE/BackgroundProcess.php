<?php

namespace Stacks\LINE;

use LINE as L;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com> https://www.facebook.com/ammarfaizi2
 * @license MIT
 * @package Telegram
 */
class BackgroundProcess
{
    /**
     * @param string $method
     * @param array  $parameters
     * @return bool
     */
    public function __call($method, $parameters)
    {
        shell_exec(
            PHP_BINARY . " " . BASEPATH . "/connector/line/bridge_background.php " . urlencode($method) . " \"" . urlencode(json_encode($parameters)) . "\" >> /dev/null 2>&1 &"
        );
        return true;
    }

    /**
     * @param string $method
     * @param array  $parameters
     * @return bool
     */
    public static function __callStatic($method, $parameters)
    {
        shell_exec(
            PHP_BINARY . " " . BASEPATH . "/connector/line/bridge_background.php " . urlencode($method) . " \"" . urlencode(json_encode($parameters)) . "\" >> /dev/null 2>&1 &"
        );
        return true;
    }
}
