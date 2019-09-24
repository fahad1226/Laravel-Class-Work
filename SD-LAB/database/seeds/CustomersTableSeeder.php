<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Customer::class,300)->create();
        // DB::table('customers')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'uni_id' => rand(1,10),
        //     'country'=>'Bangladesh',
        //     'university'=>Str::random(20),
        //     'city'=>Str::random(20)
        // ]);
    }
}
