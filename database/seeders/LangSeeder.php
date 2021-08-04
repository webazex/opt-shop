<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $langs = [
            [
                'locale' => 'en',
                'code_locale' => 'en',
                'title_locale' => 'Английский'
            ],
            [
                'locale' => 'ru',
                'code_locale' => 'ru',
                'title_locale' => 'Русский'
            ],
            [
                'locale' => 'ua',
                'code_locale' => 'ua',
                'title_locale' => 'Українська'
            ]
        ];
        foreach ($langs as $k => $v){
            DB::table('langs')->insert([
                'locale' => $v['locale'],
                'code_locale' => $v['code_locale'],
                'title_locale' => $v['title_locale'],
                'created_at' => date("Y-m-d h:i:s"),
            ]);
        }
    }
}
