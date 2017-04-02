<?php
/**
 * Created by PhpStorm.
 * User: huukimit
 * Date: 18/02/2017
 * Time: 15:18
 */

namespace Tests\Integration\Controllers\Web;

use Tests\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    /**
     * Test can get home page
     */
    public function test_can_get_home_page()
    {
        $this->get(route('web.home.index'));
        $this->assertResponseOk();
    }
}
