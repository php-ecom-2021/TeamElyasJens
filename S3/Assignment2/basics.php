<?php
/*
 * How to concatenate an integer, string and float together, the basics.
 *  */
$myInt = 15;
$myFloat = 24.0;
$myString = 'sup';
$myStringQuotes = "Sup";
$myNumberString = "2";
$myNumber2String = "-1";

echo $myInt + $myFloat;

echo '<br/>';
echo nl2br("\n");

echo $myString . $myInt . $myFloat;

echo '<br/>';
echo nl2br("\n");

echo "Sup{$myInt} random{$myFloat}ies";

echo '<br/>';
echo nl2br("\n");

echo 'Sup{$myInt} random{$myFloat}ies';

echo '<br/>';
echo nl2br("\n");

echo $myNumberString + $myNumber2String;

echo '<br/>';
echo nl2br("\n");

/*
 * There is a difference between "." and ",". one of them is not perceived as decimal
 * separator and therefore the "," throws a warning
 * */

echo '1.1' + 1 - '-1' + '1,1' + (0.2 - '0.6' * 14);

echo '<br/>';
echo nl2br("\n");

$stringToSearchFor = "appelsin";
echo var_dump($stringToSearchFor[3]);
$stringToBeSearched = "Dette er en appelsin og skal derfor skrældes først";

$position = strpos($stringToBeSearched, $stringToSearchFor);

echo strpos($stringToBeSearched, $stringToSearchFor);

echo '<br/>';
echo nl2br("\n");

echo "the length of the string is " . substr($stringToBeSearched, $position, strlen($stringToSearchFor) + 1);

echo '<br/>';
echo nl2br("\n");

$numberedArray = [1, 2, 3, 4, 5, 6];
$stringArray = ['1', '2', '3', '4', '5', '6'];
$mixedArray = [1, '2', 3.0, '4', 5.0, 6];

echo $numberedArray[5] . " + " . $stringArray[4] . " + " . $mixedArray[4];

echo '<br/>';
echo nl2br("\n");

$sum = 0;
for($i = 0; $i < sizeof($numberedArray); $i++){
    if(next($numberedArray) !== null){
        $sum += $numberedArray[$i];
    }
}

for($i = sizeof($numberedArray) - 1; $i >= 0; $i--){
    if(prev($numberedArray) !== null){
        $sum += $numberedArray[$i];
    }
}

reset($numberedArray);

//Ask the teacher when he has time!!!
for($i = sizeof($numberedArray) - 1; $i >= 0; $i--){
    if(prev($numberedArray) !== null){
        $sum += $numberedArray[$i];
    }
}

echo $sum;

echo '<br/>';
echo nl2br("\n");

$largeArray = [];

for($i = 50; $i <= 105; $i++){
    array_push($largeArray, $i);
}

print_r($largeArray);

$separator = '<br/>';

echo '<br/>';
echo nl2br("\n");

$total = 101;

$totalString = '';
for($i = 0; $i < $total; $i++){
    if($i % 2 == 0){
        $totalString .=  $i . "{$separator}";
    }
}
echo $totalString;

$star_trek_members = [
    [
        'actor' => 'Walter Koenig',
        'name' => 'Pavel Chekov',
        'rank' => 'security officer.'
    ],[
        'actor' => 'Leonard Nimoy',
        'name' => 'Spock',
        'rank' => 'science officer.'
    ],[
        'actor' => 'William Shatner',
        'name' => 'James T. Kirk',
        'rank' => 'security officer'
    ],[
        'actor' => 'James Doohan',
        'name' => 'Montgomery Scott',
        'rank' => 'chief engineer.'
    ],[
        'actor' => 'Nichelle Nichols',
        'name' => 'Nyota Uhura',
        'rank' => 'communications / science officer.'
    ]
];

echo '<br/>';
echo nl2br("\n");

$firstActorName = '';

print_r($star_trek_members[0]['actor']);

echo '<br/>';
echo nl2br("\n");

usort($star_trek_members, function($a, $b){
    return $a['name'] <=> $b['name'];
});

print_r($star_trek_members);

echo '<br/>';
echo nl2br("\n");

print_r(sizeof($star_trek_members));

echo '<br/>';
echo nl2br("\n");
echo '<pre>';
var_dump($star_trek_members[1]['rank']);
echo '</pre>';
for($i = 0; $i < count($star_trek_members); $i++){
    $stringToCheck = $star_trek_members[$i]['rank'];

    $rank = '';
    $isSecurity = str_contains($stringToCheck, 'security');
    $isScience = str_contains($stringToCheck, 'science');
    $isEnginneer = str_contains($stringToCheck, 'engineer');

    if($isSecurity)
        $rank = 'security';
    if($isScience)
        $rank = 'science';
    if($isEnginneer)
        $rank = 'engineer';


    switch ($rank){
        case 'security':
            $star_trek_members = array_merge($star_trek_members[$i], array('shirt_color' => 'red'));
            break;
        case 'science':
            $star_trek_members = array_merge($star_trek_members[$i], array('shirt_color' => 'blue'));
            break;
        case 'engineer':
            $star_trek_members = array_merge($star_trek_members[$i], array('shirt_color' => 'yellow'));
            break;
        default:
            echo 'nothing happens';
    }
}

print_r($star_trek_members);











