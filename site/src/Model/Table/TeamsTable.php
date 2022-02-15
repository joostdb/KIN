<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class TeamsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('teams');

        $this->addBehavior('Proffer.Proffer', [
            'photo' => [	// The name of your upload field
                'root' => WWW_ROOT . 'assets', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',	// The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [	// Define the prefix of your thumbnail
                        'w' => 200,	// Width
                        'h' => 200,	// Height
                        'jpeg_quality'	=> 100
                    ],
                    'portrait' => [		// Define a second thumbnail
                        'w' => 100,
                        'h' => 300
                    ],
                ],
                'thumbnailMethod' => 'gd'	// Options are Imagick or Gd
            ]
        ]);
    }
}

