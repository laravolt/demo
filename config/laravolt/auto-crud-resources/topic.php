<?php

return [
    'label' => 'Topic',
    'model' => \App\Models\Topic::class,
    'schema' => [
        [
            'name' => 'name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Name',
            'rules' => ['required','unique:topic'],
        ],
    ],
];
