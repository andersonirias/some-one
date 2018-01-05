<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Newslaters Controller
 *
 * @property \App\Model\Table\NewslatersTable $Newslaters
 */
class NewslatersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $newslaters = $this->paginate($this->Newslaters);

        $this->set(compact('newslaters'));
        $this->set('_serialize', ['newslaters']);
    }

    /**
     * View method
     *
     * @param string|null $id Newslater id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newslater = $this->Newslaters->get($id, [
            'contain' => []
        ]);

        $this->set('newslater', $newslater);
        $this->set('_serialize', ['newslater']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newslater = $this->Newslaters->newEntity();
        if ($this->request->is('post')) {
            $newslater = $this->Newslaters->patchEntity($newslater, $this->request->data);
            if ($this->Newslaters->save($newslater)) {
                $this->Flash->success(__('The newslater has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newslater could not be saved. Please, try again.'));
        }
        $this->set(compact('newslater'));
        $this->set('_serialize', ['newslater']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Newslater id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newslater = $this->Newslaters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newslater = $this->Newslaters->patchEntity($newslater, $this->request->data);
            if ($this->Newslaters->save($newslater)) {
                $this->Flash->success(__('The newslater has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newslater could not be saved. Please, try again.'));
        }
        $this->set(compact('newslater'));
        $this->set('_serialize', ['newslater']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Newslater id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newslater = $this->Newslaters->get($id);
        if ($this->Newslaters->delete($newslater)) {
            $this->Flash->success(__('The newslater has been deleted.'));
        } else {
            $this->Flash->error(__('The newslater could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
