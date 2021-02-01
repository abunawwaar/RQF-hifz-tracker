<?php
  
use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'',
                'is_admin'=>'1',
               'password'=> bcrypt(''),
            ],
            [
               'name'=>'User',
               'email'=>'',
                'is_admin'=>'0',
               'password'=> bcrypt(''),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}