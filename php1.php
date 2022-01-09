<?php 
    function king ($n,$m)
    {
        $monkey = range(1, $n);
        $i = 0;
        while (count($monkey)>1) {
            $i++;
            $head = array_shift($monkey);
            if ($i % $m !=0) {
                array_push($monkey, $head);# code...
            }
        }
        return ['total'=>$n,'kick' =>$m,'king' =>$monkey[0]];
    }

        





        $data = king(10,7);
        print_r(king($data));

 ?>
