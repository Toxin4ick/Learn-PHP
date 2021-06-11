<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<?php


$opts = array(
  'http' => array(
    'method' => "GET",
    'header' => "X-Yandex-API-Key: 7b4fdad0-49f6-4504-8ad2-31112c5979ac"
  )
);

$url = "https://api.weather.yandex.ru/v2/forecast?lat=43.1056&lon=131.874&extra=true";
$context = stream_context_create($opts);
$contents = file_get_contents($url, false, $context);
$clima = json_decode($contents);
$name = $clima->info->tzinfo->name;
$time_unix = $clima->fact->obs_time;
$temp = $clima->fact->temp;
$humidity = $clima->fact->humidity;
$speed = $clima->fact->wind_speed;
$pressure = $clima->fact->pressure_mm;
$icon = $clima->fact->icon . ".svg";


echo  "Город: $name<br>";
echo "Температура: " . $temp . " &deg;C<br>";
echo "Влажность: " . $humidity . " %<br>";
echo "Ветер: " . $speed . " м/с<br>";
echo "Давление: " . $pressure . " мм р/с<br>";
echo "<img src='https://yastatic.net/weather/i/icons/blueye/color/svg/" . $icon . "'/ width='50'>";
?>
</body>
</html>
