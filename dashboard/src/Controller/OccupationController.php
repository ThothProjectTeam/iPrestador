<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occupation Controller
 *
 * @property \App\Model\Table\OccupationTable $Occupation
 */
class OccupationController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Csrf');
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('occupation', $this->paginate($this->Occupation));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * View method
     *
     * @param string|null $id Occupation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupation = $this->Occupation->get($id, [
            'contain' => []
        ]);
        $this->set('occupation', $occupation);
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occupation = $this->Occupation->newEntity();
        if ($this->request->is('post')) {
            $occupation = $this->Occupation->patchEntity($occupation, $this->request->data);
            if ($this->Occupation->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('occupation'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occupation = $this->Occupation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupation = $this->Occupation->patchEntity($occupation, $this->request->data);
            if ($this->Occupation->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('occupation'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occupation = $this->Occupation->get($id);
        if ($this->Occupation->delete($occupation)) {
            $this->Flash->success(__('The occupation has been deleted.'));
        } else {
            $this->Flash->error(__('The occupation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
