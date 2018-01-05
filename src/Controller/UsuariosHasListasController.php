<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuariosHasListas Controller
 *
 * @property \App\Model\Table\UsuariosHasListasTable $UsuariosHasListas
 */
class UsuariosHasListasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $usuariosHasListas = $this->paginate($this->UsuariosHasListas);

        $this->set(compact('usuariosHasListas'));
        $this->set('_serialize', ['usuariosHasListas']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios Has Lista id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosHasLista = $this->UsuariosHasListas->get($id, [
            'contain' => []
        ]);

        $this->set('usuariosHasLista', $usuariosHasLista);
        $this->set('_serialize', ['usuariosHasLista']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariosHasLista = $this->UsuariosHasListas->newEntity();
        if ($this->request->is('post')) {
            $usuariosHasLista = $this->UsuariosHasListas->patchEntity($usuariosHasLista, $this->request->data);
            if ($this->UsuariosHasListas->save($usuariosHasLista)) {
                $this->Flash->success(__('The usuarios has lista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios has lista could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariosHasLista'));
        $this->set('_serialize', ['usuariosHasLista']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios Has Lista id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosHasLista = $this->UsuariosHasListas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosHasLista = $this->UsuariosHasListas->patchEntity($usuariosHasLista, $this->request->data);
            if ($this->UsuariosHasListas->save($usuariosHasLista)) {
                $this->Flash->success(__('The usuarios has lista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios has lista could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariosHasLista'));
        $this->set('_serialize', ['usuariosHasLista']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios Has Lista id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosHasLista = $this->UsuariosHasListas->get($id);
        if ($this->UsuariosHasListas->delete($usuariosHasLista)) {
            $this->Flash->success(__('The usuarios has lista has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios has lista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
