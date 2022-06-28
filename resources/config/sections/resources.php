<?php
return [
    'tabs' => [
        'resource' => [
            'title' => 'behavior_lab.module.resource_hub::tabs.resource',
            'fields' => [
                'title',
                'banner_type',
                'image',
                'media',
                'headline',
                'lead_paragraph',
                'blocks',
            ],
        ],
        'related' => [
            'title' => 'behavior_lab.module.resource_hub::tabs.related',
            'fields' => [
                'autogenerate_related',
                'related',
                'autogenerate_related_max',
            ],
        ],
        'meta' => [
            'title' => 'behavior_lab.module.resource_hub::tabs.meta',
            'fields' => [
                'slug',
                'author',
                'published',
                'hidden',
                'protected',
                'date_published',
                'date_modified',
            ],
        ],
        'seo' => [
            'title' => 'behavior_lab.module.resource_hub::tabs.seo',
            'fields' => [
                'structured_data',
            ],
        ],
    ]
];
