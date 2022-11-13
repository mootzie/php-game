<?php
// Move the cupboard

function moveCupboard()
{
    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard;

    // Write your code here:
    $ready_to_work = FALSE;

    if (!$is_hungry && $wearing_contacts && !$needs_to_pee && !$wearing_glasses) {
        $ready_to_work = TRUE;
    }
    if ($location !== "kitchen") {
        echo "you dont see a cupboard here";
    }
    if ($moved_cupboard) {
        "You've already moved the cupboard";
    }
    if (!$ready_to_work) {
        echo "You're not ready to work! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";
    } else {
        echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
        $moved_cupboard = TRUE;
    }
}