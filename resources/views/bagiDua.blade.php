
@extends('layouts.app')

    @section('header')
        {{ __('Metode Bagi Dua') }}
    @endsection

    @section('content')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table my-4">
                        <div class="card-body p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Metode Bagi Dua</h6>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">Iterasi</th>
                                        <th class="text-center">X<small>r</small></th>
                                        <th class="text-center">| X<small>r+10</small> - X<small>r</small> |</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                        $eps = 0.000001;
                                        $x0 = 3.2;
                                        $x1 = 4;
                                        $x = $x0;
                                        $x_prev = 0;
                                        function f($x)
                                        {
                                            return log($x) + ($x - 5);
                                        }
                                    @endphp
                                    @while (abs($x - $x_prev) >= $eps)
                                        @php $x_prev = $x1; @endphp
                                        @php $x = $x - (f($x)*($x1-$x0)/(f($x1)-f($x0))); @endphp
                                        @php $x0 = $x1; @endphp
                                        @php $x1 = $x; @endphp
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ number_format($x_prev, 6) }}</td>
                                            <td class="text-center">{{ number_format($x_prev - $x, 6) }}</td>
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
