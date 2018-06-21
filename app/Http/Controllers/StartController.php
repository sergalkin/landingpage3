<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            array(
                'title' => 'Test title',
                'url' => 'http://test-yrl.com'
            ),
            array(
                'title' => 'youtube',
                'url' => 'https://youtube.com'
            )
        ];

        return view('start', [
            'url_data' => $url_data
        ]);

    }

    public function getJson()
    {
        return [
            array(
                'title' => 'Google',
                'url' => 'https://google.com'
            ),
            array(
                'title' => 'Yandex',
                'url' => 'http://ya.ru'
            )
        ];
    }

    public function chartData()
    {
        return [
            'labels' => ['March', 'April', 'May', 'June'],
            'datasets' => array([
                'label' => 'Sales',
                'backgroundColor' => ['#D01919', '#F26202', '#EAAE00', '#B5CC18'],
                'data' => [15000, 5000, 10000, 30000]
            ])
        ];
    }

    public function randomChart()
    {
        return [
            'labels' => ['March', 'April', 'May', 'June'],
            'datasets' => array(
                [
                    'label' => 'Gold',
                    'backgroundColor' => ['#16AB39'],
                    'data' => [rand(0, 15000), rand(0, 5000), rand(0, 10000), rand(0, 30000)]
                ],
                [
                    'label' => 'Silver',
                    'backgroundColor' => ['#B5CC18'],
                    'data' => [rand(0, 15000), rand(0, 5000), rand(0, 10000), rand(0, 30000)]
                ])
        ];
    }

    public function newEvent(\Illuminate\Http\Request $request)
    {
        $result = $this->chartData();
        if ($request->has('label')) {
            $result['labels'][] = $request->input('label');
            $result['datasets'][0]['data'][] = (integer)$request->input('sale');

            if (filter_var($request->input('realtime'), FILTER_VALIDATE_BOOLEAN)) {
                event(new \App\Events\NewEvent($result));
            }
        }
        return $result;
    }

    public function sendMessage(\Illuminate\Http\Request $request)
    {
        event(new \App\Events\NewMessage($request->input('message')));
    }

    public function sendPrivateMessage(\Illuminate\Http\Request $request)
    {
        \App\Events\PrivateMessage::dispatch($request->all());
        return $request->all();
    }
}
