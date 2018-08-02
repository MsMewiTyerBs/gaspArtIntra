<?php

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;


class ClientsRepository extends EntityRepository
{



    /**
     * @param $letter
     * @return array
     */
    public function RechercheParLettre($letter)
    {

        // $qb = $this  ******* Creation d'une requête normale ********
        //     ->CreateQueryBuilder('A')
        //     ->Where('A.nom LIKE :masque')
        //     ->setParameter('masque', $letter.'%')
        // ;
        //  return $qb->getQuery()->getResult();

        // Définition de la requête SQL

        $dql = 'SELECT clt FROM AppBundle:Clients clt WHERE clt.nom LIKE :masque';

        // Préparation de la requête via l'Entity Manager
        $query = $this->getEntityManager()->createQuery($dql);

        // Récupération du paramètre et insertion dans la requête sql
        $query->setParameter('masque', $letter.'%');

        // Execution de la requête et retour des résultats
        return $query->getResult();

    }

}
