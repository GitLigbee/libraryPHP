<?php

    class div_smarty{
        public $templates_dir = null;
        public $templates_c_dir = null;
        public $values = array();
        
        function __construct(){
            $this->templates_dir = ROOT.'/templates_dir';
            $this->templates_c_dir = ROOT.'/templates_c_dir';
            if(!file_exists($this->templates_c_dir)){
                mkdir($this->templates_c_dir);
            }
            if(!file_exists($this->templates_dir)){
                mkdir($this->templates_dir);
            }
        }
        
        public function assign($rep,$val=null){
            if($val!=null){
            $this->values[$rep] = $val;
            }
        }
        
        public function display($tpl){
            $path = $this->templates_dir.'/'.$tpl;
            $com_dir = $this->templates_c_dir.'/'.$tpl.'.php';
            if(!file_exists($path)){
                return false;
            }
            if(!file_exists($com_dir)||filemtime($path)>filemtime($com_dir)){
                //preg
                $content = file_get_contents($path);
                $preg = array(
                    '/\{\s*\$([a-zA-Z_]\w+)\s*\}/'
                );
                $rep = array(
                    '<?php echo $this->values["${1}"] ?>'
                );
                $new_str = preg_replace($preg,$rep,$content);
                file_put_contents($com_dir,$new_str);
            }
            require_once $com_dir;
        }
    }

?>