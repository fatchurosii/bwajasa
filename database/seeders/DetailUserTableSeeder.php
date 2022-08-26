<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DetailUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_user = [
            [
                'users_id'          =>   1,
                'photo'             =>  '',
                'role'              =>  'Website Developer',
                'contact_number'    =>  '0812412215213',
                'biography'         =>  'Aku adalah pengoding Handal',
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'users_id'          =>   2,
                'photo'             =>  '',
                'role'              =>  'UI Desainer',
                'contact_number'    =>  '081241241221',
                'biography'         =>  'Aku adalaah UI Desainer Handal',
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],

        ];

        DetailUser::insert($detail_user);
    }
}
