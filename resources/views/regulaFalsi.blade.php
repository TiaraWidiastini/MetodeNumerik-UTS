@extends('layouts.app')

    @section('header')
        {{ __('Metode Regula Falsi') }}
    @endsection

    @section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table my-4">
                    <div class="card-body p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Metode Regula Falsi</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">Iterasi</th>
                                        <th class="text-center">a</th>
                                        <th class="text-center">c</th>
                                        <th class="text-center">b</th>
                                        <th class="text-center">f(a)</th>
                                        <th class="text-center">f(c)</th>
                                        <th class="text-center">f(b)</th>
                                        <th class="text-center">Selang Baru</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                        $eps = 0.000001;
                                        $b = 4;
                                        $a = 3.2;
                                    @endphp
                                    @while (!($a - $b) < $eps)
                                        @php
                                            $fa = log($a) + ($a - 5);
                                            $fb = log($b) + ($b - 5);
                                            $c = $b - ($fb * ($b - $a)) / ($fb - $fa);
                                            $fc = log($c) + ($c - 5);
                                            if (abs($fc) < $eps) {
                                                $a = $c;
                                                $b = $c;
                                            } else {
                                                if ($fa * $fc < 0) {
                                                    $b = $c;
                                                } else {
                                                    $a = $c;
                                                }
                                            }
                                        @endphp
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ number_format($a, 6) }}</td>
                                            <td class="text-center">{{ number_format($c, 6) }}</td>
                                            <td class="text-center">{{ number_format($b, 6) }}</td>
                                            <td class="text-center">{{ number_format($fa, 6) }}</td>
                                            <td class="text-center">{{ number_format($fc, 6) }}</td>
                                            <td class="text-center">{{ number_format($fb, 6) }}</td>
                                            @if ($fa * $fc < 0)
                                                <td class="text-center">[a, c]</td>
                                            @else
                                                <td class="text-center">[c, b]</td>
                                            @endif
                                        </tr>
                                    @endwhile
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection