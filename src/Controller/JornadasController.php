<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jornadas Controller
 *
 * @property \App\Model\Table\JornadasTable $Jornadas
 */
class JornadasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Arbitros', 'Actas']
        ];
        $jornadas = $this->paginate($this->Jornadas);

        $this->set(compact('jornadas'));
        $this->set('_serialize', ['jornadas']);
    }

    /**
     * View method
     *
     * @param string|null $id Jornada id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jornada = $this->Jornadas->get($id, [
            'contain' => ['Arbitros', 'Actas', 'Partidos']
        ]);

        $this->set('jornada', $jornada);
        $this->set('_serialize', ['jornada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jornada = $this->Jornadas->newEntity();
        if ($this->request->is('post')) {
            $jornada = $this->Jornadas->patchEntity($jornada, $this->request->getData());
            if ($this->Jornadas->save($jornada)) {
                $this->Flash->success(__('The jornada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jornada could not be saved. Please, try again.'));
        }
        $arbitros = $this->Jornadas->Arbitros->find('list', ['limit' => 200]);
        $actas = $this->Jornadas->Actas->find('list', ['limit' => 200]);
        $this->set(compact('jornada', 'arbitros', 'actas'));
        $this->set('_serialize', ['jornada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Jornada id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jornada = $this->Jornadas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jornada = $this->Jornadas->patchEntity($jornada, $this->request->getData());
            if ($this->Jornadas->save($jornada)) {
                $this->Flash->success(__('The jornada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jornada could not be saved. Please, try again.'));
        }
        $arbitros = $this->Jornadas->Arbitros->find('list', ['limit' => 200]);
        $actas = $this->Jornadas->Actas->find('list', ['limit' => 200]);
        $this->set(compact('jornada', 'arbitros', 'actas'));
        $this->set('_serialize', ['jornada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Jornada id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jornada = $this->Jornadas->get($id);
        if ($this->Jornadas->delete($jornada)) {
            $this->Flash->success(__('The jornada has been deleted.'));
        } else {
            $this->Flash->error(__('The jornada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
