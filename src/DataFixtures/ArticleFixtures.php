<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Articles;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // $product = new Product();


        $manager->flush();
    }
}
