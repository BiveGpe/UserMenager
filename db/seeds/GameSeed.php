<?php


use Phinx\Seed\AbstractSeed;

class GameSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Minecraft',
                'description' => 'Klocki',
            ],
            [
                'name' => 'Factorio',
                'description' => 'Fabryka',
            ],
            [
                'name' => 'The Sims 4',
                'description' => 'Życie',
            ],
            [
                'name' => 'Batman Arkham Asylum',
                'description' => 'Batman',
            ],
            [
                'name' => 'Lego Star Wars',
                'description' => 'Lego',
            ],
        ];

        $this->table('game')->insert($data)->save();
    }
}
