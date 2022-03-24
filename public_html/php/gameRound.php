<?php

function gameRound()
{
  global $rounds_left, $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $moved_cupboard, $has_soup, $is_hungry, $needs_to_pee;

  if ($rounds_left <= 0) {
    return;
  }
  printStatus();
}

// Lots of stuff needs to go here