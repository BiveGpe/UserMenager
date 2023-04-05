<?php


use Phinx\Seed\AbstractSeed;

class UserSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'firstname' => 'Wiktor',
                'lastname' => 'Rapacz',
                'username' => 'GigaKoks',
                'email' => 'email@gmail.com',
                'password' => 'zaq1@WSX',
            ],
            [
                'firstname' => 'Jakub',
                'lastname' => 'Kowlaski',
                'username' => 'Kowal69',
                'email' => 'poczta@wp.pl',
                'password' => 'trudneHasło123',
            ],
        ];

        $this->table('user')->insert($data)->save();
    }
}
