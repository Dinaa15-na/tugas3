<?php

function lulus($penilaian)
{
    if($penilaian > 55)
    {
        return 'LULUS';
    } 
    elseif($penilaian < 56)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function nilai($penilaian)
{
    if ($penilaian <= 35) {
        return 'E';
    } elseif($penilaian <= 55) {
        return 'D';
    } elseif($penilaian<= 69) {
        return 'C';
    } elseif($penilaian <= 84) {
        return 'B';
    } elseif($penilaian <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
}



?>