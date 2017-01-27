<?php

namespace App\Models;

/**
 * Class TrustedDevice
 * @package App\Models
 */
class TrustedDevice extends AzureModel
{
    /**
     * Disable Timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'azure_users_security_trusted';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    /**
     * Store a new TrustedDevice
     *
     * @param int $userId
     * @param $ipAddress
     * @return $this
     */
    public function store($userId, $ipAddress)
    {
        $this->attributes['user_id'] = $userId;
        $this->attributes['ip_address'] = $ipAddress;

        return $this;
    }
}
