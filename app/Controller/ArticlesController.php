<?php
header("Content-type: text/html; charset=utf-8");

class ArticlesController extends AppController {

    public $uses = array('Article');
    public $components = array('Session', 'Flash', 'Paginator');
    public $helpers = array('Paginator');

    public function isAuthorized($user = null)
    {
        // Admin can access every action
        if ($this->action === 'add') {
            return true;
        }
        return parent::isAuthorized($user);

    }

    public function beforeFilter()
    {
        $this->Auth->allow('index', 'view');
        parent::beforeFilter();
        $this->layout = 'simplex';
        $this->Auth->allow('logout');

    }

    public function index(){
        $this->set('articles', $this->Article->find('all'));

      $articles =  $this->Paginator->settings = array(
          'fields' => array('id','apmac', 'apname', 'ssid', 'url', 'sessions_count', 'authtime', 'text_sms', 'banners_url', 'banners_delay', 'client_name'),
                        'recursive' => -1,
                        'limit' => 10,
          'order' => array('Article.id' => 'desc'

          )
        );

        $this->set('articles',$this->paginate());


    }

    public function view($id = null)
    {
        if (!$this->Article->exists($id))
            throw new NotFoundException(__('Такой записи нет'));


        $article = $this->Article->findById($id);


        $this->set('article', $article);


    }

    public function add()
    {
        if ($this->request->is('post')) {
            
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Flash->add(__('Ваша запись добавлена.'));
                 return $this->redirect(array('action' => 'add'));
            } else {
                $this->Flash->error(__('Не возможно добавить запись.'));
            }
            $this->set('title_for_layout', 'Добавление записи');
        }
        $this->set('categories', $this->Article->find('list'));
    }

    public function delete($id)
    {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Article->delete($id)) {
            $this->Flash->delit(
                __('Ваша запись с  id: %s была удалена.', h($id))
            );
        } else {
            $this->Flash->error(
                __('The post with id: %s could not be deleted.', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }

    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Article->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Article->id = $id;
            if ($this->Article->save($this->request->data)) {
                echo $this->Flash->info(__('Ваша запись изменена!'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to update your post.'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }


    }

     public function search() {
      //  debug($_GET['order']);
        $search = !empty($_GET['art']) ? $_GET['art'] : null;
        if(is_null($search)) {
            return $this->set('search_res', 'Введите поисковый запрос...');
        }

       

          $this->Paginator->settings = array(
            'conditions' => array(

                "OR" => array(

                "Article.apmac LIKE" => "%$search%",
                "Article.apname LIKE" => "%$search%",
                "Article.ssid LIKE" => "%$search%",
                "Article.client_name LIKE" => "%$search%",
                
                )
                    ),



            'fields' => array('id','apmac', 'apname', 'ssid', 'url', 'sessions_count', 'authtime', 'text_sms', 'banners_url', 'banners_delay', 'client_name'),
            'recursive' => -1,
            'limit' => 10,

              'order' => array('Article.id' => 'desc'

              )
        );
        $search_res =  $this->Paginator->paginate('Article');



   

        $this->set(compact('search_res'));

    }





}


?>
