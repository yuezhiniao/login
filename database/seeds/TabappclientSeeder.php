<?php

use Illuminate\Database\Seeder;

class TabappclientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabappclients')->delete();

    for ($i=0; $i < 10; $i++) {
        \App\Tabappclient::create([
            'clientname'   => '测试公司 '.$i,
            'clientname2'    => '测试公司客户 '.$i,
            'clientname3'    => '测试公司代码 '.$i,
            'interid'    => 1
            
        ]);
    }
    }
}
