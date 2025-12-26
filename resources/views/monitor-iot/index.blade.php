@extends('layouts.app')

@section('content')
<h3 class="mb-4">📡 Monitoring IoT Per Kamar Pasien</h3>

<div class="row g-4">
@foreach($rooms as $room)
@php
    $sensor = $room->sensors->first();
@endphp

<div class="col-md-4">
    <div class="card shadow border-0">
        <div class="card-body">
            <h5 class="fw-bold">{{ $room->nama }}</h5>

            @if($sensor)
                <p>🌡 Suhu:
                    <b class="{{ $sensor->temperature >= 38 ? 'text-danger' : 'text-success' }}">
                        {{ $sensor->temperature }}°C
                    </b>
                </p>

                <p>🔥 Api:
                    <span class="badge {{ $sensor->fire ? 'bg-danger' : 'bg-success' }}">
                        {{ $sensor->fire ? 'BAHAYA' : 'AMAN' }}
                    </span>
                </p>

                <small class="text-muted">
                    Update: {{ $sensor->created_at->diffForHumans() }}
                </small>
            @else
                <p class="text-muted">Belum ada data sensor</p>
            @endif

            <a href="#" class="btn btn-outline-primary btn-sm mt-3">
                Lihat Detail
            </a>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
