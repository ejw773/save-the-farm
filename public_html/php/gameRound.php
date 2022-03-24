<?php

function gameRound($input)
{
  global $rounds_left, $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $moved_cupboard, $has_soup, $is_hungry, $needs_to_pee;

  if ($rounds_left <= 0) {
    return;
  }
  echo "YOU ENTERED: $input";
  printStatus();
  $input = strtolower($input);
  echo "\n";
  switch ($input) {
    case "help":
      printHelp();
      break;
    case "put on glasses":
      echo "Your glasses are on.";
      $wearing_glasses = true;
      break;
    case "put on contacts":
      echo "Your contacts are on.";
      $wearing_contacts = true;
      break;
    case "take off contacts":
      echo "Your contacts are off.";
      $wearing_contacts = false;
      break;
    case "go":
      changeLocation();
      break;
    case "look around":
      lookAround();
      break;
    case "urinate":
      urinate();
      break;
    case "pick mushrooms":
      pickMushrooms();
      break;
    case "cook":
      cookSoup();
      break;
    case "eat":
      eatSoup();
      break;
    case "move cupboard":
      moveCupboard();
      break;
    case "search safe":
      searchSafe();
      break;
    case "search toilet":
      if ($location === "bathroom") {
        echo "The toilet contains an amazing secret. The bowl is filled with ordinary water, but in the tank: the golden mouse statuette. The mouse's nose seems to follow you as you move. The mouse is beautiful! You love it! You're never going to sell it! Forget Great-Aunt Natasha's emu farm!\nYOU LOSE THE GAME!!!\n\n";
        $rounds_left = 1;
      }
      break;
    default:
      echo "Sorry, that doesn't work :( Please use one of the valid commands. You can see the list of valid commands by entering 'help.'\n";
  }

  $rounds_left = $rounds_left - 1;
  echo "\nYou now have $rounds_left rounds left.\n\n";
}
