<?php
namespace App\Controller;
class ProduitsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout("/myLayout");
        $this->loadComponent('Paginator');
        $produits = $this->Paginator->paginate($this->Produits->find());
        $this->set(compact('produits'));
    }

    public function add()
    {
        $produit = $this->Produits->newEmptyEntity();
        if ($this->request->is('post')) {
            $produit = $this->Produits->patchEntity($produit, $this->request->getData());
            $this->Produits->save($produit);
        }
        $this->set(compact('produit'));
    }
}