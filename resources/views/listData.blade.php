@extends('layout')

@section('title', 'My List Data')
    
@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">
        Customer List
      </h1>

      
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">E-KTP</th>
            <th scope="col">Mobile</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>001</td>
            <td>327505020990047</td>
            <td>081234567889</td>
            <td>Juminten</td>
            <td>
              <a href="" class="badge badge-success">Edit</a>
              <a href="" class="badge badge-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    
@endsection