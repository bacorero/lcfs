<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sponsors Controller
 *
 * @property \App\Model\Table\SponsorsTable $Sponsors
 */
class SponsorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        session_start();
        $sponsors = $this->paginate($this->Sponsors);

        $this->set(compact('sponsors'));
        $this->set('_serialize', ['sponsors']);
    }

    /**
     * View method
     *
     * @param string|null $id Sponsor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        session_start();
        $sponsor = $this->Sponsors->get($id, [
            'contain' => []
        ]);

        $this->set('sponsor', $sponsor);
        $this->set('_serialize', ['sponsor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        session_start();
        $sponsor = $this->Sponsors->newEntity();
        if ($this->request->is('post')) {
            $sponsor = $this->Sponsors->patchEntity($sponsor, $this->request->getData());
            if ($this->Sponsors->save($sponsor)) {
                $this->Flash->success(__('The sponsor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sponsor could not be saved. Please, try again.'));
        }
        $this->set(compact('sponsor'));
        $this->set('_serialize', ['sponsor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sponsor id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        session_start();
        $sponsor = $this->Sponsors->get($id, [
            'contain' => []
        ]);

        //En caso de no editar la foto anterior nos la guardamos para volverla a grabar en la BD
        $foto = $sponsor->photo;
        $foto_dir = $sponsor->photo_dir;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $sponsor = $this->Sponsors->patchEntity($sponsor, $this->request->getData());
//Vamos a mirar si el usuario ha modificado o no la foto 
            if($sponsor->photo == $foto)
            {  
                $sponsor->photo_dir = $foto_dir;
                $sponsor->photo =  $foto;
            }
            else
            {
                $sponsor->photo_dir = $sponsor->photo_dir;
                $sponsor->photo =  $sponsor->photo;
            }

            if ($this->Sponsors->save($sponsor)) {
                $this->Flash->success(__('El spónsor ha sido modificado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El spónsor no ha podido ser modificado. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('sponsor'));
        $this->set('_serialize', ['sponsor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sponsor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        session_start();
        $this->request->allowMethod(['post', 'delete']);
        $sponsor = $this->Sponsors->get($id);
        if ($this->Sponsors->delete($sponsor)) {
            $this->Flash->success(__('The sponsor has been deleted.'));
        } else {
            $this->Flash->error(__('The sponsor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
