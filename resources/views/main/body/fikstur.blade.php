@php
    $url="http://www.amatorfutbol.org/tff/superlig/puandurumu-7027.html";
    $veri=file_get_contents($url);
    $takimlar='@<tr class="hucre">(.*?)</tr>@si';
    $fikstur='@<tr class="hucre">(.*?)(.*?)</tr>@si';

    // $puan="@<td (.?)>(.?)</td>@si";
    preg_match_all($takimlar,$veri,$tablo);
    preg_match_all($fikstur,$veri,$fikstablo);

     $gelenfiks=$fikstablo[0];
    $fikssatirsayi= count($gelenfiks);
    $fiksson_uc=$fikssatirsayi-4;
    $gelen=$tablo[0];
    $satirsayi= count($gelen);
    $son_uc=$satirsayi-4;


for ($i=0; $i <$fikssatirsayi ; $i++) {
        $fikspuan="@<td (.*?)>(.*?)</td>@si";
        $fikssaat="@<td>(.*?)</td>@si";
        preg_match_all($fikspuan,$gelenfiks[$i],$fikspuanlar);


        preg_match_all($fikssaat,$gelenfiks[$i],$fiksSaatler);

$tarih=$fiksSaatler[1][0];
$saat=$fiksSaatler[1][1];
$stadTablo=$fikspuanlar[2][0];
$evsahibi=$fikspuanlar[2][2];
$misafir=$fikspuanlar[2][3];




echo '
 <style>
a {
    color: black!important;
    text-decoration: none!important;
}

a:hover
{
     color:black!important;
     text-decoration:none!important;
     cursor:pointer!important;
}
 </style>
 <td align="center" style="color:black;" >'.($i+1).'</td>

              <th scope="center" style="font-size:10px;font-weight:500!important;color: black;text-decoration: none; text-align:center;">'.$tarih." ".$saat.'</th>
              <th scope="center" style="font-size:10px;font-weight:500!important;color: #0060B6;text-decoration: none;">'.$stadTablo.'</th>
              <td align="center" style="font-size:10px;color: #0060B6;text-decoration: none;">'.$evsahibi.'</td>
              <td align="center" style="font-size:10px;color: #0060B6;text-decoration: none;">'.$misafir.'</td>
            </tr>';




        }






     //exit;
    // $dizi=[];

@endphp
