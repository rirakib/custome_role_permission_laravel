<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            ['name'=>'user','email'=>'user@gmail.come','password'=>bcrypt('user')],
            ['name'=>'editor','email'=>'editor@gmail.come','password'=>bcrypt('editor')],
            ['name'=>'author','email'=>'author@gmail.come','password'=>bcrypt('author')],
        ]);

        Role::insert([
            ['name'=>'editor','slug'=>'editor'],
            ['name'=>'author','slug'=>'author']
        ]);

        Permission::insert([
            ['name'=>'Add Post','slug'=>'add-post'],
            ['name'=>'Delete Post','slug'=>'delete-post']
        ]);
    }
}
