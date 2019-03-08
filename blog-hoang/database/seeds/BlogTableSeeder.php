<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'ten' => 'Tin Tức Xã Hội',
            'noidung' => 'Hàng ngày',
            'ngaydang'=> '2019-2-22',
        ]);
    }
}
