<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class StatusType extends Enum
{
    const NotAvailable = 0;
    const EmailNotFound = 1;
    const LangNotFound = 2;
    const NotProcessed = 3;
    const Processed = 4;
    const NotSend = 5;
    const SentTo = 6;
    const Open = 7;
}
