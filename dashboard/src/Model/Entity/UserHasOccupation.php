<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserHasOccupation Entity.
 */
class UserHasOccupation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user' => true,
        'occupation' => true,
    ];
}
