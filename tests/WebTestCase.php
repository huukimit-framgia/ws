<?php
/**
 * Created by PhpStorm.
 * User: huukimit
 * Date: 07/02/2017
 * Time: 22:07
 */

namespace Tests;

abstract class WebTestCase extends TestCase
{
    /**
     * Get current guard name
     * @return string
     */
    protected function getGuard()
    {
        return 'web';
    }
}
