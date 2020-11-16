<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use App\Entity\Jobs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
        $jobs = new Jobs();


        $jobs->setTitle('Intitulé du poste'.$i);
        $jobs->setCompany('Nom de l\'entreprise'.$i);
        $jobs->setLocation('Adresse de l\'entreprise'.$i);
        $jobs->setUrl('Site de l\'entreprise'.$i);
        $jobs->setDescription('Occaecat quis mollit qui occaecat eiusmod quis nisi culpa sit adipisicing est est aliquip eu. Voluptate velit dolore cillum id esse do velit do veniam qui duis nisi. Cillum duis elit qui laboris labore dolore laborum sit proident cupidatat sunt est dolor ut. Velit tempor est ad incididunt proident in laborum exercitation esse ad. Anim commodo quis culpa fugiat laboris nulla sint aute veniam. Fugiat eiusmod magna occaecat est.');
       
        $manager->persist($jobs);

    }
    $manager->flush();
    }
    

}
class AppFixturesArticles extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
        $articles = new Articles();


        $articles->setTitle('Intitulé du poste'.$i);
        
        $articles->setDescription('Occaecat quis mollit qui occaecat eiusmod quis nisi culpa sit adipisicing est est aliquip eu. Voluptate velit dolore cillum id esse do velit do veniam qui duis nisi. Cillum duis elit qui laboris labore dolore laborum sit proident cupidatat sunt est dolor ut. Velit tempor est ad incididunt proident in laborum exercitation esse ad. Anim commodo quis culpa fugiat laboris nulla sint aute veniam. Fugiat eiusmod magna occaecat est.');
       
        $manager->persist($articles);

    }
    $manager->flush();
    }
    

}
