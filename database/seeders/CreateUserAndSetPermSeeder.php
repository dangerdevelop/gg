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
                'name' => 'Ads User',
                'email' => 'login@reklamuser.com',
                'password' => Hash::make('ReklamUser!23'), // Şifreyi de düzelttim
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
