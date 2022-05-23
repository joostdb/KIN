<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class KingComponent extends Component
{


    public function king($id)
    {
        if($id != 'king'){
            return $this->getController()->redirect('/logout');
        }

    }

    public function owner($item, $user)
    {
        if($item != $user){
            return $this->getController()->redirect('/logout');
        }

    }


}
