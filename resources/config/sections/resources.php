<?php
return [
    'tabs' => [
        'resource' => [
            'title' => 'conduct_lab.module.resource_hub::tabs.resource',
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
            'title' => 'conduct_lab.module.resource_hub::tabs.related',
            'fields' => [
                'autogenerate_related',
                'related',
                'autogenerate_related_max',
            ],
        ],
        'meta' => [
            'title' => 'conduct_lab.module.resource_hub::tabs.meta',
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
            'title' => 'conduct_lab.module.resource_hub::tabs.seo',
            'fields' => [
                'structured_data',
            ],
        ],
    ]
];
