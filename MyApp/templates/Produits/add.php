<h1>Nouveau produit</h1>

<?php
    echo $this->Form->create($produit);
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control("nom");
    echo $this->Form->control('image', ['type' => 'hidden', 'value' => NULL]);
    echo $this->Form->control("prix");
    echo $this->Form->control("description");
    echo $this->Form->button("ajouter");
    // les différents Forms à ajouter
    echo $this->Form->end();
?>