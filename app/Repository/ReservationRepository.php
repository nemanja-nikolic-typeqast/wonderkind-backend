<?php

namespace App\Repository;

use App\Models\Reservation;

class ReservationRepository
{

    public function findOneById(int $id): Reservation
    {
        return Reservation::findOrFail($id);
    }

    public function saveReservation(Reservation $reservation): Reservation
    {
        $reservation->save();
        return $reservation;
    }

    public function saveRaw(int $bookId, string $email, int $quantity, $id = null): Reservation
    {
        $reservation = new Reservation();

        if($id){
            $reservation = $this->findOneById($id);
        }

        $reservation->book_id = $bookId;
        $reservation->email = $email;
        $reservation->quantity = $quantity;

        return $this->saveReservation($reservation);
    }
}
