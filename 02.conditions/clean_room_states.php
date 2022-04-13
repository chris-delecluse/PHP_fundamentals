<?php

$possible_states = [
    "health hazard",
    "filthy",
    "dirty",
    "clean",
    "immaculate"
];

$room_filthiness = $possible_states[4];

if( $room_filthiness == $possible_states[0] ){
    echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1] ){
    echo "Yuk, Room is filthy : let's clean it up !";
} else if( $room_filthiness == $possible_states[2] ) {
    echo "Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == $possible_states[3] ) {
    echo "Yuk, Room is now clean!";
} else if( $room_filthiness == $possible_states[4] ) {
    echo "Whaaaouh, Room is now clean!!";
}  else {
    echo "<br>Nothing to do, room is neat.";
}