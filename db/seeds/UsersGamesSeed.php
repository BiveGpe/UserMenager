<?php


use Phinx\Seed\AbstractSeed;

class UsersGamesSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'game_id' => 1,
            ],
            [
                'user_id' => 1,
                'game_id' => 2,
            ],
            [
                'user_id' => 1,
                'game_id' => 3,
            ],
            [
                'user_id' => 1,
                'game_id' => 4,
            ],
            [
                'user_id' => 1,
                'game_id' => 5,
            ],
            [
                'user_id' => 2,
                'game_id' => 1,
            ],
            [
                'user_id' => 2,
                'game_id' => 2,
            ],
            [
                'user_id' => 2,
                'game_id' => 5,
            ],
        ];

        $this->table('users_games')->insert($data)->save();
    }
}
