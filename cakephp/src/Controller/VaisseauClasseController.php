<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VaisseauClasse Controller
 *
 * @property \App\Model\Table\VaisseauClasseTable $VaisseauClasse
 *
 * @method \App\Model\Entity\VaisseauClasse[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VaisseauClasseController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $vaisseauClasse = $this->paginate($this->VaisseauClasse);

        $this->set(compact('vaisseauClasse'));
    }

    /**
     * View method
     *
     * @param string|null $id Vaisseau Classe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaisseauClasse = $this->VaisseauClasse->get($id, [
            'contain' => []
        ]);

        $this->set('vaisseauClasse', $vaisseauClasse);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaisseauClasse = $this->VaisseauClasse->newEntity();
        if ($this->request->is('post')) {
            $vaisseauClasse = $this->VaisseauClasse->patchEntity($vaisseauClasse, $this->request->getData());
            if ($this->VaisseauClasse->save($vaisseauClasse)) {
                $this->Flash->success(__('The vaisseau classe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaisseau classe could not be saved. Please, try again.'));
        }
        $this->set(compact('vaisseauClasse'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaisseau Classe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaisseauClasse = $this->VaisseauClasse->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaisseauClasse = $this->VaisseauClasse->patchEntity($vaisseauClasse, $this->request->getData());
            if ($this->VaisseauClasse->save($vaisseauClasse)) {
                $this->Flash->success(__('The vaisseau classe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaisseau classe could not be saved. Please, try again.'));
        }
        $this->set(compact('vaisseauClasse'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaisseau Classe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaisseauClasse = $this->VaisseauClasse->get($id);
        if ($this->VaisseauClasse->delete($vaisseauClasse)) {
            $this->Flash->success(__('The vaisseau classe has been deleted.'));
        } else {
            $this->Flash->error(__('The vaisseau classe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
