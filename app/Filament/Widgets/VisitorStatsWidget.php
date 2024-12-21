<?php

namespace App\Filament\Widgets;

use App\Models\Visits;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class VisitorStatsWidget extends BaseWidget
{
    protected static string $view = 'filament.widgets.visitor-stats';

    public function getStats(): array
    {
        // Get total visits
        $totalVisits = Visits::count();

        $visitsByCountry = Visits::select('country', DB::raw('count(*) as count'))
            ->groupBy('country')
            ->orderByDesc('count')
            ->limit(5)
            ->get();

        return [
            'total_visits' => $totalVisits,
            'visits_by_country' => $visitsByCountry,
        ];
    }
}
