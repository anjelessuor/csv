<?php
namespace Model;

class EventsModel extends \W\Model\Model
{
    protected $primaryKey = 'events_id';

    public function findAllByAge($orderBy = '', $orderDir = 'ASC', $limit = null, $offset = null)
    {
        if ( ! isset($_GET['age']) ) {
            return $this->findAll();
        }
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE '.$_GET['age'].' = 1';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

}
