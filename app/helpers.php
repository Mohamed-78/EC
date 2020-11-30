<?php 

if(! function_exists('page_title'))
{
    function page_title($title)
    {
        $base_title = 'COGITECH';

        if($title === '')
        {
            return $base_title ;
        }else {
            return $title .' | ' .$base_title;
        }
    }
}

function getPrice($prix)
{
    $price = floatval($prix);

    return number_format($price, 2, ',', ' ').' FCFA';
}



/*if(! function_exists('ttQte'))
    {
        function ttQte($ac)
        {
            if($prixTT = $ac->total)
            {
                return settype($prix, "string");
            }else {
                return 'NULL';
            }
        }
    }*/