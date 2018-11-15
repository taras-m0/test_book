<?php

/**
 * For ldgen.
 * User: ttt
 * Date: 15.11.2018
 * Time: 16:27
 */
class model_page extends model {
    protected $table = 'page';

    public function getPages($book){
        return $this->query('SELECT id, num FROM ' . $this->table . ' WHERE book_id=' . $book . ' ORDER BY num')
            ->fetchAll();
    }

    public function getPage($book, $page){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE book_id=' . $book . ' AND num=' . $page)
            ->fetchAll();
    }
}