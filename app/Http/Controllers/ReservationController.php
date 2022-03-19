<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reservation\BookReservationRequest;
use App\Service\ReservationService;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    private ReservationService $reservationService;

    public function __construct()
    {
        $this->reservationService = new ReservationService();
    }

    public function reserveBooks(BookReservationRequest $request): JsonResponse
    {
        $reservation = $this->reservationService->doTheReservation(
            $request->book_id,
            $request->email,
            $request->quantity
        );

        return new JsonResponse(
            [
                'message' => 'Book reserved',
                'data' => $reservation
            ],
        200);
    }
}
