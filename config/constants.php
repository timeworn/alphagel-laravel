<?php

return [
    'order_status' => [
        'uncomplete' => 0,
        'waiting' => 1,
        'approved' => 2,
        'disapproved' => 3,
        'shipped' => 4,
        'shippedtx' => 5,
        'chargeback' => 6
    ],
    'front_end_admin' => env('FRONT_END_ADMIN'),
    ];
