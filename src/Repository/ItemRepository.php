<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Item|null find($id, $lockMode = null, $lockVersion = null)
 * @method Item|null findOneBy(array $criteria, array $orderBy = null)
 * @method Item[]    findAll()
 * @method Item[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Item::class);
    }

    /**
     * @return Item[] Returns an array of Item objects
     * @throws \Doctrine\DBAL\Driver\Exception
     * @throws Exception
     */
    public function getItems(): array
    {
        //$sql = ITEM_QUERY;
        $sql = 'SELECT * FROM non_inventory_items';
        //$sql = 'SELECT * FROM item';
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAllAssociative();
        dump($result);
        return $result;

//        // dsql
//        $query = $this->getEntityManager()->createQuery('SELECT i FROM App\Entity\Item i');
//        dump($query->getResult());
//        return $query->getResult();

        //        $db = $this->createQueryBuilder('i');
//        $db
//            ->select('i.id', 'i.atccode', 'i.version', 'i.name')
//        ;
//        dump($db->getQuery()->getResult());
//        return $db->getQuery()->getResult();


//        return $this->createQueryBuilder('i')
//            ->getQuery()
//            ->getResult()
//        ;
    }

}
