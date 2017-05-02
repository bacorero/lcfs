<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Competitios Controller
 *
 * @property \App\Model\Table\CompetitiosTable $Competitios
 */
class CompetitiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias']
        ];
        $competitios = $this->paginate($this->Competitios);

        $this->set(compact('competitios'));
        $this->set('_serialize', ['competitios']);
    }

    /**
     * View method
     *
     * @param string|null $id Competitio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competitio = $this->Competitios->get($id, [
            'contain' => ['Categorias']
        ]);

        $this->set('competitio', $competitio);
        $this->set('_serialize', ['competitio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competitio = $this->Competitios->newEntity();
        if ($this->request->is('post')) {
            $competitio = $this->Competitios->patchEntity($competitio, $this->request->getData());
            if ($this->Competitios->save($competitio)) {
                $this->Flash->success(__('The competitio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competitio could not be saved. Please, try again.'));
        }
        $categorias = $this->Competitios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('competitio', 'categorias'));
        $this->set('_serialize', ['competitio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Competitio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competitio = $this->Competitios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competitio = $this->Competitios->patchEntity($competitio, $this->request->getData());
            if ($this->Competitios->save($competitio)) {
                $this->Flash->success(__('The competitio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competitio could not be saved. Please, try again.'));
        }
        $categorias = $this->Competitios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('competitio', 'categorias'));
        $this->set('_serialize', ['competitio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Competitio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competitio = $this->Competitios->get($id);
        if ($this->Competitios->delete($competitio)) {
            $this->Flash->success(__('The competitio has been deleted.'));
        } else {
            $this->Flash->error(__('The competitio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
