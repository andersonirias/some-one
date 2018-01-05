<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Listas Controller
 *
 * @property \App\Model\Table\ListasTable $Listas
 */
class ListasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $this->viewBuilder()->layout('painel');

        $listas = $this->paginate($this->Listas);

        $this->set(compact('listas'));
        $this->set('_serialize', ['listas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lista id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $this->viewBuilder()->layout('painel');
        
        $lista = $this->Listas->get($id, [
            'contain' => []
        ]);

        $this->set('lista', $lista);
        $this->set('_serialize', ['lista']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lista = $this->Listas->newEntity();
        if ($this->request->is('post')) {
            $lista = $this->Listas->patchEntity($lista, $this->request->data);
            if ($this->Listas->save($lista)) {
                $this->Flash->success(__('The lista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lista could not be saved. Please, try again.'));
        }
        $this->set(compact('lista'));
        $this->set('_serialize', ['lista']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lista id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lista = $this->Listas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lista = $this->Listas->patchEntity($lista, $this->request->data);
            if ($this->Listas->save($lista)) {
                $this->Flash->success(__('The lista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lista could not be saved. Please, try again.'));
        }
        $this->set(compact('lista'));
        $this->set('_serialize', ['lista']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lista id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lista = $this->Listas->get($id);
        if ($this->Listas->delete($lista)) {
            $this->Flash->success(__('The lista has been deleted.'));
        } else {
            $this->Flash->error(__('The lista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    
}
