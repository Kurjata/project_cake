<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Faker\Factory;
use Cake\Datasource\ConnectionManager;

/**
 * Post seed.
 */
class PostSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();

        // Obter a conexão padrão
        $conn = ConnectionManager::get('default');
        // Executar uma consulta para obter os IDs de usuário
        $results = $conn->execute('SELECT id FROM users')->fetchAll('assoc');
        $userIds = array_column($results, 'id');

        if (empty($userIds)) {
            // Não há usuários, então não podemos inserir posts
            return;
        }

        $posts = [];
        for ($i = 1; $i <= 20; $i++) {
            $title = $faker->sentence(5);
            $posts[] = [
                'title' => $title,
                'slug' => strtolower(str_replace([' ', '.'], ['-', ''], $title)),
                'user_id' => $faker->randomElement($userIds), // Usar um ID de usuário existente
                'content' => $faker->paragraph(2)
            ];
        }

        $postTable = $this->table('posts');
        $postTable->insert($posts)->save();
    }
}
