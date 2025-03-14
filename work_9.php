<?php
$arr = [1 , 2 , 3 , 15 ,33];
$value = 33;
$search = array_search($value , $arr );
if ( $search !== false ){
    print ("Наход: $search");
} else{
    print ("Ненаход");
}

