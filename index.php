<?php

header('Access-Control-Allow-Origin: *');

require 'vendor/autoload.php';

session_start();

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

echo 'ok';
