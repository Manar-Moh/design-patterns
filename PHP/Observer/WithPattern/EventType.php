<?php
namespace PHP\Observer\WithPattern;
enum EventType: string
{
    case NEW_PRODUCT = 'new_product';
    case NEW_OFFER = 'new_offer';
    case JOB_OPENING = 'job_opening';

    public static function getAll(): array
    {
        return [
            self::NEW_PRODUCT,
            self::NEW_OFFER,
            self::JOB_OPENING,
        ];
    }
}
