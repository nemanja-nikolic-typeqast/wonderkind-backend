<?php

namespace App\Service;

use App\Models\Reservation;
use App\Repository\BookRepository;
use App\Repository\ReservationRepository;

class ReservationService
{
    private BookRepository $bookRepository;
    private ReservationRepository $reservationRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
        $this->reservationRepository = new ReservationRepository();
    }


    /**
     * @throws \Exception
     */
    public function doTheReservation(int $book_id, string $email, int $quantity): Reservation
    {
        $book = $this->bookRepository->findOneById($book_id);

        if($quantity > $book->amount){
            throw new \Exception("Requested amount $quantity is greater then in the library.");
        }

        return $this->reservationRepository->saveRaw(
            $book_id,
            $email,
            $quantity
        );
    }
}
