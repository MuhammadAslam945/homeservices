<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
         [
            'name'=>'AC',
            'slug'=>'ac',
            'image'=>'1521969345.png'
         ],
         [
            'name'=>'Beauty',
            'slug'=>'beauty',
            'image'=>'1521969358.png'
         ],
         [
            'name'=>'Plumbing',
            'slug'=>'plumbing',
            'image'=>'1521969409.png'
         ],
         [
            'name'=>'Electricity Technician',
            'slug'=>'electricity-technician',
            'image'=>'1521969419.png'
         ],
         [
            'name'=>'Showering',
            'slug'=>'showering',
            'image'=>'1521969430.png'
         ],
         [
            'name'=>'Cleaning',
            'slug'=>'cleaning',
            'image'=>'1521969446.png'
         ],
         [
            'name'=>'Carpentry',
            'slug'=>'carpentry',
            'image'=>'1521969454.png'
         ],
         [
            'name'=>'Pest Control',
            'slug'=>'pest-control',
            'image'=>'1521969464.png'
         ],
         [
            'name'=>'Electronics',
            'slug'=>'electronics',
            'image'=>'1521969512.png'
         ],
         [
            'name'=>'Cheminey Hob',
            'slug'=>'cheminey-hob',
            'image'=>'1521969490.png'
         ],
         [
            'name'=>'TV',
            'slug'=>'tv',
            'image'=>'1521969522.png'
         ],
         [
            'name'=>'Refrigerator',
            'slug'=>'refrigerator',
            'image'=>'1521969536.png'
         ],
         [
            'name'=>'Audio Buffer',
            'slug'=>'audio-buffer',
            'image'=>'1521969558.png'
         ],
         [
            'name'=>'Mechanic',
            'slug'=>'mechanic',
            'image'=>'1521969576.png'
         ],
         [
            'name'=>'Cargo',
            'slug'=>'cargo',
            'image'=>'1521969599.png'
         ],
         [
            'name'=>'Home alarm',
            'slug'=>'home-alarm',
            'image'=>'1521969622.png'
         ],
         [
            'name'=>'Water Purifier',
            'slug'=>'water-purifier',
            'image'=>'1521972593.png'
         ],
         [
            'name'=>'Towal Cleaning',
            'slug'=>'towal-cleaning',
            'image'=>'1521972624.png'
         ],
         [
            'name'=>'Deep Cleaning',
            'slug'=>'deep-cleaning',
            'image'=>'1521972643.png'
         ],
         [
            'name'=>'Cloth Cleaning',
            'slug'=>'cloth-cleaning',
            'image'=>'1521972663.png'
         ],
         [
            'name'=>'Oven Repairing',
            'slug'=>'oven-repairing',
            'image'=>'1521972769.png'
         ],
        

        ]);
    }
}
