<?php
/**
 * Created by PhpStorm.
 * User: huukimit
 * Date: 19/02/2017
 * Time: 15:31
 */

namespace Tests\Integration\Controllers\Admin;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\AdminTestCase;

class AdminControllerTest extends AdminTestCase
{
    use DatabaseTransactions;

    public function test_can_get_admin_list()
    {
        $this->setAuthUser($this->getGuard());
        $this->get(route('api.admin.admin.list'));
        $this->assertResponseOk()->isJson();
        $this->seeJsonStructure([
            'message',
            'admins' => [
                '*' => ['first_name', 'last_name', 'email', 'avatar'],
            ],
        ]);
    }
}
