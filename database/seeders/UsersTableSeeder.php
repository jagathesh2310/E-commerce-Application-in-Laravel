<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::Make('password'),
        ]);
        $user->assignRole('super-admin');
    }
}
