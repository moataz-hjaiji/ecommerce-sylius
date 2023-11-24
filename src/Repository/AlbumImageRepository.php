<?php

namespace App\Repository;

use App\Entity\AlbumImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AlbumImage>
 *
 * @method AlbumImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method AlbumImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method AlbumImage[]    findAll()
 * @method AlbumImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlbumImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AlbumImage::class);
    }

//    /**
//     * @return AlbumImage[] Returns an array of AlbumImage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AlbumImage
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
