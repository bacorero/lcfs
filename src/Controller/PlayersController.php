<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Players Controller
 *
 * @property \App\Model\Table\PlayersTable $Players
 */
class PlayersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        session_start();
        //$this->paginate = ['contain' => ['Teams']];
        $players = $this->paginate($this->Players);

        $this->set(compact('players'));
        $this->set('_serialize', ['players']);
    }

    /**
     * View method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        session_start();
        $player = $this->Players->get($id); //, ['contain' => ['Teams']]);

        $this->set('player', $player);
        $this->set('_serialize', ['player']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        session_start();
        $player = $this->Players->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->getData());

            //En caso de no haber seleccionado ninguna imagen ponemos la de por defecto
            if($player->photo == NULL)
            {
                $player->photo_dir = '59e562bc-93c2-4fce-b83c-3f020c4aff93';
                $player->photo =  'photo_2993.jpg';
            }

            if ($this->Players->save($player)) {
                $this->Flash->success(__('Jugador correctamente creado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo crear el jugador en el sistema. Inténtelo de nuevo'));
        }
        $teams = $this->Players->Teams->find('list', ['limit' => 200]);
        $this->set(compact('player', 'teams'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        session_start();
        $player = $this->Players->get($id, [
            'contain' => []
        ]);

        //En caso de no editar la foto anterior nos la guardamos para volverla a grabar en la BD
        $foto = $player->photo;
        $foto_dir = $player->photo_dir;

        if ($this->request->is (['patch', 'post', 'put'])) {
            $player = $this->Players->patchEntity($player, $this->request->getData());

            //Vamos a mirar si el usuario ha modificado o no la foto 
            if($player->photo == $foto)
            {  
                $player->photo_dir = $foto_dir;
                $player->photo =  $foto;
            }
            else
            {
                $player->photo_dir = $player->photo_dir;
                $player->photo =  $player->photo;
            }

            if ($this->Players->save($player)) {
                $this->Flash->success(__('El Jugador ha sido modificado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El jugador no ha podido ser modificado. Por favor, inténtelo de nuevo.'));
        }
        $teams = $this->Players->Teams->find('list', ['limit' => 200]);
        $this->set(compact('player', 'teams'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        session_start();
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Players->get($id);
        if ($this->Players->delete($player)) {
            $this->Flash->success(__('The player has been deleted.'));
        } else {
            $this->Flash->error(__('The player could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
