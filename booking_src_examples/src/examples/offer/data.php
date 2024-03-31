<?

const NEW_STICKER = 'https://mir-baget.com/upload/iblock/b9b/nibxd6dvjqm4yv24tzzsvvv6y7w1rhzd.png';
const DEFAULT_IMAGE = 'https://lgshoplocal.com/wp-content/uploads/2020/04/placeholderproduct-500x500-1.png';
$max_p = 2;

$products = [
    [
        'name' => 'Test Product 1',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category A',
        'new' => false,
        'price' => [
            'amount' => 300,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 2',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category B',
        'new' => true,
        'price' => [
            'amount' => 100,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 3',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 200,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 4',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 600,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 5',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 500,
            'currency' => 'USD',
        ]
    ],
    [
        'name' => 'Test Product 6',
        'image' => DEFAULT_IMAGE,
        'category' => 'Category C',
        'new' => false,
        'price' => [
            'amount' => 400,
            'currency' => 'USD',
        ]
    ],
];


if (isset ($_GET['p'])) {
    $page = $_GET['p'];

    if ($page < 1) {
        $page = 1;
    } else if ($page > $max_p) {
        $page = $max_p;
    }

} else {
    $page = 1;
}

$prev_page = $page - 1;
$next_page = $page + 1;


?>