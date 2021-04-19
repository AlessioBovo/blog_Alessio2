<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Articles;
use App\Entity\Comments;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 25; $i++) {
            $article = new Articles();
            $article
                ->setTitle('Article ' . $i)
                ->setAuthor('SensioLabs')
                ->setDate(new DateTime('now - ' . $i . ' hour'))
                ->setDescription('Ceci est une description')
                ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis blandit condimentum ex, ac ornare ante tincidunt in. Pellentesque bibendum elementum erat, eu suscipit nisl faucibus at. Ut non feugiat est, quis pellentesque mauris. Morbi ut ornare ante. Quisque imperdiet, ligula et dapibus consequat, quam velit dictum quam, sed laoreet ligula ante ac velit. Phasellus aliquam porttitor metus ac hendrerit. Maecenas pharetra convallis massa ut pellentesque. Maecenas id feugiat elit, nec sollicitudin nibh. Donec porta augue tincidunt accumsan finibus. Integer at tortor efficitur, pulvinar sapien in, faucibus nibh. Mauris elementum lectus id enim porttitor, in rhoncus quam porttitor. Mauris at ligula posuere, vehicula neque mattis, venenatis odio. Vestibulum suscipit lacus ac lobortis tristique. Sed vitae risus id metus egestas dapibus.

Morbi ullamcorper vestibulum elit, quis sodales elit imperdiet id. Integer porta pretium elit, vel finibus odio consectetur convallis. Quisque laoreet tellus quis sapien egestas vehicula. Proin a nisi at metus dapibus mattis eu sit amet mauris. Aliquam congue ac lorem a vehicula. Aenean faucibus convallis commodo. Aliquam erat volutpat. Sed vitae metus at massa molestie convallis et in lorem. Donec quis est hendrerit, suscipit risus at, malesuada nisi. Phasellus faucibus feugiat lorem. Maecenas sagittis, nibh mattis fringilla iaculis, nisi dolor condimentum nunc, et gravida risus velit eu elit.')
                ->setCategory('Developpement');

            $manager->persist($article);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
