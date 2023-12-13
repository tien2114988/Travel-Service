<?php
class TourModel
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAll($category_id = '')
    {
        if ($category_id != '') {
            $query = "SELECT * FROM tour WHERE category_id=$category_id";
        } else {
            $query = "SELECT * FROM tour";
        }
        $data = $this->database->select($query);
        if ($data) {
            return $data->fetch_all(MYSQLI_ASSOC);
        } else {
            return $data;
        }

    }

    public function getById($id)
    {
        $query = "SELECT * FROM tour WHERE category_id=$id";
        $data = $this->database->select($query);
        return $data->fetch_all(MYSQLI_ASSOC)[0];
    }

}
