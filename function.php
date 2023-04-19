<?php
function pwdGen($numberOfCharachters){
    $characters =[
        ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'],
        ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
        ['0','1','2','3','4','5','6','7','8','9'],
        ['{','}','[',']','+','-','*','/','!','#','$','%','(',')']
    ];
    $newPwd = [];
    for($i = 0; $i < $numberOfCharachters; $i++){

            $rndList = rand(0,count($characters)-1);
            // echo 'valore $rndList = ' . $rndList;
            
            $key = $rndList;
            // echo 'valore $key = ' . $key;

            $list = $characters[$key];
            // echo 'valore $list = ' . $list;

            $rndChar = $list[rand(0, count($list) - 1)];
            // echo 'valore $rndChar = ' . $rndChar;

            // $rndChar = $characters[$rndList][rand(0,count($characters[$rndList]-1))];
            $newPwd[] = $rndChar;
            // echo implode($newPwd);
    }
    // echo implode($newPwd);
    return implode($newPwd);
}

















?>