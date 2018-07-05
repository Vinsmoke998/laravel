<?php
require_once ('database_con.php');
class M_news extends database_con 
{
    public function shownews2()
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