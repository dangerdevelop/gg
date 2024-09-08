<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserAndSetPermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Super User',
                'email' => 'login@superuser.com',
                'password' => Hash::make('asdHaci!23qwe'),
                'permissions' => [
                    'super',
                ]
            ],
            [
                'name' => 'D user',
                'email' => 'login@duser.com',
                'password' => Hash::make('DuserLogin!23'),
                'permissions' => [
                    'sites',
                    'iplist',
                    'deniz',
                    'forbidden',
                    'options'
                ]
            ],
            [
                'name' => 'G user',
                'email' => 'login@guser.com', // Email adresini düzelttim
                'password' => Hash::make('GUserLogin!23'),
                'permissions' => [
                    'sites',
                    'iplist',
                    'garanti',
                    'forbidden',
                    'options'
                ]
            ],
            [
                'name' => 'Ads User',
                'email' => 'login@adsuser.com',
                'password' => Hash::make('AdsUserLogin!23'), // Şifreyi de düzelttim
                'permissions' => [
                    'sites',
                    'iplist',
                    'forbidden',
                    'options',
                    'deniz',
                    'garanti',
                    'ads'
                ]
            ]
        ];

        foreach ($users as $userData) {
            // permissions anahtarını User::create() işleminden ayrı tutuyoruz
            $permissions = $userData['permissions'];
            unset($userData['permissions']);

            // Kullanıcıyı oluşturma
            $createUser = User::create($userData);

            // Kullanıcıya izinleri atama
            foreach ($permissions as $perm) {
                $createUser->givePermissionTo($perm);
            }
        }
    }
}
