<?php
class Connexion extends PDO {
private $table;
public function __construct($table)
{
    $params=file(__DIR__."\.env");
    $server=trim(explode(":",$params[0])[1]);
    $user=trim(explode(":",$params[1])[1]);
    $password=trim(explode(":",$params[2])[1]);
    $db_name=trim(explode(":",$params[3])[1]);
    $dsn='mysql:host='.$server.';  dbname='.$db_name;
    parent::__construct($dsn,$user,$password);
    $this->table=$table;
    
}

public function IUD($data,$action){
switch($action){
case "insert":$fields=$values=""; 
              $req="insert into ".$this->table."(";

             /* $keys=array_keys($data);
              $fields=implode(",",$keys);
             */
     
           foreach($data as $key=>$value)
                  {               
                    $fields.=$key.",";
                    $values.=":$key,";
                    
                  }
                  
                  $fields=substr($fields,0,-1);
                  $values=substr($values,0,-1);
                  $req.=$fields.") values (".$values.")";
                  
                   $stm=$this->prepare($req);
                  
               break; 

case "update": $req="update ".$this->table." set ";
      
                foreach($data as $key=>$value)    
                    if($key!="id")                             
                     $req.="$key=:$key,";

                   $req=substr($req,0,-1);
                   $req.=" where id=:id";
                   
                    $stm=$this->prepare($req);
                   
                break;   

case "delete": $req="delete from ".$this->table." where id=:id ";
              $stm=$this->prepare($req);                   
               break;                                            
}

return $stm->execute($data);
}

public function Select($data=null){
$conditions="";
$req="select * from ".$this->table;
if($data!=null)
{
foreach($data as $key=>$value)
   $conditions.="$key=:$key and ";
$conditions=substr($conditions,0,-4);
$req.=" where $conditions";
}
$stm=$this->prepare($req);  
$stm->execute($data);
return $stm->fetchAll();
}
}

?>