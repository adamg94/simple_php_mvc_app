<?php
    class Home extends Controller
    {
        private $User;
        public function __construct()
        {
            $this->User = $this->Model('User');
            $this->Title .= "akármi";  
        }
        public function index($Name = '')
        {
            $this->User->SetName($Name);  
            $this->View('/home/index', $this->User);
            echo "E-mail controller-ből: {$this->User->GetEmailByFirstName('Admin')}";
            /**
             * Ezt az e-mail meg egyébként bárminek a kiírását tilos a controllerekben.
             * Minden kiíratást View csinál,  a model-t megkapja és az alapján a view-ban kell használni a metódusokat.
             * Önmagát az osztály példányt viszont a controller hozza létre és adja át.
             */
        }
        public function feldolgoz()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
                header("location: ../{$_POST['name']}");/* ennél hülyébb nem is lehetne, 
                de csak egy példa arra, hogy működik. Persze ez így get-re is ugyanazt írja ki. */
            }
        }
    }