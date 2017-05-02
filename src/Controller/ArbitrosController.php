<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Arbitros Controller
 *
 * @property \App\Model\Table\ArbitrosTable $Arbitros
 */
class ArbitrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        session_start();
        $arbitros = $this->paginate($this->Arbitros);

        $this->set(compact('arbitros'));
        $this->set('_serialize', ['arbitros']);
    }

    /**
     * View method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        session_start();
        $arbitro = $this->Arbitros->get($id, [
            'contain' => ['Jornadas', 'Partidos']
        ]);

        $this->set('arbitro', $arbitro);
        $this->set('_serialize', ['arbitro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        session_start();
        $arbitro = $this->Arbitros->newEntity();
        if ($this->request->is('post')) {
            $arbitro = $this->Arbitros->patchEntity($arbitro, $this->request->getData());

            //En caso de no haber seleccionado ninguna imagen ponemos la de por defecto
            if($arbitro->photo == NULL)
            {
                $arbitro->photo_dir = '8d582cbc-94ef-4dd3-b90a-bc831665aaf8';
                $arbitro->photo =  'photo_2993.jpg';
            }
            if ($this->Arbitros->save($arbitro)) {
                $this->Flash->success(__('Árbitro correctamente creado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo crear el árbitro en el sistema. Inténtelo de nuevo.'));
        }
        $this->set(compact('arbitro'));
        $this->set('_serialize', ['arbitro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        session_start();
        $arbitro = $this->Arbitros->get($id, [
            'contain' => []
        ]);

        //En caso de no editar la foto anterior nos la guardamos para volverla a grabar en la BD
        $foto = $arbitro->photo;
        $foto_dir = $arbitro->photo_dir;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arbitro = $this->Arbitros->patchEntity($arbitro, $this->request->getData());

            //Vamos a mirar si el usuario ha modificado o no la foto 
            if($arbitro->photo == $foto)
            {  
                $arbitro->photo_dir = $foto_dir;
                $arbitro->photo =  $foto;
            }
            else
            {
                $arbitro->photo_dir = $arbitro->photo_dir;
                $arbitro->photo =  $arbitro->photo;
            }
            if ($this->Arbitros->save($arbitro)) {
                $this->Flash->success(__('El árbitro ha sido modificado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El árbitro no ha podido ser modificado. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('arbitro'));
        $this->set('_serialize', ['arbitro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Arbitro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        session_start();
        $this->request->allowMethod(['post', 'delete']);
        $arbitro = $this->Arbitros->get($id);
        if ($this->Arbitros->delete($arbitro)) {
            $this->Flash->success(__('The arbitro has been deleted.'));
        } else {
            $this->Flash->error(__('The arbitro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
