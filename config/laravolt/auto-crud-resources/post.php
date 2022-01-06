<?php

return [
    'label' => 'Berita',
    'model' => \App\Models\Post::class,
    'schema' => [
        [
            'type' => \Laravolt\Fields\Field::DROPDOWN_DB,
            'name' => 'topic_id',
            'label' => 'Topic ',
            'placeholder' => 'Pilih Topic',
            'query' => 'select id, name from topic',
            'rules' => ['required'],
        ],
        [
            'name' => 'title',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Title',
            'rules' => ['required'],
        ],
        [
            'name' => 'content',
            'type' => \Laravolt\Fields\Field::REDACTOR,
            'label' => 'Content',
            'rules' => ['required'],
        ],
        [
            'name' => 'thumbnail',
            'type' => \Laravolt\Fields\Field::UPLOADER,
            'label' => 'Thumbnail',
            'limit' => 1, // jumlah maksimal file yang bisa diupload
            'extensions' => ['jpg', 'png'],
            'fileMaxSize' => 5, // dalam MB
            'show_on_index' => false,
        ],
    ],
];
