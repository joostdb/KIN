<?php
echo $this->Form->create(null, ['type' => 'file']); // Dont miss this out or no files will upload
echo $this->Form->control('image', ['type' => 'file']);
echo $this->Form->button(__('Submit'));
echo $this->Form->end();
