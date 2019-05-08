<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Treatment;
use Faker\Generator as Faker;

$factory->define(Treatment::class, function (Faker $faker) {
    $date = $faker->dateTimeThisDecade;
    return [
        'name' => $faker->randomElement([
            'ตรวจเลือด',
            'วัดความดัน',
            'ตรวจปัสสาวะ',
            'อัลตร้าซาวด์',
            'เอ็กซ์เรย์',
            'เอ็มอาร์ไอ',
            'ฝ่าไส้ติ่ง',
            'ฉีดวัคซีน',
            'รับยาปฏิชีวนะ',
            'รับยาสลายมโน',
            'ทำกายภาพ',
            'อาบน้ำ',
            'ตัดขน',
            'อีเคจี',
        ]),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
