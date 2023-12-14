<?php

namespace Database\Seeders;

use App\Models\Contantmap;
use Illuminate\Database\Seeder;

class ContantmapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contantmap::create([
            'mapUrl' => 'https://yandex.ru/map-widget/v1/?um=constructor%3Aef3ba28553f421149cede3c01d5a9ff1914a05f3d059adb4d20a5bf6650b5a78&amp;source=constructor',
            'adressTitle' => 'Ташкент, Чиланзар Ц 1А/2',
            'adressSubtitle1' => '(метро Чиланзар 400 м)',
            'adressSubtitle2' => '',
        ]);
    }
}
