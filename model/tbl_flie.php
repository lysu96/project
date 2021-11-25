<?php 
require_once 'confing.php';
class Files extends Databases
{
    private $tbl = "tbl_flie";
    
    function __construct()
    {
        parent:: Connect();
    }

    public function List_tag()
    {
        $table = $this->tbl;
        $sql = "SELECT * FROM $table";
        return $this->Getdata($sql);
    }
    public function List_url_tag($url_tag)
    {
        $table = $this->tbl;
        $sql = "SELECT * FROM $table WHERE url_tag  = '$url_tag '";
        return $this->Getdata($sql);
    }
    public function List_id_tag($id)
    {
        $table = $this->tbl;
        $sql = "SELECT * FROM $table WHERE idsp=$id";
        return $this->Getdata($sql);
    }

    public function Edit_tag($id, $name_tag, $url_tag, $content_tag)
    {
        $table = $this->tbl;
        $sql = "UPDATE $table SET name_tag='$name_tag', url_tag='$url_tag', content_tag='$content_tag' WHERE id_tag=$id";
        return $this->Execute($sql);
    }
    public function Insert_tag($name_tag, $url_tag, $content_tag)
    {
        $table = $this->tbl;
        $sql = "INSERT INTO $table(id_tag,  name_tag, url_tag, content_tag) VALUES (NULL,'$name_tag','$url_tag','$content_tag')";
        return $this->Execute($sql);
    }
    public function Delete_tag($id)
    {
        $table = $this->tbl;
        $sql = "DELETE FROM $table WHERE id_tag=$id";
        return $this->Execute($sql);
    }
}


 ?>