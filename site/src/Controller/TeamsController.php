<?php
namespace App\Controller;

class TeamsController extends AppController
{
    public function add()
    {
        $this->fetchTable('Teams');
    }
}
