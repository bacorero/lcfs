<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

use html_dom\simple_html_dom_node;


  
/**
 * Inicios Controller
 *
 * @property \App\Model\Table\IniciosTable $Inicios
 */
class IniciosController extends AppController
{
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */


    public function index($menu=null)
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        //Parseamos las páginas web pasadas
        $this->set('contenido', "webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm"); //"webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm"); //$this->parser($menu));
        $inicios = $this->paginate($this->Inicios);

        $this->set(compact('inicios'));
        $this->set('_serialize', ['inicios']);
    }

    /**
     * View method
     *
     * @param string|null $id Inicio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inicio = $this->Inicios->get($id, [
            'contain' => []
        ]);

        $this->set('inicio', $inicio);
        $this->set('_serialize', ['inicio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inicio = $this->Inicios->newEntity();
        if ($this->request->is('post')) {
            $inicio = $this->Inicios->patchEntity($inicio, $this->request->getData());
            if ($this->Inicios->save($inicio)) {
                $this->Flash->success(__('The inicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inicio could not be saved. Please, try again.'));
        }
        $this->set(compact('inicio'));
        $this->set('_serialize', ['inicio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inicio id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inicio = $this->Inicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inicio = $this->Inicios->patchEntity($inicio, $this->request->getData());
            if ($this->Inicios->save($inicio)) {
                $this->Flash->success(__('The inicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inicio could not be saved. Please, try again.'));
        }
        $this->set(compact('inicio'));
        $this->set('_serialize', ['inicio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inicio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inicio = $this->Inicios->get($id);
        if ($this->Inicios->delete($inicio)) {
            $this->Flash->success(__('The inicio has been deleted.'));
        } else {
            $this->Flash->error(__('The inicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    

// PRIMERA DIVISION
    //Clasificación General
    public function clasificacion1()
    {

        require_once(ROOT .DS. "vendor" . DS  . "html_dom" . DS . "simple_html_dom_node.php");
    

          //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm";
        $this->set('contenido', $contenido);
        
    }

        //Función que parsea una página web
    public function parser()
    {

      //require_once(ROOT .DS. "vendor" . DS  . "html_dom" . DS . "simple_html_dom.php");
      //require ("../vendor/simple_html_dom/simple_html_dom.php");
        $html = file_get_html("../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm");
        //$key = $html->find('table',0)->outertext = '';
        //$dir = $dir . 'l';
        $html->save("../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.html");
        return;
        
    }


    //Deportividad
    public function deportividad1()
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_Deportividad.html";
        $this->set('contenido', $contenido);
    }

    public function resumen1()
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Resumenjornada.htm";
        $this->set('contenido', $contenido);
    }

    public function goleadores1()
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_Goleadores.htm";
        $this->set('contenido', $contenido);
    }

    public function deporjugadores1()
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_deportividad_jugadores.htm";
        $this->set('contenido', $contenido);
    }

    public function tarjetasjugadores1()
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_tarjetas_jugadores.htm";
        $this->set('contenido', $contenido);
    }

    //Jornadas
    public function jornadas()
    {
         //Vamos a mostrar los spónsores
        $this->set('sponsor', $this->sponsores());

        $contenido = "../webroot/files/contenido/Primera_Division_FS/Jornadas.htm";
        $this->set('contenido', $contenido);
    }

    public function sponsores()
    {
        $query = TableRegistry::get('Sponsors');
        $sponsor = $query->find();
        return $sponsor;
    }





/*

$cadena = "Primera";
        $sustituto = "UTIMA";

        $file_r = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm";       //Abro el fichero en modo lectura
        $fp_r = fopen($file_r,"r");
        //$contenido_r = file($file_r);     //Si ARRAY
        $contenido_r = fgets($fp_r);        //Si STRING
        fclose($fp_r);

        $posicion = strpos($contenido_r, $cadena);

        $contenido2 = file_get_contents('../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm',NULL,NULL,$posicion,140000);
      
        $contenido_w = str_replace($cadena, $sustituto, $contenido2) ;

        $file_w = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.html";       //Abro el fichero en modo escritura
        $fp_w = fopen($file_w,"w");
        fwrite($fp_w, $contenido_w);
        fclose($fp_w);   */



    /*

    "classmap":[
        "vendor/html_dom/simple_html_dom_node"],


        $file_r = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_Deportividad.htm";       //Abro el fichero en modo lectura
        $fp_r = fopen($file_r,"r");

        //$fichero = fread($fp_r, filesize("../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm"));
        //$fichero = file("../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm");



                        while(!feof($fp_r))
                        {  
                            $buffer = fgets($fp_r,filesize("../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm")); 

                          }

        fclose($fp_r);
       
        $file_w = "../webroot/files/contenido/Primera_Division_FS/Clasificacion_Deportividad.html";       //Abro el fichero en modo escritura
        $fp_w = fopen($file_w,"w");

        $contenidos =  $buffer;//strstr($buffer,"Desdee");
        //$contenidos = strstr($fichero,"body",false);
        fputs($fp_w,$contenidos); 
        fclose($fp_w);
       //$contenido =  htmlentities($fichero, ENT_QUOTES | ENT_IGNORE, "UTF-8");   
       //$contenido = fread($fp, filesize("../webroot/files/contenido/Primera_Division_FS/Clasificacion_General.htm"));
       //$contenidos = strstr($contenido[1],"<body>");
       
       
       //$contenido = htmlspecialchars($fichero, ENT_QUOTES | ENT_IGNORE, "UTF-8");
       //$contenido = nl2br(htmlentities($fichero, ENT_QUOTES | ENT_IGNORE, "UTF-8"));*/
       //$maximo= strlen ($contenido);
}
