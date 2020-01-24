@extends('layouts.base')
@section('mangalist')
    @include('components.header')
        <div class="mangalist-container flex-grow-1">
            <table class="table list-table">
                <thead class='thead-dark'>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">thumb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publish</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Votes</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mangalist as $manga)
                        <tr>
                        <th scope="row">{{ $manga['id'] }}</th>
                            <td>{{ $manga['preview'] }}</td>
                            <td>{{ $manga['title'] }}</td>
                            <td>{{ $manga['autor'] }}</td>
                            <td>{{ $manga['publication'] }}</td>
                            <td>{{ $manga['rating'] }}</td>
                            <td>{{ $manga['votes'] }}</td>
                        </tr>
                    @endforeach
                 
                  </tbody>
              </table>
              {{ $mangalist->links() }}
        </div>
    @include('components.footer')
@endsection