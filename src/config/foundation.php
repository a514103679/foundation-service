<?php
return
[
    /*队列配置*/
    'rabbitmq_queue' => env('RABBITMQ_QUEUE', ''),
    'rabbitmq_host' => env('RABBITMQ_HOST', '127.0.0.1'),
    'rabbitmq_port' => env('RABBITMQ_PORT', '5672'),
    'rabbitmq_vhost' => env('RABBITMQ_VHOST', '/'),
    'rabbitmq_login' => env('RABBITMQ_LOGIN', 'guest'),
    'rabbitmq_password' => env('RABBITMQ_PASSWORD','guest'),

    /*模型命名空间配置*/
    'models_namespace' =>'App\Models',

    /*事件监听者设置*/
    'listens' =>
    [
        // Foundation Init
        'goodjun\FoundationService\Events\FoundationInitializationEvent' =>
        [
            'goodjun\FoundationService\Listeners\FoundationInitializationEventListener',
        ],

        // CN Staff
        'goodjun\FoundationService\Events\StaffCNAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\StaffCNAddedEventListener',
        ],
        'goodjun\FoundationService\Events\StaffCNUpdatedEvent' =>
        [
            'goodjun\FoundationService\Listeners\StaffCNUpdatedEventListener',
        ],
        'goodjun\FoundationService\Events\UserAccountCNAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UserAccountCNAddedEventListener',
        ],

        // CN Position
        'goodjun\FoundationService\Events\PositionCNAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\PositionCNAddedEventListener',
        ],
        'goodjun\FoundationService\Events\PositionCNDeletedEvent' =>
        [
            'goodjun\FoundationService\Listeners\PositionCNDeletedEventListener',
        ],
        'goodjun\FoundationService\Events\PositionCNUpdatedEvent' =>
        [
            'goodjun\FoundationService\Listeners\PositionCNUpdatedEventListener',
        ],

        // CN Unit
        'goodjun\FoundationService\Events\UnitCNAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UnitCNAddedEventListener',
        ],
        'goodjun\FoundationService\Events\UnitCNDeletedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UnitCNDeletedEventListener',
        ],
        'goodjun\FoundationService\Events\UnitCNUpdatedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UnitCNUpdatedEventListener',
        ],
        'goodjun\FoundationService\Events\UnitCNMovedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UnitCNMovedEventListener',
        ],

        // US Staff
        'goodjun\FoundationService\Events\StaffUSAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\StaffUSAddedEventListener',
        ],

        'goodjun\FoundationService\Events\StaffUSUpdatedEvent' =>
        [
            'goodjun\FoundationService\Listeners\StaffUSUpdatedEventListener',
        ],

        // US Position
        'goodjun\FoundationService\Events\PositionUSAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\PositionUSAddedEventListener',
        ],
        'goodjun\FoundationService\Events\PositionUSDeletedEvent' =>
        [
            'goodjun\FoundationService\Listeners\PositionUSDeletedEventListener',
        ],
        'goodjun\FoundationService\Events\PositionUSUpdatedEvent' =>
        [
            'goodjun\FoundationService\Listeners\PositionUSUpdatedEventListener',
        ],

        // US Unit
        'goodjun\FoundationService\Events\UnitUSAddedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UnitUSAddedEventListener',
        ],
        'goodjun\FoundationService\Events\UnitUSUpdatedEvent' =>
        [
            'goodjun\FoundationService\Listeners\UnitUSUpdatedEventListener',
        ],
    ]
];