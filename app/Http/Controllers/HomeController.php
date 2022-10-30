<?php

namespace App\Http\Controllers;

use App\Charts\BarChart;
use App\Charts\LineChart;
use App\Charts\PieChart;
use App\Models\Review;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        $user = Auth::user();
        $bar = Wisata::groupBy('categorie')->select('categorie', DB::raw('count(*) as total'))->get();
        $barData = Wisata::groupBy('categorie')->select('categorie', DB::raw('count(*) as total'))->get();

        foreach ($bar as $rowLabel ) {
            $label[] = $rowLabel->categorie;
        }

        foreach($barData as $rowData){
            $data[] = $rowData->total;
        }

        $review = Review::groupBy('id_wisata')->select('id_wisata', DB::raw('count(*) as total'))->get();
        foreach ($review as $rowRevLabel) {
            $revLabel[] = $rowRevLabel->wisata->title;
        }
        foreach ($review as $rowRevData) {
            $revData[] = $rowRevData->total;
        }

        $labelBulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

        for($bulan=1;$bulan < 13;$bulan++){
            $chartuser     = collect(DB::SELECT("SELECT count(id) AS jumlah from users where month(created_at)='$bulan'"))->first();
            $jumlah_user[] = $chartuser->jumlah;
        }

        for($bulan=1;$bulan < 13;$bulan++){
            $chartuser     = collect(DB::SELECT("SELECT count(id_mitra) AS jumlah from mitras where month(created_at)='$bulan'"))->first();
            $jumlah_mitra[] = $chartuser->jumlah;
        }

        $barChart = new BarChart();
        $barChart->labels($label);
        $barChart->dataset('Data Wisata', 'bar', $data)->options([
            'backgroundColor' => [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
            ],
            'scales' => [
                    'yAxes' => [
                    'ticks' => [
                        'min' => 1500,
                        'max' => 2100
                    ]
                    ]
                ]

            ],true,
        );

        $pieChart = new PieChart();
        $pieChart->labels($revLabel);
        $pieChart->dataset('Data Wisata', 'pie', $revData)->options([
            'backgroundColor' => [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
            ],
        ],true,);


        $lineChart = new LineChart();
        $lineChart->labels($labelBulan);
        $lineChart->dataset('Data User', 'line', $jumlah_user)
            ->color("rgb(255, 159, 64)")
            ->backgroundcolor("rgb(54, 162, 235)")
            ->fill(false);
        $lineChart->dataset('Data Mitra ', 'line', $jumlah_mitra)
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)")
            ->fill(false);

        return view('adminHome')->with([
    		'title' => 'Data User',
            'data' => $user,
            'barChart' => $barChart,
            'pieChart' => $pieChart,
            'lineChart' => $lineChart,
    	]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function adminHome()
    // {
    //     return view('adminHome');
    // }
    public function DataUser()
    {
        return view('DataUser');
    }
}
