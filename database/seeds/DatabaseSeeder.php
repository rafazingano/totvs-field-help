<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $forms = [
            ['type' => 'text', 'name' => 'campo_1', 'value' => '', 'label' => 'Campo 01', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_2', 'value' => '', 'label' => 'Campo 02', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_3', 'value' => '', 'label' => 'Campo 03', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_4', 'value' => '', 'label' => 'Campo 04', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_5', 'value' => '', 'label' => 'Campo 05', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_6', 'value' => '', 'label' => 'Campo 06', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_7', 'value' => '', 'label' => 'Campo 07', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_8', 'value' => '', 'label' => 'Campo 08', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_9', 'value' => '', 'label' => 'Campo 09', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_10', 'value' => '', 'label' => 'Campo 010', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_11', 'value' => '', 'label' => 'Campo 011', 'order' => 1],
            ['type' => 'text', 'name' => 'campo_12', 'value' => '', 'label' => 'Campo 012', 'order' => 1]
        ];

        foreach ($forms as $form) {
            DB::table('forms')->insert($form);
        }

        $videos = [
            ['title' => 'Titulo do video 001', 'url' => 'https://www.youtube.com/watch?v=1noovbInkBw', 'form_id' => 1],
            ['title' => 'Titulo do video 002', 'url' => 'https://www.youtube.com/watch?v=oSaOUX2c4To', 'form_id' => 3],
            ['title' => 'Titulo do video 003', 'url' => 'https://www.youtube.com/watch?v=E9_BPVZP7Q4', 'form_id' => 5],
            ['title' => 'Titulo do video 004', 'url' => 'https://www.youtube.com/watch?v=f_3taAO8cTk', 'form_id' => 7],
            ['title' => 'Titulo do video 005', 'url' => 'https://www.youtube.com/watch?v=3AcmV8dh2Lg', 'form_id' => 8],
            ['title' => 'Titulo do video 006', 'url' => 'https://www.youtube.com/watch?v=ADaGn9UWx7U', 'form_id' => 9],
            ['title' => 'Titulo do video 007', 'url' => 'https://www.youtube.com/watch?v=NXlRZVKRGi8', 'form_id' => 10]
        ];

        foreach ($videos as $video) {
            DB::table('videos')->insert($video);
        }
        
    }
}
