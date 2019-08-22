@extends('layouts.app')
@section('content')
@include('includes.header')
<section class="section is-paddingless">
    <div class="container ">
        <div class="columns is-centered">
            <div class="column is-half">
                <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                    <!-- Affichage du tableau de jeu à partir de la matrice créée précédemment -->
                    @foreach (range(1, $rowGrid) as $row)
                    <tbody>
                        <tr>
                            @foreach (range(1, $colGrid) as $col)
                                <td class="{{ $board[$row][$col] }}">{{ $row }}-{{ $col }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                    @endforeach
                </table>


            </div>
        </div>

    </div>
</section>
@stop
