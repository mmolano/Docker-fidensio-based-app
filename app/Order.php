<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'orderId';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    protected $fillable = [
        'userId',
        'servId',
        'recipId',
        'fromId',
        'toId',
        'status',
        'lockId',
        'description',
        'pay',
        'deliveryDate'
    ];

    /*
     * Static Function
     */

    public static function getOrder(string $type, $key)
    {
        $recipient = Order::where($type, $key)->first();
        if ($recipient) {
            return $recipient;
        }
        return null;
    }
}
