@extends('layouts.master')
@section('content')
<div class="h-screen">
    <div class="mt-12 ml-12">
        @livewire('button-back')
    </div>
    <h1 class="text-center mt-12 text-4xl text-gray-300 font-semibold ">NOS PETITIONS</h1>
    <div class="grid grid-cols-3 gap-4 mx-12 mt-24 mb-12">
        @foreach($petitions as $petition)
        <div class="hover:bg-gray-800 shadow hover:shadow-red-600 hover:shadow-md border border-1 px-3">
            <h2 class="text-white">{{ $petition->title }}</h2>
            <div class="my-1.5">
                <a class="hover:bg-cyan-400 hover:text-black text-white bg-blue-perso px-1 py-1 rounded" href="{{ route('petitions.create', $petition) }}">Aller voter</a>
            </div>
            <div class="text-gray-200">
                @if($petition->signatures->count() > 0)
                    <p>Nombre de votants : <span>{{ $petition->signatures->count() }}</span> </p>
                    <p>Oui :  <span class="{{ (($petition->signatures->where('response_id', 1)->count() * 100) / $petition->signatures->count()) > 49 ? 'text-red-600' : 'text-blue-600' }}">
                        {{ round( ($petition->signatures->where('response_id', 1)->count() * 100) / $petition->signatures->count() ) }} %</span></p>
                    <p>Non : <span class="{{ (($petition->signatures->where('response_id', 2)->count() * 100) / $petition->signatures->count()) > 49 ? 'text-red-600' : 'text-blue-600' }}">
                        {{ round( ($petition->signatures->where('response_id', 2)->count() * 100) / $petition->signatures->count() ) }} %</span></p>
                    <p>NSP : <span class="{{ (($petition->signatures->where('response_id', 3)->count() * 100) / $petition->signatures->count()) > 49 ? 'text-red-600' : 'text-blue-600' }}">
                        {{ round( ($petition->signatures->where('response_id', 3)->count() * 100) / $petition->signatures->count() ) }} %</span></p>
                @endif 
            </div>   
        </div>
        @endforeach
        {{ $petitions->links() }}
    </div>
</div>
 
@endsection