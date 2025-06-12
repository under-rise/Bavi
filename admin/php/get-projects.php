<?php

date_default_timezone_set('Asia/Tokyo');

$year = $_GET['year'] ?? date('Y');
$month = $_GET['month'] ?? date('m');

$projectData = [
    ['id' => 1, 'project_id' => 100001, 'facility_id' => 1, 'time' => '2025-04-01 09:30:00', 'name' => '鈴木', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => true],
    ['id' => 2, 'project_id' => 100002, 'facility_id' => 2, 'time' => '2025-04-02 10:00:00', 'name' => '佐藤', 'facility_name' => '妙典河川敷・自由広場', 'payment' => false],
    ['id' => 3, 'project_id' => 100003, 'facility_id' => 3, 'time' => '2025-04-03 10:30:00', 'name' => '田中', 'facility_name' => '秋川渓谷 錦江閣リバーサイドBBQ＆Bavi', 'payment' => true],
    ['id' => 4, 'project_id' => 100004, 'facility_id' => 4, 'time' => '2025-04-03 11:00:00', 'name' => '山田', 'facility_name' => 'キラナガーデン豊洲', 'payment' => true],
    ['id' => 5, 'project_id' => 100005, 'facility_id' => 1, 'time' => '2025-04-03 13:00:00', 'name' => '中村', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => false],

    ['id' => 6, 'project_id' => 100006, 'facility_id' => 1, 'time' => '2025-04-14 09:30:00', 'name' => '鈴木', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => true],
    ['id' => 7, 'project_id' => 100007, 'facility_id' => 2, 'time' => '2025-04-15 10:30:00', 'name' => '佐藤', 'facility_name' => '妙典河川敷・自由広場', 'payment' => false],
    ['id' => 8, 'project_id' => 100008, 'facility_id' => 3, 'time' => '2025-04-15 11:15:00', 'name' => '田中', 'facility_name' => '秋川渓谷 錦江閣リバーサイドBBQ＆Bavi', 'payment' => true],
    ['id' => 9, 'project_id' => 100009, 'facility_id' => 4, 'time' => '2025-04-15 13:00:00', 'name' => '山田', 'facility_name' => 'キラナガーデン豊洲', 'payment' => false],
    ['id' => 10, 'project_id' => 100010, 'facility_id' => 1, 'time' => '2025-04-15 14:00:00', 'name' => '中村', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => true],

    ['id' => 11, 'project_id' => 100011, 'facility_id' => 1, 'time' => '2025-05-07 09:00:00', 'name' => '鈴木', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => true],
    ['id' => 12, 'project_id' => 100012, 'facility_id' => 2, 'time' => '2025-05-08 10:30:00', 'name' => '佐藤', 'facility_name' => '妙典河川敷・自由広場', 'payment' => true],
    ['id' => 13, 'project_id' => 100013, 'facility_id' => 3, 'time' => '2025-05-08 11:45:00', 'name' => '田中', 'facility_name' => '秋川渓谷 錦江閣リバーサイドBBQ＆Bavi', 'payment' => false],
    ['id' => 14, 'project_id' => 100014, 'facility_id' => 4, 'time' => '2025-05-08 13:00:00', 'name' => '山田', 'facility_name' => 'キラナガーデン豊洲', 'payment' => true],
    ['id' => 15, 'project_id' => 100015, 'facility_id' => 1, 'time' => '2025-05-08 14:30:00', 'name' => '中村', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => false],

    ['id' => 16, 'project_id' => 100016, 'facility_id' => 1, 'time' => '2025-05-18 09:15:00', 'name' => '鈴木', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => true],
    ['id' => 17, 'project_id' => 100017, 'facility_id' => 2, 'time' => '2025-05-19 10:45:00', 'name' => '佐藤', 'facility_name' => '妙典河川敷・自由広場', 'payment' => false],
    ['id' => 18, 'project_id' => 100018, 'facility_id' => 3, 'time' => '2025-05-20 11:30:00', 'name' => '田中', 'facility_name' => '秋川渓谷 錦江閣リバーサイドBBQ＆Bavi', 'payment' => true],
    ['id' => 19, 'project_id' => 100019, 'facility_id' => 4, 'time' => '2025-05-20 13:00:00', 'name' => '山田', 'facility_name' => 'キラナガーデン豊洲', 'payment' => true],
    ['id' => 20, 'project_id' => 100020, 'facility_id' => 1, 'time' => '2025-05-20 14:15:00', 'name' => '中村', 'facility_name' => '秋川橋河川公園バーベキューランド', 'payment' => false]
];

$result = array_filter($projectData, function($p) use ($year, $month) {
    $date = new DateTime($p['time']);
    return $date->format('Y') == $year && $date->format('n') == (int)$month;
});

header('Content-Type: application/json');
echo json_encode(array_values($result));