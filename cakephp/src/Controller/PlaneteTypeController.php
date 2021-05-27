<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlaneteType Controller
 *
 * @property \App\Model\Table\PlaneteTypeTable $PlaneteType
 *
 * @method \App\Model\Entity\PlaneteType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaneteTypeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $planeteType = $this->paginate($this->PlaneteType);

        $this->set(compact('planeteType'));
    }

    /**
     * View method
     *
     * @param string|null $id Planete Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planeteType = $this->PlaneteType->get($id, [
            'contain' => []
        ]);

        $this->set('planeteType', $planeteType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planeteType = $this->PlaneteType->newEntity();
        if ($this->request->is('post')) {
            $planeteType = $this->PlaneteType->patchEntity($planeteType, $this->request->getData());
            if ($this->PlaneteType->save($planeteType)) {
                $this->Flash->success(__('The planete type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planete type could not be saved. Please, try again.'));
        }
        $this->set(compact('planeteType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Planete Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planeteType = $this->PlaneteType->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planeteType = $this->PlaneteType->patchEntity($planeteType, $this->request->getData());
            if ($this->PlaneteType->save($planeteType)) {
                $this->Flash->success(__('The planete type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planete type could not be saved. Please, try again.'));
        }
        $this->set(compact('planeteType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Planete Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planeteType = $this->PlaneteType->get($id);
        if ($this->PlaneteType->delete($planeteType)) {
            $this->Flash->success(__('The planete type has been deleted.'));
        } else {
            $this->Flash->error(__('The planete type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
