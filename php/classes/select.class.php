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
                    return  $k;
                    break;
                }
            }
        }
    }

    function Create_Select ($TableName){

        $query="SELECT * FROM `$TableName`";
        $result = $this->connect()->query($query);
        while($row = $result->fetch_assoc()){
            $shower[]=$row;
        }
        $str='';
        $str.= '<select id="'.$TableName.'"><option value="0">--------------</option>';
        foreach ($shower as $key){
            foreach ($key as $gen=>$item){
                if (!(is_numeric($item))){
                    $Arr[]=$item;
                }
            }
        }
        foreach ($Arr as $key=>$gen){
            $str.= '<option value="'.($key+1).'">'.$gen.'</option>';
        }
        $str.= '</select>';
    return $str;
    }
}
?>