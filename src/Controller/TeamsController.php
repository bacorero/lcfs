<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teams Controller
 *
 * @property \App\Model\Table\TeamsTable $Teams
 */
class TeamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        session_start();
        /*$this->paginate = [
            'contain' => ['Categorias']
        ];*/
        $teams = $this->paginate($this->Teams);

        $this->set(compact('teams'));
        $this->set('_serialize', ['teams']);
    }

    /**
     * View method
     *
     * @param string|null $id Team id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        session_start();
        $team = $this->Teams->get($id, [
            //'contain' => ['Categorias', 'Players']
        ]);

        $this->set('team', $team);
        $this->set('_serialize', ['team']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        session_start();
        $team = $this->Teams->newEntity();
        if ($this->request->is('post')) {
            $team = $this->Teams->patchEntity($team, $this->request->getData());
            //En caso de no haber seleccionado ninguna imagen ponemos la de por defecto
            if($team->photo == NULL)
            {
                $team->photo_dir = '03ffaa83-dfeb-4a02-8ad9-1ce72088be39';
                $team->photo =  'photo_2991.jpg';
            }
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('Equipo correctamente creado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo crear el jugador en el sistema. Inténtelo de nuevo'));
        }
        $categorias = $this->Teams->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('team', 'categorias'));
        $this->set('_serialize', ['team']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Team id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        session_start();
        $team = $this->Teams->get($id, [
            'contain' => []
        ]);

        //En caso de no editar la foto anterior nos la guardamos para volverla a grabar en la BD
        $foto = $team->photo;
        $foto_dir = $team->photo_dir;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $team = $this->Teams->patchEntity($team, $this->request->getData());

            //Vamos a mirar si el usuario ha modificado o no la foto 
            if($team->photo == $foto)
            {  
                $team->photo_dir = $foto_dir;
                $team->photo =  $foto;
            }
            else
            {
                $team->photo_dir = $team->photo_dir;
                $team->photo =  $team->photo;
            }
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('El equipo ha sido modificado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El equipo no ha podido ser modificado. Por favor, inténtelo de nuevo.'));
        }
        $categorias = $this->Teams->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('team', 'categorias'));
        $this->set('_serialize', ['team']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Team id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        session_start();
        $this->request->allowMethod(['post', 'delete']);
        $team = $this->Teams->get($id);
        if ($this->Teams->delete($team)) {
            $this->Flash->success(__('The team has been deleted.'));
        } else {
            $this->Flash->error(__('The team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
