<?php
require  "film.php";
require "Personne.php";
require "role.php";
require "Film_genre.php";
require "Casting.php";
require "genre.php";
require "acteur.php";
require "realisateur.php";

////////////////////////////////////////////Star wars////////////////////////////////////////////////////////////
$realisateur1=new realisateur ("Lucas","George","homme", '14-05-1944');

$film1=new film ("Starwars 1","13-10-1999", 130, $realisateur1 );


//////////////////////////////casting starwars 1//////////////////////////////////////
$acteur1=new acteur("Neeson","Liam","homme", '07-06-1952');//,"Qui-Gon Jinn"
$acteur2=new acteur("McGregor","Ewan","homme",'31-03-1971' );//"Obi-Wan Kenobi"
$acteur3=new acteur("Portman","Nathalie","femme", '09-05-1981' );//"Padmé Amidala "//a jouer aussi dans "leon"


$role1=new role(" Qui-Gon Jinn");
$role2=new role(" Obi-Wan Kenobi");
$role3=new role(" Padmé Amidala ");

//ajouter genre

$genre1 = new Genre('Science Fiction');
$genre2 = new Genre('Drame');
//
$filmGenre = new Film_genre($film1, $genre1);
$filmGenre = new Film_genre($film1, $genre2);

//
$casting1 = new Casting($film1, $role1, $acteur1);
$casting2 = new Casting($film1,$role2,$acteur2);
$casting3 = new Casting($film1,$role3,$acteur3);


///////////////////////////casting starwar 4///////////////////////////////////////
$film2=new film ("Starwars 4","11-09-1977",121, $realisateur1);
$acteur4=new acteur("Guiness","alec","homme",'02-03-1914');// obi wan kenobi
$acteur5=new acteur("Hamill","mark","homme",'25-10-1951');//Luke Skywalker
$acteur6=new acteur("Carrie","Fisher","homme",'21-10-1956');//Leia Organa

$role4=new role ("Luke Skywalker");
$role5=new role ("Leia Organa");

$filmGenre=new Film_Genre($film2,$genre1);

$casting4=new casting($film2,$role2,$acteur4);
$casting5=new casting($film2,$role4,$acteur5);
$casting6=new casting($film2,$role5,$acteur6);

// $genre1=new genre ("Science fiction");



/////////////////////////////////////////Leon//////////////////////////////////////////////////////////////////////
$realisateur2=new realisateur("Besson","Luc","homme",'18-03-1959');
$film3=new film("Leon","23-01-1995",110,$realisateur2);

$acteur7=new acteur("Reno","Jean","homme",'30-07-1948');//"leon"
$acteur8=new acteur("Oldman","Gary","homme",'21-03-1958');//"Norman Stansfield"

$role6=new role('leon');
$role7=new role ("Norman Stansfield");
$role8=new role ("Mathilda Lando");//nathalie portman

$filmGenre=new Film_Genre($film3,$genre2);

$casting7=new casting($film3,$role6,$acteur7);
$casting8=new casting($film3,$role7,$acteur8);
$casting9=new casting($film3,$role8,$acteur3);
///////////////////////////////////////////////////////////////////////////////////////////////////////////



echo $casting1->getRole();
echo $acteur3->getFilmoGraphie();
echo $realisateur1->getFilmographie();
echo $acteur3->getRole();
echo $film1->getCastings();
echo $role2->getActeur();
echo $genre1->getFilm();
echo $film1->getGenre();
?>