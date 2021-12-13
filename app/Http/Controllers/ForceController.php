<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForceController extends Controller
{
public function index()
{
    {   $id='id';
        $goal= 'goal';
        $points = 'points';
        $home = 'home';
        $away = 'away';
        $last_game='last_game';
        $strength ='strength';  
        $chelsea = "Chelsea";  
        $arsenal = "Arsenal";
        $manchester = "Manchester";
        $liverpool = "Liverpool";
   
// Team's Advantages and Disanvanages
$manchester_points= [
    [$home=1],
    [$stad=$home],
    [$id=4],
    [$last_game=2],   
];


   //If the team had won last game, this impact on morale. So the performans  will be up


    if(($last_game=1))
    {
      $last_game=1;
    }
     else
      {
         $last_game=0;
      };




//Averages of  more Goals will affect  teams as advantaged
    if(($id =1)){$goals= 3;}
     else {
         $goals=-1;
         };
         
//If Points equals or bigger 10, the team will gurantee to qualify success. So the team might not perform full strenght.  

    $points=3;
    if(($points > 10)){$points= -1;}
     else {
         $points=1;
         };
        
$strenght_manchester= $stad +$last_game + $goals +$points;


// Liverpool

$liverpool_points= [
    [$away=-1],
    [$stad=$away],
    [$last_game=0],   
];

   //If the team had won last game, this impact on morale. So the performans  will be up


    if(($last_game=1))
    {
      $last_game=1;
    }
     else
      {
         $last_game=0;
      };




//Averages of  more Goals will affect  teams as advantaged
    $id=2;
    if(!($id =1)){$goals= 3;}
     else {
         $goals=-1;
         };
         echo $goals;
//If Points equals or bigger 10, the team will gurantee to qualify success. So the team might not perform full strenght.  

    $points=5;
    if(($points > 10)){$points= -1;}
     else {
         $points=1;
         };
        
$strenght_liverpool= $stad +$last_game + $goals +$points;



if ($strenght_manchester > $strenght_liverpool)
{ 
  echo "Manchester United 1-0 Liverpool"; 
}
else 
 { echo "Manchester United 0-2 Liverpool";
 };
 
    }
}
}
