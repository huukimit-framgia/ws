<?php
/**
 * Created by PhpStorm.
 * User: huukimit
 * Date: 19/02/2017
 * Time: 10:13
 */

namespace App\Core\Repositories;

use App\Core\Repositories\Contracts\CustomerRepositoryInterface;
use App\Core\Models\Customer;

class CustomerRepository extends Repository implements CustomerRepositoryInterface
{
    protected $modelName = Customer::class;
}
