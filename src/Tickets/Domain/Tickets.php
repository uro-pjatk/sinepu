<?php
namespace Tickets\Domain;

use Ramsey\Uuid\UuidInterface;

interface Tickets
{
    /**
     * @param Ticket $ticket
     *
     * @return boolean
     */
    public function insert(Ticket $ticket);


    /**
     * @param Ticket $ticket
     * @return mixed
     */
    public function update(Ticket $ticket);

    /**
     * @param UuidInterface $uuid
     *
     * @return Ticket
     */
    public function findOneByUuid(UuidInterface $uuid);

    /**
     * @return Ticket[]|array
     */
    public function findAll();

    public function findAllWithStatus(String $status);
}

