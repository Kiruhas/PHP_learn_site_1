<?php
$data = [
        'authors' => [
            [
                'fio' => 'Пушкин',
                'born' => 1803,
                'books' => [
                    [
                        'name' => 'Капитанская дочка',
                        'year' => 1830
                    ],
                    [
                        'name' => 'Капитанская почка',
                        'year' => 1835
                    ]
                ]
            ],
            [
                'fio' => 'Гоголь',
                'born' => 1810,
                'books' => [
                    [
                        'name' => 'Вий',
                        'year' => 1828
                    ],
                    [
                        'name' => 'Вий в пупке',
                        'year' => 1845
                    ]
                ]
            ]
        ]
    ];

    echo '=== Книги ===' . '<br>';
    foreach ($data['authors'] as $author){
        foreach ($author['books'] as $book){
            echo $book['name'] . ' - ' . $author['fio'] . ' - ' . $book['year'] . '<br>';
        }
    }
    echo '<br>' . '=== Авторы ===' . '<br>';
    foreach ($data['authors'] as $author){
        echo $author['fio'] . ' - ' . $author['born'] . '<br>';
    } 
?>