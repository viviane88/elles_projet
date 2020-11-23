<?php

namespace App\Repository;

use App\Entity\Jobs;
use App\Entity\SearchJob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jobs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jobs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jobs[]    findAll()
 * @method Jobs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jobs::class);
    }

    // /**
    //  * @return Query
    //  */
    public function findAllVisibleQuery (SearchJob $search)
    {
        return $this->createQueryBuilder('s')
        
        ->orwhere('s.location = :location')
        ->setParameter('location', $search->getLocation() )
        ->orwhere('s.company = :company')
        ->setParameter('company', $search->getCompany() );
    }

    public function findThree()
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.id > :val')
            ->setParameter('val', '0')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Jobs
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
