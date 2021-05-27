<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Planete Controller
 *
 * @property \App\Model\Table\PlaneteTable $Planete
 *
 * @method \App\Model\Entity\Planete[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaneteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $planete = $this->paginate($this->Planete);

        $this->set(compact('planete'));
    }

    /**
     * View method
     *
     * @param string|null $id Planete id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planete = $this->Planete->get($id, [
            'contain' => []
        ]);

        $this->set('planete', $planete);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planete = $this->Planete->newEntity();
        if ($this->request->is('post')) {
            $planete = $this->Planete->patchEntity($planete, $this->request->getData());
            if ($this->Planete->save($planete)) {
                $this->Flash->success(__('The planete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planete could not be saved. Please, try again.'));
        }
        $this->set(compact('planete'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Planete id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planete = $this->Planete->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planete = $this->Planete->patchEntity($planete, $this->request->getData());
            if ($this->Planete->save($planete)) {
                $this->Flash->success(__('The planete has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planete could not be saved. Please, try again.'));
        }
        $this->set(compact('planete'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Planete id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planete = $this->Planete->get($id);
        if ($this->Planete->delete($planete)) {
            $this->Flash->success(__('The planete has been deleted.'));
        } else {
            $this->Flash->error(__('The planete could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
