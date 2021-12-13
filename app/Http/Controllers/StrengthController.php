<?php

namespace App\Http\Controllers;

use App\Models\Strength;
use Illuminate\Http\Request;

class StrengthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
$chelsea_points= [
    [$home=1],
    [$stad=$home],
    [$last_game=1],   
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
        $id=1;
    if(($id =1)){$goals= 3;}
     else {
         $goals=-1;
         };
         
//If Points equals or bigger 10, the team will gurantee to qualify success. So the team might not perform full strenght.  

    $points=11;
    if(($points > 10)){$points= -1;}
     else {
         $points=1;
         };
        
$strenght_chelsea= $stad +$last_game + $goals +$points;


// Arsenal

$arsenal_points= [
    [$away=-1],
    [$stad=$away],
    [$last_game=1],   
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
    $id=3;
    if(!($id =1)){$goals= 3;}
     else {
         $goals=-1;
         };
//If Points equals or bigger 10, the team will gurantee to qualify success. So the team might not perform full strenght.  

    $points=5;
    if(($points > 10)){$points= -1;}
     else {
         $points=1;
         };
        
$strenght_arsenal= $stad +$last_game + $goals +$points;
   
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
//If Points equals or bigger 10, the team will gurantee to qualify success. So the team might not perform full strenght.  

    $points=5;
    if(($points > 10)){$points= -1;}
     else {
         $points=1;
         };
        
$strenght_liverpool= $stad +$last_game + $goals +$points;



if ($strenght_chelsea > $strenght_arsenal)
{ $chelsea= "Chelsea 2-1 Arsenal";
echo $chelsea;}
else
 { $arsenal= "Chelsea 0-2 Arsenal";
    echo $arsenal;
 };
  echo "<br/>";

 if ($strenght_manchester > $strenght_liverpool){ 
    $manchester = "Manchester United 3-1 Liverpool";
  echo $manchester;
}
else 
{ $liverpool ="Manchester United 0-3 Liverpool";

echo $liverpool;}    




 return view ('sonuc', compact (['arsenal','chelsea','manchester','liverpool']));
 
    }
}
