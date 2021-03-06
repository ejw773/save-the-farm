<?php


session_start();
// Global Variable Initialization
$rounds_left = 25;
$location = "kitchen";
$wearing_glasses = true;
$wearing_contacts = false;
$has_mushroom = false;
$has_soup = false;
$moved_cupboard = false;
$is_hungry = true;
$needs_bathroom = true;
$input = key($_POST);

// Include each of the function definitions

include "printHelp.php";
include "gameRound.php";
include "printStatus.php";
include "changeLocation.php";
include "lookAround.php";
include "pickMushrooms.php";
include "cookSoup.php";
include "urinate.php";
include "moveCupboard.php";
include "searchSafe.php";

// Display Intro Text
printHelp();
echo "<p>Ok, the game is about to begin. Will you be able to find the golden mouse statuette and save your great-aunt's farm? We wish you good luck!\n**********BEGIN GAME***********</p><br />";

echo "<p>Hello there. It's been a harrowing few weeks. First your toenail issue, and now Great-Aunt Natasha's emu farm is in danger of being reposessed! So here you are---after a brief stopover at the Mayo clinic---in uncle Boris's remote cabin in the heart of the Terror Woods. Family legend holds that a golden statue of immense value is hidden somewhere within these walls. Unfortunately, you have a lot of stuff to do today, so you can only devote about 25 minutes to finding the statue. I guess we'll see what happens ;) </p><br /><br />";


// Play 25 rounds
gameRound($input);

if ($rounds_left < 1) {
  // Game Is Over
  echo "\n**********ATTENTION***********\n The game is over!";
}
