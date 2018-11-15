<?php

/**
 * For ldgen.
 * User: ttt
 * Date: 15.11.2018
 * Time: 16:25
 */
class controller {

    public function index(){
        /** @var model_book $book */
        $book = model::getInstance('book');

        return $this->prn('book', [ 'books' => $book->getEntities()]);
    }

    public function page(){
        $book = $_GET['book'];

        /** @var model_page $page */
        $page = model::getInstance('page');

        $pages = $page->getPages($book);
        $currPage = array_key_exists('page', $_GET) ? $_GET['page'] : (
            count($pages) > 0 ? $pages[0]['num'] : 1 );

        return $this->prn('page', [
            'pages' => $pages,
            'book' => $book,
            'page' => $page->getPage($book, $currPage)
        ]);
    }

    protected function prn($tmpl, $vars){
        extract($vars);
        ob_start();
        include __DIR__ . '/views/' . $tmpl . '.php';
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}