   <?php
/**
 * Created by PhpStorm.
 * User: georgefalkovich
 * Date: 06/01/2020
 * Time: 20:46
 */

class HomeModel extends Model{
    public function Index() {
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        return $rows;
    }
}