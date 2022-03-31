@extends('layouts.blanc')

@section('contenu')

<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-card mdl-shadow--2dp">

                <h2 class="text-center mb-30">Liste des projets</h2>

                <a href="{{ route('projet.create') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-plus mr-5"></i> Ajouter un projet</a>


                <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                    <thead class="thead-inverse|thead-default">
                        <tr>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Platforme</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Images</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projets as $projet)

                        <tr>
                            <td class="text-center" scope="row"> {{ $projet->nom }} </td>
                            <td class="text-center" scope="row"> {{ $projet->platforme }} </td>
                            <td class="text-center" scope="row"> {{ $projet->client }} </td>
                            <td class="text-center" scope="row"> {{ Str::limit($projet->description, 50, '...') }} </td>
                            <td class="text-center" scope="row"> {{ $projet->type }} </td>
                            <td class="text-center" scope="row"> {{ count($projet->images) }} </td>
                            <td class="text-center">
                                <a href="{{ route('projet.edit', $projet->id) }}" class="mr-5 text-primary">edit</a>
                                <a href="" class="text-danger">del</a>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Aucun projet trouvé</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</section>

@endsection
