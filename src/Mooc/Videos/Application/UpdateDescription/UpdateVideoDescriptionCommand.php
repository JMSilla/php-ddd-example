<?php

declare(strict_types = 1);

namespace CodelyTv\Mooc\Videos\Application\UpdateDescription;

use CodelyTv\Shared\Domain\Bus\Command\Command;
use CodelyTv\Shared\Domain\ValueObject\Uuid;

final class UpdateVideoDescriptionCommand extends Command
{
    private $id;
    private $description;

    public function __construct(Uuid $commandId, string $id, string $description) {
        parent::__construct($commandId);
        
        $this->id = $id;
        $this->description = $description;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function description(): string
    {
        return $this->description;
    }
}
?>