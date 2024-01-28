<?php

namespace App\Filament\Resources\ExampleResource\Pages;

use App\Filament\Resources\ExampleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Infolist;
use Rupadana\FilamentSwiper\Infolists\Components\SwiperImageEntry;

class ViewExample extends ViewRecord
{
    protected static string $resource = ExampleResource::class;

    protected static string $view = 'infolist-test';

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }



    public function productInfolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->record($this->getRecord())
            ->schema([
                SwiperImageEntry::make('images')
                    ->navigation(false)
                    ->pagination()
                    ->paginationType(SwiperImageEntry::BULLETS)
                    ->paginationClickable()
                    ->paginationDynamicBullets()
                    ->paginationHideOnClick()
                    ->paginationDynamicMainBullets(2)
                    ->scrollbar()
                    ->scrollbarDragSize(100)
                    ->scrollbarDraggable()
                    ->scrollbarSnapOnRelease()
                    ->scrollbarHide(false)
                    ->height(300)
                    ->autoplay()
                    ->effect(SwiperImageEntry::CARDS_EFFECT)
                    ->cardsPerSlideOffset(2)
                    ->autoplayDelay(500)
                    ->centeredSlides()
                    ->slidesPerView(2)
            ]);
    }
}
