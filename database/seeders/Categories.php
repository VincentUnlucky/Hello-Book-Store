<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ctrg = [1,2,3];
        for($i=0;$i<3;$i++){
            if($ctrg[$i]==1){
                DB::table('categories')->insert([
                    'id'=>1,
                    'category'=>'Fiction',
                ]);
            }
            else if($ctrg[$i]==2){
                DB::table('categories')->insert([
                    'id'=>2,
                    'category'=>'Science',
                ]);
            }
            else if($ctrg[$i]==3){
                DB::table('categories')->insert([
                    'id'=>3,
                    'category'=>'Computer',
                ]);
            }
        }
    }
}
