<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Knife;

class KnifeSeeder extends Seeder
{
    public function run(): void
    {
        Knife::create([
            'name' => ' Нож выживания',
            'description' => 'Популярный нож с ярким градиентом.',
            'price' => 29999,
            'image' => 'https://community.fastly.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQh5hlcX0nvUOGsx8DdQBJjIAVHubSaIAlp1fb3cjxM5c_4xYHaz6ChY7jTkzgJ6p0gjr6S9In231awrUBqYGj0JYPGJFI3ZQ2F8k_-n7nNhv9VGA/360fx360f',
        ]);

        Knife::create([
            'name' => 'Стилет',
            'description' => 'Эффектный нож-бабочка.',
            'price' => 18999,
            'image' => 'https://community.fastly.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQh5hlcX0nvUOGsx8DdQBJjIAVHubSaIAlp1fb3YilL4NmigI_Fxa71auqHwDhQucYlj-iYpt6h3Ae18kc5Ym2lLdTBdFVraV-EqADqxPCv28GT3M0PuQ/360fx360f',
        ]);
    }
}

