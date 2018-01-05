<?php
namespace App\Controller;

use App\Controller\AppController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Cake\Mailer\Email;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Produtores Controller
 *
 * @property \App\Model\Table\ProdutoresTable $Produtores
 */
class ProdutoresController extends AppController
{

  

    /**
     * View method
     *
     * @param string|null $id Produtore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view()
    {
        $this->viewBuilder()->layout('painel');

        $produtorId = $this->request->session()->read('Auth.User.id');

        $produtore = $this->Produtores->get($produtorId, [
            'contain' => []
        ]);

        $this->set('produtore', $produtore);
        $this->set('_serialize', ['produtore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produtor = $this->Produtores->newEntity();

        if ($this->request->is('post')) {

            $hasher = new DefaultPasswordHasher();

            $produtor['nome'] = $this->request->data['nome'] . ' ' . $this->request->data['sobrenome'];
            $produtor['telefone'] = $this->request->data['telefone'];
            $produtor['email'] = $this->request->data['email'];
            $produtor['senha'] = $hasher->hash($this->request->data['senha']);
            $produtor['status'] = rand(90000,9999999);
            $produtor['criacao'] = date("Y-m-d H:i:s");
            $produtor['alteracao'] = date("Y-m-d H:i:s");

            if ($this->Produtores->save($produtor)) {

              $link = 'http://irias.com.br/some-one/app/produtores/confirmar-cadastro/' . 
                       $produtor['email'] . '/' . 
                       $produtor['status'];

              require_once(ROOT . DS . 'vendor' . DS  . 'autoload.php');

              $mail = new PHPMailer(true); 

              $mail->isSMTP();
              $mail->CharSet = 'UTF-8';
              $mail->Host = 'smtp.gmail.com';
              $mail->Port = 587;
              $mail->SMTPSecure = 'tls';
              $mail->SMTPAuth = true;
              $mail->Username = "someone.eventos@gmail.com";
              $mail->Password = "123.qwe!@#";
              $mail->setFrom('someone.eventos@gmail.com', 'Some One');
              $mail->addAddress($produtor['email']);
              $mail->Subject = 'Confirmação de cadastro';
              $mail->msgHTML('Prezado(a) ' .  $this->request->data['nome'] . '<br/><br/>
                              Bem vindo(a) ao Some One Eventos, <a href="' . $link . '">Clique Aqui</a> para concluir o cadastro como produtor');

              if ($mail->send()) {

                $this->Flash->success(__('Cadastro realizado com sucesso!'));
                return $this->redirect(['controller' => 'Pages', 'action' => 'display']);

              }

            }

            $this->Flash->error(__('Falha ao realizar o cadastro'));
            return $this->redirect(['controller' => 'Pages', 'action' => 'display']);

        }

    }

    /**
     * Edit method
     *
     * @param string|null $id Produtore id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */

    public function confirmarCadastro($email,$status){

      $produtor = $this->Produtores->find()
                       ->where([
                          'email' => $email,
                          'status' => $status
                       ])
                       ->first();

      if($produtor){

        $produtor->status = 'Ativo';
        $produtor->alteracao = date("Y-m-d H:i:s");

        if($this->Produtores->save($produtor)){

         //$this->Flash->sucess(__('Cadastro confirmado com sucesso'));
          return $this->redirect(['controller' => 'Pages', 'action' => 'display']);

        }else{

          //$this->Flash->error(__('Falha ao confirmar o cadastro'));
          return $this->redirect(['controller' => 'Pages', 'action' => 'display']);
        }

      }else{

        //$this->Flash->error(__('Falha ao confirmar o cadastro'));
        return $this->redirect(['controller' => 'Pages', 'action' => 'display']);

      }

    }

    public function esqueciMinhaSenha(){

      if ($this->request->is('post')) {
        
      }
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->layout('painel');

        $produtorId = $this->request->session()->read('Auth.User.id');

        $produtore = $this->Produtores->get($produtorId, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $produtor = $this->Produtores->patchEntity($produtore, $this->request->data);
            $produtor['alteracao'] = date("Y-m-d H:i:s");

            if(strlen($this->request->data['senha']) >= 6){

              $hasher = new DefaultPasswordHasher();

              $produtor['senha'] = $hasher->hash($this->request->data['senha']);

            }else{

              $produtor['senha'] = $produtore['senha'];

            }

            $produtor['email'] = $produtore['email'];

            if ($this->Produtores->save($produtor)) {
                $this->Flash->success(__('Dados alterados com sucesso!'));

                return $this->redirect(['action' => 'view']);
            }
            $this->Flash->error(__('Falha ao alterar dados.'));
        }
        $this->set(compact('produtore'));
        $this->set('_serialize', ['produtore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produtore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function login(){

      $this->autoRender = false;   

      if ($this->request->is('post')) {

          $produtor = $this->Produtores->find()
                       ->where([
                          'email' => $this->request->data['email'],
                          'status' => 'Ativo'
                       ])
                       ->first();

          if($produtor){

            $produtores = $this->Auth->identify();

            if ($produtores) {

              $this->Auth->setUser($produtores);
              return $this->redirect(['controller' => 'Eventos', 'action' => 'index']);

            }

            $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
            return $this->redirect(['controller' => 'Pages', 'action' => 'display']);
      
          }else{

            $this->Flash->error(__('Falha ao realizar o login, confirme o cadastro com o email'));
            return $this->redirect(['controller' => 'Pages', 'action' => 'display']);

          }
         
      }
    }

    public function logout(){

        $this->redirect($this->Auth->logout());

    }

}
