<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userinfos Controller
 *
 * @property \App\Model\Table\UserinfosTable $Userinfos
 *
 * @method \App\Model\Entity\Userinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserinfosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $userinfos = $this->paginate($this->Userinfos);

        $this->set(compact('userinfos'));
    }

    /**
     * View method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userinfo = $this->Userinfos->get($id, [
            'contain' => []
        ]);

        $this->set('userinfo', $userinfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userinfo = $this->Userinfos->newEntity();
        if ($this->request->is('post')) {
            $userinfo = $this->Userinfos->patchEntity($userinfo, $this->request->getData());
            if ($this->Userinfos->save($userinfo)) {
                $this->Flash->success(__('The userinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('userinfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userinfo = $this->Userinfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userinfo = $this->Userinfos->patchEntity($userinfo, $this->request->getData());
            if ($this->Userinfos->save($userinfo)) {
                $this->Flash->success(__('The userinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('userinfo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Userinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userinfo = $this->Userinfos->get($id);
        if ($this->Userinfos->delete($userinfo)) {
            $this->Flash->success(__('The userinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The userinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    // public function login() {
    //     if($this->request->is('post')){
    //         $user = $this->Auth->identify();
    //         if($user){
    //             $this->Auth->setUser($user);
    //             return $this->redirect(['controller' => 'posts']);
    //         }
    //         $this->Flash->error('error');
    //     }
    // }
}
