<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'password' => true,
        'role' => true,
        'enable' => true,
        'created_at' => true,
        'modified_at' => true,
        'excluded_at' => true,
        'phone' => true,
        'cell_phone' => true,
    ];
}
