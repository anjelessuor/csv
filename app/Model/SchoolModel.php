<?php
namespace Model;
class SchoolModel extends \W\Model\Model {
    protected $primaryKey = 'school_id';
    protected $table = 'school_help';
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
 ?>
