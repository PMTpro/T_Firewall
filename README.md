# Firewall for PHP

DQH Firewall Mod

## Yêu cầu

- PHP 7.4+ (Chưa kiểm tra trên các phiên bản PHP khác :))

## Cài đặt
```
composer require ngatngay/firewall-php:dev-main
```

## Sử dụng

```php
new \NgatNgay\Firewall([
    // Danh Sách Tên Miền Cho Phép POST (để domain của bạn)
    'firewall_domains'                 => [
        'buidoi.net',
        'www.buidoi.net',
        'localhost',
        'ngatngay.gq'
    ],

    // Luôn bật tường lửa 2 lớp: 1 - tắt: 0
    'firewall_2nd_layer'               => 1,

    // Thời gian đợi sau mỗi đợt request
    'firewall_wait_time'               => 20,

    // Số Request tối đa trong 1 đợt
    'firewall_penalty_allow'           => 5,

    // Giới hạn khóa IP nếu lượng request vượt qua số này trong 1 phút
    'firewall_request_to_block_in_min' => 200,

    // Thời gian đợi (ms)
    'firewall_wait_allow'              => 3000
]);
```

## Demo

- index.php