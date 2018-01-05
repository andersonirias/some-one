<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eventos Controller
 *
 * @property \App\Model\Table\EventosTable $Eventos
 */
class EventosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        
        $produtorId = $this->request->session()->read('Auth.User.id');

        $eventosQuery = $this->Eventos->find('all')
                                 ->where(['produtor' => $produtorId ]);

        $eventos = $this->paginate($eventosQuery);
                                 
        $this->viewBuilder()->layout('painel');

        $this->set('produtorId',$produtorId);
        $this->set(compact('eventos'));
        $this->set('_serialize', ['eventos']);
    }

    /**
     * View method
     *
     * @param string|null $id Evento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produtorId = $this->request->session()->read('Auth.User.id');

        $this->viewBuilder()->layout('painel');

        $evento = $this->Eventos->find()
                               ->where([
                                    'id' => $id,
                                    'produtor' =>  $produtorId
                                    ])
                               ->first();

        $this->loadModel('Categorias');

        $categoria = $this->Categorias->find()
                                      ->select(['nome'])
                                      ->where(['id' => $evento['categoria']])
                                      ->first();

        $this->loadModel('Enderecos');

        $endereco = $this->Enderecos->find()
                                      ->select(['rua'])
                                      ->where([
                                            'id' => $evento['endereco'],
                                            'produtor' => $produtorId
                                            ])
                                      ->first();

        $this->set('endereco', $endereco);
        $this->set('categoria', $categoria);
        $this->set('evento', $evento);
        $this->set('_serialize', ['evento']);
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

        $this->loadModel('Categorias');

        $categorias = $this->Categorias->find()
                                      ->select(['id','nome'])
                                      ->toArray();


        $this->loadModel('Enderecos');

        $enderecos = $this->Enderecos->find()
                                      ->select(['id','rua'])
                                      ->where([
                                            'produtor' => $produtorId
                                            ])
                                      ->toArray();


        $evento = $this->Eventos->newEntity();

        if ($this->request->is('post')) {

            $this->loadModel('Imagens');

            $evento = $this->Eventos->patchEntity($evento, $this->request->data);

            $evento['tempoduracao'] = $this->request->data['tempoduracao'] * 60;
            $evento['alteracao'] = date("Y-m-d H:i:s");
            $evento['criacao'] = date("Y-m-d H:i:s");
            $evento['produtor'] = $produtorId;
            $evento['tipo'] = 1;
            $evento['classificacao'] = $this->request->data['classificacao'];

            $eventoCriado = $this->Eventos->save($evento);

            if ($eventoCriado) {

                $imagem = $this->Imagens->newEntity();

                $imagem['nome'] = $this->request->data['imagem']['name'];
                $imagem['caminho'] = 'eventos/'  . $eventoCriado['id'] . '-' . $this->request->data['imagem']['name'];
                $imagem['evento'] = $eventoCriado['id'];
                $imagem['alteracao'] = date("Y-m-d H:i:s");
                $imagem['criacao'] = date("Y-m-d H:i:s");
                $imagem['tipo'] = 'imagem';

                $this->Imagens->save($imagem);

                move_uploaded_file($this->request->data['imagem']['tmp_name'], ROOT . '/webroot/img/eventos/' . $eventoCriado['id'] . '-' . $this->request->data['imagem']['name']);


                $this->Flash->success(__('Evento criado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao criar evento.'));

        }

        $this->set('enderecos', $enderecos);
        $this->set('categorias', $categorias);
        $this->set(compact('evento'));
        $this->set('_serialize', ['evento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evento id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $this->viewBuilder()->layout('painel');
        
        $produtorId = $this->request->session()->read('Auth.User.id');

        $evento = $this->Eventos->find()
                               ->where([
                                    'id' => $id,
                                    'produtor' =>  $produtorId
                                    ])
                               ->first();

        $this->loadModel('Categorias');

        $categorias = $this->Categorias->find()
                                      ->select(['id','nome'])
                                      ->toArray();


        $this->loadModel('Enderecos');

        $enderecos = $this->Enderecos->find()
                                      ->select(['id','rua'])
                                      ->where([
                                            'produtor' => $produtorId
                                            ])
                                      ->toArray();

        if ($this->request->is(['patch', 'post', 'put'])) {

            $evento = $this->Eventos->patchEntity($evento, $this->request->data);

            $evento['tempoduracao'] = $this->request->data['tempoduracao'] * 60;
            $evento['alteracao'] = date("Y-m-d H:i:s");

            if ($this->Eventos->save($evento)) {
                $this->Flash->success(__('Evento editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao editar evento.'));
        }

        $this->set('enderecos', $enderecos);
        $this->set('categorias', $categorias);
        $this->set(compact('evento'));
        $this->set('_serialize', ['evento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        
        $this->request->allowMethod(['post', 'delete']);

        $this->loadModel('Imagens');

        $produtorId = $this->request->session()->read('Auth.User.id');

        $imagem = $this->Imagens->find()
                               ->where([
                                    'evento' => $id
                                    ])
                               ->first();

        $evento = $this->Eventos->find()
                               ->where([
                                    'id' => $id,
                                    'produtor' =>  $produtorId
                                    ])
                               ->first();

        $this->Imagens->delete($imagem);

        if ($this->Eventos->delete($evento)) {
            $this->Flash->success(__('Evento excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Falha ao excluir evento.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function categorias($id = null)
    {
        $this->loadModel('Enderecos');

        $eventos = $this->Eventos->find('all')
                                 ->where(['categoria' => $id])
                                 ->toArray();

        $enderecos = $this->Enderecos->find('all')
                                     ->toArray();


        foreach ($eventos as $evento) {

            foreach ($enderecos  as $endereco) {

                if($endereco->id == $evento->endereco)
                    $evento['endereco'] = $endereco->rua;

            }
            
        }

        $this->set('eventos', $eventos);

    }

    public function adicionarNome($id = null)
    {
        $this->loadModel('Imagens');
        $this->loadModel('Usuarios');
        $this->loadModel('UsuariosHasEventos');

        $evento = $this->Eventos->find('all')
                                 ->where(['id' => $id])
                                 ->first();

        $imagem = $this->Imagens->find('all')
                                 ->where([
                                        'evento' => $id,
                                        'caminho LIKE' => '%eventos%'
                                        ])
                                 ->first();

        if ($this->request->is('post')) {

            $usuario = $this->Usuarios->find('all')
                                      ->where(['email' => $this->request->data['email']])
                                      ->first();

            if($usuario){

                $eventosUsuarios = $this->UsuariosHasEventos->newEntity();

                $eventosUsuarios['usuario'] = $usuario['id'];
                $eventosUsuarios['evento'] = $this->request->data['evento'];

            }else{

                $usuario = $this->Usuarios->newEntity();

                $usuario['nome'] = $this->request->data['nome'];
                $usuario['email'] = $this->request->data['email'];
                $usuario['criacao'] = date("Y-m-d H:i:s");
                $usuario['alteracao'] = date("Y-m-d H:i:s");

                $novoUsuario = $this->Usuarios->save($usuario);

                $eventosUsuarios = $this->UsuariosHasEventos->newEntity();

                $eventosUsuarios['usuario'] = $novoUsuario['id'];
                $eventosUsuarios['evento'] = $this->request->data['evento'];


            }

            if($this->UsuariosHasEventos->save($eventosUsuarios)){

                $this->Flash->success(__('Nome adicionado a lista com sucesso!'));

            }else{
                $this->Flash->error(__('Falha a adicionar o nome na lista.'));
            }


            return $this->redirect(['action' => 'adicionar_nome',$this->request->data['evento']]);

        }

        $this->set('imagem', $imagem);
        $this->set('evento', $evento);

    }

    public function listaEvento($id= null){

        $this->viewBuilder()->layout('painel');

        $this->loadModel('Usuarios');
        $this->loadModel('UsuariosHasEventos');

        $eventosUsuarios = $this->UsuariosHasEventos->find('all')
                                 ->where(['evento' => $id])
                                 ->toArray();

        $usuarios = [];
        $i = 0;

        foreach ($eventosUsuarios as $item) {

            $usuarios[$i] = $this->Usuarios->get($item['usuario']);
            $i++;

        }

        $this->set(compact('usuarios'));
        $this->set('_serialize', ['usuarios']);

      
    }

    public function data($data = null){

        $eventos = $this->Eventos->find('all')
                                 ->where(['data LIKE' => '%' . $data . '%'])
                                 ->toArray();

        $this->set('eventos',$eventos);


    }

    public function busca(){

        if($this->request->is('post')){

            $condicoes = [];

            if(strlen($this->request->data['titulo']) != 0)
                $condicoes['titulo LIKE'] = '%' . $this->request->data['titulo'] . '%';

            if($this->request->data['categoria'] != 0)
                $condicoes['categoria'] = $this->request->data['categoria'];

            if($this->request->data['tipo'] != 0)
                $condicoes['tipo'] = $this->request->data['tipo'];


            $eventos = $this->Eventos->find('all')
                                     ->where($condicoes)
                                     ->toArray();

            $this->set('eventos',$eventos);

        }

    }

   public function produtor($id = null)
    {
        $this->loadModel('Enderecos');

        $eventos = $this->Eventos->find('all')
                                 ->where(['produtor' => $id])
                                 ->toArray();

        $enderecos = $this->Enderecos->find('all')
                                     ->toArray();


        foreach ($eventos as $evento) {

            foreach ($enderecos  as $endereco) {

                if($endereco->id == $evento->endereco)
                    $evento['endereco'] = $endereco->rua;

            }
            
        }

        $this->set('eventos', $eventos);

    }

}
