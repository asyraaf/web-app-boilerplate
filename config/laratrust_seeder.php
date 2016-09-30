<?php

return [
    'role_structure' => [
        'administrator' => [
            'users' => 'i,s,e,c,r,u,d',
            'profile' => 'r,u'
        ],
        'trainer' => [
            'users' => 'i,s,e,c,r,u,d',
            'profile' => 'r,u'
        ],
         'facilitator' => [
            'users' => 'i,s,e,c,r,u,d',
            'profile' => 'r,u'
        ],
        'participant' => [
            'profile' => 'r,u'
        ],
    ],
    'permissions_map' => [
        'i' => 'index',
        's' => 'show',
        'e' => 'edit',
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
