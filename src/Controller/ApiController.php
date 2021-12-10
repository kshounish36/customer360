<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\CustomerVersions;
use App\Repository\CustomerVersionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ApiController extends AbstractController
{
    public function __construct()
    {
//        $tokenVal = md5(1234);
//
//        if($tokenVal === $this->getBearerToken())
//        {
//            return TRUE;
//        }
//        else
//        {
//            header("HTTP/1.1 401 Unauthorized");
//            exit;
//        }
    }

    /**
     * @Route("/api/{id}", name="api")
     */
    //public function index(CustomerVersionsRepository $customerVersionsRepository): Response
    public function index($id='', EntityManagerInterface $em): Response
    {
        $sql = 'SELECT CV.*,C.name AS country_name
        FROM customer_versions AS CV
        LEFT JOIN country AS C ON CV.country_id  = C.id';

        if(!empty($id))
        {
            $sql = $sql.' WHERE CV.id = '.$id;
        }

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();

        if(empty($result))
        {
            return $this->json([
                'customerDetails'   => '',
                'status'            => 0,
            ]);
        }

        return $this->json([
            'customerDetails'   => json_encode($result),
            'status'            => 1,
        ]);
    }

//    public function getCustomerDetails(CustomerVersionsRepository $customerVersionsRepository): Response
//    {
//
//    }

    public function getBearerToken()
    {
        $header     = apache_request_headers();
        $authHeader = '';
        if (isset($header['Authorization']))
        {
            $authHeader = trim($header["Authorization"]);
        }

        // HEADER: Get the access token from the header
        if (!empty($authHeader))
        {
            if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches))
            {
                return $matches[1];
            }
        }
        return null;
    }
}
