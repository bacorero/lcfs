<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Actas Controller
 *
 * @property \App\Model\Table\ActasTable $Actas
 */
class ActasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $actas = $this->paginate($this->Actas);

        $this->set(compact('actas'));
        $this->set('_serialize', ['actas']);
    }

    /**
     * View method
     *
     * @param string|null $id Acta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acta = $this->Actas->get($id, [
            'contain' => ['Jornadas', 'Partidos']
        ]);

        $this->set('acta', $acta);
        $this->set('_serialize', ['acta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acta = $this->Actas->newEntity();
        if ($this->request->is('post')) {
            $acta = $this->Actas->patchEntity($acta, $this->request->getData());
            if ($this->Actas->save($acta)) {
                $this->Flash->success(__('The acta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acta could not be saved. Please, try again.'));
        }
        $this->set(compact('acta'));
        $this->set('_serialize', ['acta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Acta id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acta = $this->Actas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acta = $this->Actas->patchEntity($acta, $this->request->getData());
            if ($this->Actas->save($acta)) {
                $this->Flash->success(__('The acta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acta could not be saved. Please, try again.'));
        }
        $this->set(compact('acta'));
        $this->set('_serialize', ['acta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Acta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acta = $this->Actas->get($id);
        if ($this->Actas->delete($acta)) {
            $this->Flash->success(__('The acta has been deleted.'));
        } else {
            $this->Flash->error(__('The acta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
