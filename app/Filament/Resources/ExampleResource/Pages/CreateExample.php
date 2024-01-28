<?php

namespace App\Filament\Resources\ExampleResource\Pages;

use App\Filament\Resources\ExampleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExample extends CreateRecord
{
    protected static string $resource = ExampleResource::class;
}
