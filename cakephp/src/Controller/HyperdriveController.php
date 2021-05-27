<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hyperdrive Controller
 *
 * @property \App\Model\Table\HyperdriveTable $Hyperdrive
 *
 * @method \App\Model\Entity\Hyperdrive[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HyperdriveController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $hyperdrive = $this->paginate($this->Hyperdrive);

        $this->set(compact('hyperdrive'));
    }

    /**
     * View method
     *
     * @param string|null $id Hyperdrive id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hyperdrive = $this->Hyperdrive->get($id, [
            'contain' => []
        ]);

        $this->set('hyperdrive', $hyperdrive);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hyperdrive = $this->Hyperdrive->newEntity();
        if ($this->request->is('post')) {
            $hyperdrive = $this->Hyperdrive->patchEntity($hyperdrive, $this->request->getData());
            if ($this->Hyperdrive->save($hyperdrive)) {
                $this->Flash->success(__('The hyperdrive has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hyperdrive could not be saved. Please, try again.'));
        }
        $this->set(compact('hyperdrive'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hyperdrive id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hyperdrive = $this->Hyperdrive->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hyperdrive = $this->Hyperdrive->patchEntity($hyperdrive, $this->request->getData());
            if ($this->Hyperdrive->save($hyperdrive)) {
                $this->Flash->success(__('The hyperdrive has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hyperdrive could not be saved. Please, try again.'));
        }
        $this->set(compact('hyperdrive'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hyperdrive id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hyperdrive = $this->Hyperdrive->get($id);
        if ($this->Hyperdrive->delete($hyperdrive)) {
            $this->Flash->success(__('The hyperdrive has been deleted.'));
        } else {
            $this->Flash->error(__('The hyperdrive could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
