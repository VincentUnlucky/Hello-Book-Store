<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ctrg = [1,1,1,2,2,2,3,3,3,3];
        for($i=0;$i<10;$i++){
            if($ctrg[$i]==1){
                DB::table('books')->insert([
                    'id'=>$i,
                    'category_id'=>1,
                    'title' => Str::random(20),
                ]);
            }
            else if($ctrg[$i]==2){
                DB::table('books')->insert([
                    'id'=>$i,
                    'category_id'=>2,
                    'title' => Str::random(20),
                ]);
            }
            else if($ctrg[$i]==3){
                DB::table('books')->insert([
                    'id'=>$i,
                    'category_id'=>3,
                    'title' => Str::random(20)
                ]);
            }
        }
    }
}
