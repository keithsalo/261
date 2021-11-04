<?php
// using the heredoc!

$show = 'Friend\'s';
$author = 'Marta Kaufman';
$character = 'Rachel Green';
$actor = 'Jennifer Aniston';

$content = <<<HAND
My girlfriends favorite show is $show, created by $author, and is presently a being re-ran on Netflix. 

$actor's humorous banter is top notch! Once this content is corrected, it will display properly; my content in orange, and my variables are not displayed in black!!! As matter of fact everything is displayed in red.
HAND;




echo $content;