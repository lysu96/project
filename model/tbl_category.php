<?php 
require_once 'confing.php';
class Category extends Databases
{
    private $tbl = "tbl_category";
    
    function __construct()
    {
        parent:: Connect();
    }

    public function List_category()
    {
        $table = $this->tbl;
        $sql = "SELECT * FROM $table";
        return $this->Getdata($sql);
    }
    public function Get_category($id_category)
    {
        $table = $this->tbl;
        $sql = "SELECT * FROM $table WHERE id_category  = '$id_category'";
        return $this->Getdata($sql);
    }

    public function Edit_category($id, $name_category, $url_category, $content_category)
    {
        $table = $this->tbl;
        $sql = "UPDATE $table SET name_category='$name_category', url_category='$url_category', content_category='$content_category' WHERE id_category = $id";
        return $this->Execute($sql);
    }
    public function Insert_category($name_category, $url_category, $content_category)
    {
        $table = $this->tbl;
        $sql = "INSERT INTO $table(id_category, name_category, url_category, content_category) VALUES (NULL,'$name_category','$url_category','$content_category')";
        return $this->Execute($sql);
    }
    public function Delete_category($id)
    {
        $table = $this->tbl;
        $sql = "DELETE FROM $table WHERE id_tag=$id";
        return $this->Execute($sql);
    }
}


 ?>