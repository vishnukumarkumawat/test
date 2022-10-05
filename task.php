<?php

//1. Write a program to find a position of moving ball [RIGHT,DOWN,LEFT,LEFT,DOWN] in a matrix

class Matrix
{
    private function find_position_of_moing_ball($n, $position_ball)
    {
        $x = 0; //Here $x indicate the row for matrix
        $y = 0; //Here $y indicate the column for matrix
        foreach ($position_ball as $position)
        {
            $xm = 0;
            $ym = 0;
            
            if($position=="RIGHT")
            {   //if ball moves to right position
                $ym = 1;
            }
            elseif($position=="DOWN")
            {
                //if ball moves to down position
                $xm = 1;
            }
            elseif($position=="LEFT")
            {
                //if ball moves to left position
                $ym = -1;
            }
            else{
                //if ball moves to up position
                $xm = -1;
            }

            if (($x + $xm) >= 0  && ($x + $xm) < $n && ($y + $ym) >= 0 && ($y + $ym) < $n )
            {
                $x += $xm;
                $y += $ym;
            }
        }
        return $x * $n + $y; // (r*s)+c
    }

    public function ball_direction($cordinates = array())
    {
         $msize = 4;
         return $this->find_position_of_moing_ball($msize,$cordinates);
    }
}

$classObject = new Matrix(); // Call Matrix Class

echo $classObject->ball_direction(array("RIGHT", "DOWN", "LEFT", "LEFT", "DOWN"));
//output : 8

?>
