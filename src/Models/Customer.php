<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 19.4.18.
 * Time: 01.30
 */

namespace KgBot\Magento\Models;


use KgBot\Magento\Utils\Model;

class Customer extends Model
{
    protected $entity     = 'customers';
    protected $primaryKey = 'id';
}
