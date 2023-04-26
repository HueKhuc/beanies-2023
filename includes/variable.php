<?php
$mdp = 'toto';
$description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam.';

$beanie1 = new Beanie();
$beanie1->setName("bonnet en laine");
$beanie1->setPrice(10);
$beanie1->setDescription($description);
$beanie1->setImage("img/bonnet_laine.jpg");
$beanie1->addMaterial(Beanie::MATERIAL_WOOL);
$beanie1->addMaterial(Beanie::MATERIAL_COTTON);
$beanie1->addSize("S");
$beanie1->setId(1);

$beanie2 = new Beanie();
$beanie2->setName("bonnet en laine bio");
$beanie2->setPrice(14);
$beanie2->setDescription($description);
$beanie2->setImage("img/bonnet_laine_bio.jpg");
$beanie2->addMaterial(Beanie::MATERIAL_WOOL);
$beanie2->addMaterial(Beanie::MATERIAL_SILK);
$beanie2->addSize("M");
$beanie2->addSize("S");
$beanie2->setId(2);

$beanie3 = new Beanie();
$beanie3->setName("bonnet en laine et cachemire");
$beanie3->setPrice(20);
$beanie3->setDescription($description);
$beanie3->setImage("img/bonnet_laine_cachemire.jpg");
$beanie3->addMaterial(Beanie::MATERIAL_WOOL);
$beanie3->addMaterial(Beanie::MATERIAL_CASHMERE);
$beanie3->addSize("L");
$beanie3->addSize("XL");
$beanie3->setId(3);

$beanie4 = new Beanie();
$beanie4->setName("bonnet arc en ciel");
$beanie4->setPrice(12);
$beanie4->setDescription($description);
$beanie4->setImage("img/bonnet_arc_en_ciel.jpg");
$beanie4->addMaterial(Beanie::MATERIAL_COTTON);
$beanie4->addMaterial(Beanie::MATERIAL_SILK);
$beanie4->addSize("XL");
$beanie4->addSize("S");
$beanie4->setId(4);

$mesProduits = [
    1 => $beanie1,
    2 => $beanie2,
    3 => $beanie3,
    4 => $beanie4,
];
?>