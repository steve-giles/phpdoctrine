<?php

namespace App\Repository;

use App\Entity\Orders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Orders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Orders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Orders[]    findAll()
 * @method Orders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 *
 */
class OrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        //parent::__construct($registry, Orders::class);
        parent::__construct($registry, Orders::class);
    }

    public function findBySubTotal($value)
    {
        $db = $this->createQueryBuilder('p');

        $db
            ->select('p.id', 'p.total', 'p.subTotal')
            ;

        dump($db->getQuery()->getResult());

        return $db->getQuery()->getResult();
    }

    /**
     * @return User[]
     */
    public function findActiveUsers(): array
    {
        $db = $this->createQueryBuilder('o');
        //$db = $this->queryBuilder();

        // ->select('p.id', 'p.total', 'p.subTotal', 'p.createdAt')

        $db
            ->select('o')
        ;

        $result = $db->getQuery()->getResult();

        dump($result[0]->getOrderStatus());

        return $result;
    }

    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
