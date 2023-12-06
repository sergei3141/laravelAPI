<?php

namespace Database\Seeders;

use App\Models\Contantmap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContantmapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contantmap::create([
            'mapUrl' => 'https://yandex.ru/map-widget/v1/?um=constructor%3Aaa39d6249a0f5e7c7d19e4493db4f2677343257e68bb51f1a51f6df7a006313e&amp;source=constructor',
            'adressTitle' => 'Ташкент, Юнусабад 13 64/1',
            'adressSubtitle1' => 'Ориентир: Mega Planet',
            'adressSubtitle2' => 'метро Юнусабад (4 мин)',
        ]);
    }
}
