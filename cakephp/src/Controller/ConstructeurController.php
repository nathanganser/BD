<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Constructeur Controller
 *
 * @property \App\Model\Table\ConstructeurTable $Constructeur
 *
 * @method \App\Model\Entity\Constructeur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConstructeurController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $constructeur = $this->paginate($this->Constructeur);

        $this->set(compact('constructeur'));
    }

    /**
     * View method
     *
     * @param string|null $id Constructeur id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $constructeur = $this->Constructeur->get($id, [
            'contain' => ['Vaisseau']
        ]);

        $this->set('constructeur', $constructeur);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $constructeur = $this->Constructeur->newEntity();
        if ($this->request->is('post')) {
            $constructeur = $this->Constructeur->patchEntity($constructeur, $this->request->getData());
            if ($this->Constructeur->save($constructeur)) {
                $this->Flash->success(__('The constructeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The constructeur could not be saved. Please, try again.'));
        }
        $this->set(compact('constructeur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Constructeur id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $constructeur = $this->Constructeur->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $constructeur = $this->Constructeur->patchEntity($constructeur, $this->request->getData());
            if ($this->Constructeur->save($constructeur)) {
                $this->Flash->success(__('The constructeur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The constructeur could not be saved. Please, try again.'));
        }
        $this->set(compact('constructeur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Constructeur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $constructeur = $this->Constructeur->get($id);
        if ($this->Constructeur->delete($constructeur)) {
            $this->Flash->success(__('The constructeur has been deleted.'));
        } else {
            $this->Flash->error(__('The constructeur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
