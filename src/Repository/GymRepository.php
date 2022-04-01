<?php

namespace App\Repository;

use App\Entity\Gym;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gym|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gym|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gym[]    findAll()
 * @method Gym[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GymRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gym::class);
    }

    // /**
    //  * @return Gym[] Returns an array of Gym objects
    //  */
    
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /**
     * @return Collection<int, Route>
     */
    public function findAllRoutesClosed($value): Collection
    {
        // $results = $this->createQueryBuilder('g')
        //     ->leftJoin('g.routes', 'r')
        //     ->andWhere('r.opened = 0')
        //     ->andWhere('g.id = :gymId')
        //     ->setParameter('gymId', $value)
        //     ->getQuery()
        //     ->getResult();

        // $results = $this->createQueryBuilder->select('r')
        //     ->from('Routes', 'r')
        //     ->where('r.id = ?1')
        //     ->orderBy('u.name', 'ASC');
         
        // dd($results);

        // return $results[0]->getRoutes();
    }
}
