<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserHasOccupation Controller
 *
 * @property \App\Model\Table\UserHasOccupationTable $UserHasOccupation
 */
class UserHasOccupationController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['User', 'Occupation']
        ];
        $this->set('userHasOccupation', $this->paginate($this->UserHasOccupation));
        $this->set('_serialize', ['userHasOccupation']);
    }

    /**
     * View method
     *
     * @param string|null $id User Has Occupation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userHasOccupation = $this->UserHasOccupation->get($id, [
            'contain' => ['User', 'Occupation']
        ]);
        $this->set('userHasOccupation', $userHasOccupation);
        $this->set('_serialize', ['userHasOccupation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userHasOccupation = $this->UserHasOccupation->newEntity();
        if ($this->request->is('post')) {
            $userHasOccupation = $this->UserHasOccupation->patchEntity($userHasOccupation, $this->request->data);
            if ($this->UserHasOccupation->save($userHasOccupation)) {
                $this->Flash->success(__('The user has occupation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user has occupation could not be saved. Please, try again.'));
            }
        }
        $user = $this->UserHasOccupation->User->find('list', ['limit' => 200]);
        $occupation = $this->UserHasOccupation->Occupation->find('list', ['limit' => 200]);
        $this->set(compact('userHasOccupation', 'user', 'occupation'));
        $this->set('_serialize', ['userHasOccupation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Has Occupation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userHasOccupation = $this->UserHasOccupation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userHasOccupation = $this->UserHasOccupation->patchEntity($userHasOccupation, $this->request->data);
            if ($this->UserHasOccupation->save($userHasOccupation)) {
                $this->Flash->success(__('The user has occupation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user has occupation could not be saved. Please, try again.'));
            }
        }
        $user = $this->UserHasOccupation->User->find('list', ['limit' => 200]);
        $occupation = $this->UserHasOccupation->Occupation->find('list', ['limit' => 200]);
        $this->set(compact('userHasOccupation', 'user', 'occupation'));
        $this->set('_serialize', ['userHasOccupation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Has Occupation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userHasOccupation = $this->UserHasOccupation->get($id);
        if ($this->UserHasOccupation->delete($userHasOccupation)) {
            $this->Flash->success(__('The user has occupation has been deleted.'));
        } else {
            $this->Flash->error(__('The user has occupation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
