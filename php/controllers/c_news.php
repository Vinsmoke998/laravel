<?php
require_once ("models/m_news.php");
class C_news
{
    public function shownews()
    {
        //models
        $m_news = new  M_news();
        $news = $m_news->shownews2();
        //views
        include("views/v_news.php");
    }
    public function shownewsdetailsByid()
    {
        //models
        $m_news = new  M_news();
        $news = $m_news->ShownewsByid($id);

        //views
        include("views/v_news_details.php");
    }




}
?>