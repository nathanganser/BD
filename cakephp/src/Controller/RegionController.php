<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Region Controller
 *
 * @property \App\Model\Table\RegionTable $Region
 *
 * @method \App\Model\Entity\Region[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $region = $this->paginate($this->Region);

        $this->set(compact('region'));
    }

    /**
     * View method
     *
     * @param string|null $id Region id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $region = $this->Region->get($id, [
            'contain' => []
        ]);

        $this->set('region', $region);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $region = $this->Region->newEntity();
        if ($this->request->is('post')) {
            $region = $this->Region->patchEntity($region, $this->request->getData());
            if ($this->Region->save($region)) {
                $this->Flash->success(__('The region has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The region could not be saved. Please, try again.'));
        }
        $this->set(compact('region'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Region id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $region = $this->Region->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $region = $this->Region->patchEntity($region, $this->request->getData());
            if ($this->Region->save($region)) {
                $this->Flash->success(__('The region has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The region could not be saved. Please, try again.'));
        }
        $this->set(compact('region'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Region id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $region = $this->Region->get($id);
        if ($this->Region->delete($region)) {
            $this->Flash->success(__('The region has been deleted.'));
        } else {
            $this->Flash->error(__('The region could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
