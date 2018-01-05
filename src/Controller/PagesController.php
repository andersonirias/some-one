<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function geraDatas()
    {

        $hoje = date('d');
        $diasMes = cal_days_in_month(CAL_GREGORIAN, 8, date('Y'));
        $quizeDias = [];

        for($i=0,$l=1; $i < 15; $i++){

            $diaSemana = time() + ($i * 86400);

            if(($hoje + $i) >= $diasMes){

                $mes = date('m') + 1;
                $dia = $l;

                if(strlen($mes) == 1)
                    $mes = '0' . $mes;

                if($l < 10)
                    $dia = '0' . $dia;

                array_push(
                    $quizeDias,
                    [
                        'dia' => $l,
                        'mes' => (date('m') + 1),
                        'diaSemana' => date('N',$diaSemana),
                        'data' => date('Y') . '-' . $mes . '-' . $dia
                    ]
                );
                $l++;

            }else{

                $mes = date('m');
                $dia = $hoje + $i;

                if(strlen($mes) == 1)
                    $mes = '0' . $mes;

                if($l < 10)
                    $dia = '0' . $dia;

                array_push(
                    $quizeDias, 
                    [
                        'dia' => ($hoje + $i),
                        'mes' => date('m'),
                        'diaSemana' => date('N',$diaSemana),
                        'data' => date('Y') . '-' . $mes . '-' . $dia
                    ]
                );

            }
            
        }

        return $quizeDias;

    }

    public function diaSemana($dia = null){

        $semana = [
                    '1' => 'Seg',
                    '2' => 'Ter',
                    '3' => 'Qua',
                    '4' => 'Qui',
                    '5' => 'Sex',
                    '6' => 'Sab',
                    '7' => 'Dom'
                    ];

        return $semana[$dia];
    }

    public function mesNome($mes = null){

        $meses = [
                    '1' => 'Jan',
                    '2' => 'Fev',
                    '3' => 'Mar',
                    '4' => 'Abr',
                    '5' => 'Mai',
                    '6' => 'Jun',
                    '7' => 'Jul',
                    '8' => 'Ago',
                    '9' => 'Set',
                    '10' => 'Out',
                    '11' => 'Nov',
                    '12' => 'Dez'
                    ];

        return $meses[$mes];

    }

    public function display()
    {

        $this->loadModel('Categorias');
        $this->loadModel('Eventos');
        $this->loadModel('Imagens');
        $this->loadModel('Tipos');

        $categorias = $this->Categorias->find()
                                      ->where(['id <>' => 9])
                                      ->select(['id','nome'])
                                      ->toArray();

        $tipos = $this->Tipos->find()
                            ->select(['id','nome'])
                            ->toArray();

        $eventosDestaque = $this->Eventos->find()
                                         ->select(['id','titulo'])
                                         ->limit(7)
                                         ->orderAsc('id')
                                         ->toArray();

        $imagens = $this->Imagens->find('all')
                                 ->where([
                                        'caminho LIKE' => '%eventos%'
                                        ])
                                 ->toArray();
        
        foreach ($eventosDestaque as $evento) {

            foreach ($imagens as $imagem) {

                if($imagem->evento == $evento->id)
                    $evento['imagem'] = $imagem->caminho;

            }
            
        }

        $calendarioEventos = $this->geraDatas();

        for($i=0;$i < count($calendarioEventos); $i++){

            $calendarioEventos[$i]['diaSemana'] = $this->diaSemana($calendarioEventos[$i]['diaSemana']);
            $calendarioEventos[$i]['mes'] = $this->mesNome($calendarioEventos[$i]['mes']);

        }


       
        $this->set('calendarioEventos', $calendarioEventos);
        $this->set('eventosDestaque', $eventosDestaque);
        $this->set('categorias', $categorias);
        $this->set('tipos', $tipos);

        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }

        
    }

}
