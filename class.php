<?php 

class Connection {
    var $server;
    var $username;
    var $password;
    var $db;

    function __construct($Server,$Username,$Password,$Db)
    {
        $this->server = $Server;
        $this->username = $Username;
        $this->password = $Password;
        $this->db = $Db;
    }
    function getConnection(){
        return $link = mysqli_connect($this->server,$this->username,$this->password,$this->db);
    }
}

?>