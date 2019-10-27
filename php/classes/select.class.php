<?php
class Select extends dbc {

    function SelectItem ($TableName,$Val){

        $query="SELECT * FROM `$TableName` WHERE id = $Val ";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $shower[]=$row;
        }
//        return $shower;
        foreach ($shower as $va){
            foreach ($va as $v=>$k){
                if ($v!='id'){
                    return  '<tr><td>'.$v.'</td><td>' .$k.'</td></tr>';}
            }
        }
    }
}
?>