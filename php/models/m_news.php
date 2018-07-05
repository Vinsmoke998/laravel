<?php
require_once ('database.php');
class M_news extends database 
{
    public function shownews()
    {
        $sql = "select * from news";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function ShownewsByid($id)
    {
        $sql = "select * from news where id = ?";
        $this->setQuery($sql);
        $param = array($id);
        return $this->loadRow($param);


    }

}


?>