<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vaisseau Controller
 *
 * @property \App\Model\Table\VaisseauTable $Vaisseau
 *
 * @method \App\Model\Entity\Vaisseau[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VaisseauController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['VaisseauClasse', 'Constructeur']
        ];
        $vaisseau = $this->paginate($this->Vaisseau);

        $this->set(compact('vaisseau'));
    }

    /**
     * View method
     *
     * @param string|null $id Vaisseau id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaisseau = $this->Vaisseau->get($id, [
            'contain' => ['VaisseauClasse', 'Constructeur']
        ]);

        $this->set('vaisseau', $vaisseau);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaisseau = $this->Vaisseau->newEntity();
        if ($this->request->is('post')) {
            $vaisseau = $this->Vaisseau->patchEntity($vaisseau, $this->request->getData());
            if ($this->Vaisseau->save($vaisseau)) {
                $this->Flash->success(__('The vaisseau has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaisseau could not be saved. Please, try again.'));
        }
        $vaisseauClasse = $this->Vaisseau->VaisseauClasse->find('list', ['limit' => 200]);
        $constructeur = $this->Vaisseau->Constructeur->find('list', ['limit' => 200]);
        $this->set(compact('vaisseau', 'vaisseauClasse', 'constructeur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaisseau id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaisseau = $this->Vaisseau->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaisseau = $this->Vaisseau->patchEntity($vaisseau, $this->request->getData());
            if ($this->Vaisseau->save($vaisseau)) {
                $this->Flash->success(__('The vaisseau has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaisseau could not be saved. Please, try again.'));
        }
        $vaisseauClasse = $this->Vaisseau->VaisseauClasse->find('list', ['limit' => 200]);
        $constructeur = $this->Vaisseau->Constructeur->find('list', ['limit' => 200]);
        $this->set(compact('vaisseau', 'vaisseauClasse', 'constructeur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaisseau id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaisseau = $this->Vaisseau->get($id);
        if ($this->Vaisseau->delete($vaisseau)) {
            $this->Flash->success(__('The vaisseau has been deleted.'));
        } else {
            $this->Flash->error(__('The vaisseau could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
