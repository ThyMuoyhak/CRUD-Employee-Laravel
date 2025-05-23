@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-8">Report: {{ $report->name }}</h1>

    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <p><strong>Generated By:</strong> {{ $report->generated_by }}</p>
        <p><strong>Date Generated:</strong> {{ $report->created_at->format('M d, Y') }}</p>
        <p><strong>Description:</strong> {{ $report->description }}</p>
    </div>
@endsection
