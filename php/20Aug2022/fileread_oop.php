<?php 

class fileread {

    public function(){
        // $fh = fopen("idbbisew.txt", 'r');
        // while(!feof($fh)){
        //     $data = fgets($fh);
        //     echo $data . '<br>';
        $lines = file('idbbisew.txt');
        foreach($lines as $line){
            echo $line 
        }
    }
}

$obj1 = new fileread();
$obj1->getdata();
?>