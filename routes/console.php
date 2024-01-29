<?php

use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\DatabaseNotification;
use Filament\Notifications\Notification;
use Filament\Support\Colors\Color;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Rupadana\FilamentAnnounce\Announce;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('test', function () {

    /**
     * App\Models\User $user
     */
    $user = User::find(1);

    Announce::make()
        ->title('Big News!')
        ->icon('heroicon-o-megaphone')
        ->body('Filament can now show very important message to all or specific users!')
        ->color('52,144,220')
        ->duration(2000)
        ->announceTo($user);
});
