<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;
use DB;

class MonthlyUsersChart
{
    protected $chart;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function build()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count', 'month_name');

        return $this->chart->pieChart()
            ->setTitle('New Users - '.date('Y'))
            ->addData($users->values()->toArray())
            ->setLabels($users->keys()->toArray());
    }
}
