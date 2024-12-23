@extends('admin.admin')

@section('title', $property->exists ? "Editer un bien" : "Créer un bien")

@section('content')

    <h1>@yield('title')</h1>

    <form  class="vstack gap-2" action="{{route($property->exists ? 'admin.property.update' : 'admin.property.store', $property)}}" method="post"></form>

        @csrf
        @method($property->exists ? 'put' : 'post')

        
        <div class="row">
                @include('shared.input', ['class' => 'col', 'label' => 'Titre', 'name' => 'title', 'value' => $property->title])

            <div class="col row">
                @include('shared.input', ['class' => 'col', 'name' => 'surface', 'value' => $property->surface])
                @include('shared.input', ['class' => 'col', 'name' => 'price', 'label' => 'Prix', 'value' => $property->price])

            </div>
        </div>
                @include('shared.input', ['type' => 'textarea', 'name' => 'description', 'value' => $property->description])

            <div class="row">

                @include('shared.input', ['class' => 'col', 'name' => 'rooms', 'label' => 'Pièces', 'value' => $property->rooms])
                @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'label' => 'Chambres', 'value' => $property->bedrooms])
                @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'label' => 'Etages', 'value' => $property->floor])

            </div>
            <div class="row">

                @include('shared.input', ['class' => 'col', 'name' => 'adress', 'label' => 'Adresse', 'value' => $property->adress])
                @include('shared.input', ['class' => 'col', 'name' => 'city', 'label' => 'Chambres', 'value' => $property->city])
                @include('shared.input', ['class' => 'col', 'name' => 'postal_code', 'label' => 'Code Postal', 'value' => $property->postal_code])
            </div>

            @include('shared.checkbox', ['name' => 'sold', 'label' => 'Vendu', 'value' => $property->sold])






        <div>
            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

@endsection