<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 */
class EnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('painel');

        $produtorId = $this->request->session()->read('Auth.User.id');

        $enderecosQuery = $this->Enderecos->find('all')
                                 ->where(['produtor' => $produtorId ]);

        $enderecos = $this->paginate($enderecosQuery);

        $this->set(compact('enderecos'));
        $this->set('_serialize', ['enderecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('painel');

        $produtorId = $this->request->session()->read('Auth.User.id');

        $endereco = $this->Enderecos->find()
                               ->where([
                                    'id' => $id,
                                    'produtor' =>  $produtorId
                                    ])
                               ->first();


        $this->set('endereco', $endereco);
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $produtorId = $this->request->session()->read('Auth.User.id');

        $this->viewBuilder()->layout('painel');

        $endereco = $this->Enderecos->newEntity();

        if ($this->request->is('post')) {

            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);

            $endereco['alteracao'] = date("Y-m-d H:i:s");
            $endereco['criacao'] = date("Y-m-d H:i:s");
            $endereco['produtor'] = $produtorId;

            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('Endereço cadastrado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao cadastrar endereço.'));
        }
        $this->set(compact('endereco'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('painel');

        $produtorId = $this->request->session()->read('Auth.User.id');

        $endereco = $this->Enderecos->find()
                               ->where([
                                    'id' => $id,
                                    'produtor' =>  $produtorId
                                    ])
                               ->first();


        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('Endeço editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao editar endereço'));
        }
        $this->set(compact('endereco'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $this->request->allowMethod(['post', 'delete']);

        $produtorId = $this->request->session()->read('Auth.User.id');

        $endereco = $this->Enderecos->find()
                               ->where([
                                    'id' => $id,
                                    'produtor' =>  $produtorId
                                    ])
                               ->first();
        
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('Endereço deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Falha ao deletar endereço.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
