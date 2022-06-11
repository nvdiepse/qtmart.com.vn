<?php

namespace Database\Seeders;

use Botble\Ads\Models\Ads;
use Botble\Base\Supports\BaseSeeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdsSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->uploadFiles('promotion');

        Ads::truncate();

        $items = [
            [
                'name'     => 'Top Slider Image 1',
                'location' => 'not_set',
                'key'      => 'VC2C8Q1UGCBG',
                'image'    => 'promotion/1.jpg',
            ],
            [
                'name'     => 'Homepage middle 1',
                'location' => 'not_set',
                'key'      => 'IZ6WU8KUALYD',
                'image'    => 'promotion/2.png',
            ],
            [
                'name'     => 'Homepage middle 2',
                'location' => 'not_set',
                'key'      => 'ILSFJVYFGCPZ',
                'image'    => 'promotion/3.png',

            ],
            [
                'name'     => 'Homepage middle 3',
                'location' => 'not_set',
                'key'      => 'ZDOZUZZIU7FT',
                'image'    => 'promotion/4.png',
            ],
            [
                'name'     => 'Products list 1',
                'location' => 'not_set',
                'key'      => 'ZDOZUZZIU7FZ',
                'image'    => 'promotion/5.png',
                'url'      => '/products/beat-headphone',
            ],
        ];

        foreach ($items as $index => $item) {
            $item['order'] = $index + 1;
            if (!isset($item['key'])) {
                $item['key'] = strtoupper(Str::random(12));
            }
            $item['expired_at'] = now()->addYears(5)->toDateString();
            $item['url'] = Arr::get($item, 'url', '/products');

            Ads::create($item);
        }

        DB::table('ads_translations')->truncate();

        $translations = [
            [
                'name' => 'Top Slider Image 1',
            ],
            [
                'name' => 'Homepage middle 1',
            ],
            [
                'name' => 'Homepage middle 2',
            ],
            [
                'name' => 'Homepage middle 3',
            ],
        ];

        foreach ($translations as $index => $item) {
            $item['lang_code'] = 'vi';
            $item['ads_id'] = $index + 1;
            $item['url'] = '/vi/products';

            DB::table('ads_translations')->insert($item);
        }
    }
}
