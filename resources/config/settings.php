<?php

return [
    'auto_update_modified_date' => [
        'required'    => false,
        'placeholder' => false,
        'type'   => 'anomaly.field_type.boolean',
        'config' => [
            'mode'          => 'switch',
            'default_value' => true
        ]
    ],
    'publication_info_position' => [
        'required'    => true,
        'placeholder' => false,
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'handler'       => '\ConductLab\ResourceHubModule\Category\Support\SharePublicationInfoOptions@settingsOptions',
        ],
    ],
    'share_position' => [
        'required'    => true,
        'placeholder' => false,
        'type'   => 'anomaly.field_type.select',
        'config' => [
            'handler'       => '\ConductLab\ResourceHubModule\Category\Support\SharePositionOptions@settingsOptions',
        ],
    ],
];
