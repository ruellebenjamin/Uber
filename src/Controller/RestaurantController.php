<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class RestaurantController extends AbstractController
{
    #[Route('/restaurants', name: 'app_restaurant')]
    public function index(RestaurantRepository $restaurantRepository): JsonResponse
    {
        $restaurants = $restaurantRepository->findAll();

        return $this->json($restaurants);
    }

    #[Route('/restaurants/{id}', name: 'app_restaurant_one')]
    public function get(Restaurant $restaurant)
    {
        return $this->json($restaurant);
    }
}
