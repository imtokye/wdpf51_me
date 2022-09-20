<?php
if($_GET['mydata']=='Good'){
    $good =array("Fayzullah","Rabbani","Anamul","Naymur");
    echo getData($good);
}else if($_GET['mydata']=='Bad'){
    $bad =array("Mamun","Rakib","Jafor","Naim");
    echo getData($bad);
}

function getdata($items){
    $output ="<ul>";
    for($i=0;$i<count($items); $i++){
        $output .= "<li>" . $items[$i] . "</li>";
    }
    $output .= "</ul>";
    return $output;
}
?>