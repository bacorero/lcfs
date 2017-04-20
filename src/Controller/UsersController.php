<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */ 
    public function index()
    {
        session_start();
        $encontrado = false;
        $_SESSION['rol'] = "";
        $_SESSION['user'] = "false";

        if ($this->request->is(['patch', 'post', 'put']))
            {
                //Recogemos los valores del formulario
                $_SESSION['usuario'] = $_REQUEST['usuario'];
                $_SESSION['password'] = $_REQUEST['passwor'];
                return $this->redirect(['action' => 'index']);
            }

        if(isset($_SESSION['usuario']) and isset($_SESSION['password']))
        {
            //$encontrado = true;
            $usuarios = $this->Users->find('all'); 
            foreach ($usuarios as $user) 
            {
                if($user->usuario == $_SESSION['usuario'])            //En caso de coincidir usuario
                {
                    if($user->passwor == $_SESSION['password'])       //En caso de coincidir la contraseña
                    {
                        $_SESSION['rol'] = $user->role; 
                        $encontrado = true; 
                        $_SESSION['user'] = "true"; 
                    }
                }
            }
            if ($_SESSION['user'] == "true")
            {
                $users = $this->paginate($this->Users);     //Lista todos los usuarios   
                $this->set(compact('users'));
                $this->set('_serialize', ['users']);
            }
            else
            {
                $this->Flash->error(__('Nombre de usuario o contraseña incorrectos'));
            }
        }
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        session_start();
        if($_SESSION['user'] == "true")
        {
            $user = $this->Users->get($id, [
            'contain' => []
        ]);

            $this->set('user', $user);
            $this->set('_serialize', ['user']);
        }
        else
        {
            return $this->redirect(['action' => 'index']);
        }
        
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        session_start();
        if($_SESSION['user'] == "true")
        {
            $user = $this->Users->newEntity();
            if ($this->request->is('post')) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
        }
        else
        {
            return $this->redirect(['action' => 'index']);
        }
        
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        session_start();
        if($_SESSION['user'] == "true")
        {
            $user = $this->Users->get($id, [
            'contain' => []
        ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
        }
        else
        {
            return $this->redirect(['action' => 'index']);
        }
        
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        session_start();
        if($_SESSION['user'] == "true")
        {
            $this->request->allowMethod(['post', 'delete']);
            $user = $this->Users->get($id);
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            } else {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['action' => 'index']);
        }
        
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['usuario']); 
        unset($_SESSION['password']);
        unset($_SESSION['rol']);
        unset($_SESSION['user']);
        session_destroy();
        return $this->redirect(['action' => 'index']);
    }
}
