<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsuariosHasEventos Controller
 *
 * @property \App\Model\Table\UsuariosHasEventosTable $UsuariosHasEventos
 */
class UsuariosHasEventosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $usuariosHasEventos = $this->paginate($this->UsuariosHasEventos);

        $this->set(compact('usuariosHasEventos'));
        $this->set('_serialize', ['usuariosHasEventos']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuarios Has Evento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariosHasEvento = $this->UsuariosHasEventos->get($id, [
            'contain' => []
        ]);

        $this->set('usuariosHasEvento', $usuariosHasEvento);
        $this->set('_serialize', ['usuariosHasEvento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariosHasEvento = $this->UsuariosHasEventos->newEntity();
        if ($this->request->is('post')) {
            $usuariosHasEvento = $this->UsuariosHasEventos->patchEntity($usuariosHasEvento, $this->request->data);
            if ($this->UsuariosHasEventos->save($usuariosHasEvento)) {
                $this->Flash->success(__('The usuarios has evento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios has evento could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariosHasEvento'));
        $this->set('_serialize', ['usuariosHasEvento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuarios Has Evento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariosHasEvento = $this->UsuariosHasEventos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariosHasEvento = $this->UsuariosHasEventos->patchEntity($usuariosHasEvento, $this->request->data);
            if ($this->UsuariosHasEventos->save($usuariosHasEvento)) {
                $this->Flash->success(__('The usuarios has evento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuarios has evento could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariosHasEvento'));
        $this->set('_serialize', ['usuariosHasEvento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuarios Has Evento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariosHasEvento = $this->UsuariosHasEventos->get($id);
        if ($this->UsuariosHasEventos->delete($usuariosHasEvento)) {
            $this->Flash->success(__('The usuarios has evento has been deleted.'));
        } else {
            $this->Flash->error(__('The usuarios has evento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
