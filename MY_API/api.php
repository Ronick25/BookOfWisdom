<?php

require_once("Rest.inc.php");

class API extends REST {

    public $data = "";
    const DB_SERVER = "mysql.hostinger.com.ua";
    const DB_USER = "u883331540_palan";
    const DB_PASSWORD = "44lp4921";
    const DB = "u883331540_think";

    private $db = NULL;

    public function __construct(){
        parent::__construct();             
        $this->dbConnect();   
    }

    private function dbConnect(){
        $this->db = mysqli_connect(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD);
        if($this->db) 
            mysqli_select_db($this->db, self::DB);

    }

    /*
     * Public method for access api.
     * This method dynmically call the method based on the query string
     *
     */
    public function processApi(){
        $func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
        if((int)method_exists($this,$func) > 0)
            $this->$func();
        else
            $this->response('Error code 404, Page not found',404);
    }
    
    private function getAllQuotes(){
        $row = $_GET['rowFrom'] - 1;
        $connection = mysqli_connect("mysql.hostinger.com.ua", "u883331540_palan", "44lp4921", "u883331540_think") or die("Error " . mysqli_error($connection));
        if ($row == -1) {
            $sql_SELECT_ALL = "select * from quotes";
            $result = mysqli_query($connection, $sql_SELECT_ALL) or die("Error in Selecting " . mysqli_error($connection));
        } else {
            $sql_SELECT_10 = "SELECT * FROM quotes ORDER BY id DESC LIMIT $row, 10;";
            $result = mysqli_query($connection, $sql_SELECT_10) or die("Error in Selecting " . mysqli_error($connection));
        }
        $emparray = array();
        while($row =mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        echo json_encode($emparray);
        mysqli_close($connection);
    }

    private function getAllAuthors(){

        $connection = mysqli_connect("mysql.hostinger.com.ua", "u883331540_palan", "44lp4921", "u883331540_think") or die("Error " . mysqli_error($connection));

        $sql = "select * from authors";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

        $emparray = array();
        while($row = mysqli_fetch_assoc($result)){
            $emparray[] = $row;
        }
        echo json_encode($emparray);
        mysqli_close($connection);
    }

    private function getAllTopics(){

        $connection = mysqli_connect("mysql.hostinger.com.ua", "u883331540_palan", "44lp4921", "u883331540_think") or die("Error " . mysqli_error($connection));

        $sql = "select * from topics";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

        $emparray = array();
        while($row = mysqli_fetch_assoc($result)){
            $emparray[] = $row;
        }
        echo json_encode($emparray);
        mysqli_close($connection);
    }
}

$api = new API;
$api->processApi();
