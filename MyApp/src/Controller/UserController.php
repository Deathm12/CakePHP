<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $users = $this->Users->get($id, [
            'contain' => ['Produits'],
        ]);
        $this->set(compact('users'));
    }

    public function add()
    {
        $users = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            $this->Produits->save($produit);
        }
        // faire des requêtes pour créer un user
        $this->set(compact('users'));
    }

    public function edit($id = null)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
        // faire des requêtes pour modifier un user
        }
        $this->set(compact('users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        // faire des requêtes pour deletes des users
        return $this->redirect(['action' => 'index']);
    }
}
