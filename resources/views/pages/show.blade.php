@extends('layouts.app')
@section('title', '显示数据')

@section('content')
<?php
$i = 0;
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">姓名</th>
      <th scope="col">电话</th>
      <th scope="col">性别</th>
      <th scope="col">问题2</th>
      <th scope="col">问题3</th>
      <th scope="col">问题4</th>
      <th scope="col">问题5</th>
      <th scope="col">问题6</th>
      <th scope="col">问题7</th>
      <th scope="col">问题8</th>
      <th scope="col">问题9</th>
      <th scope="col">问题10</th>
      <th scope="col">问题11</th>
      <th scope="col">问题12</th>
      <th scope="col">问题13</th>
      <th scope="col">问题14</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $answer_lists as $list)
    <tr>
      <th scope="row">{{$list->id}}</th>
      <td>{{$list->gender}}</td>
      <td>{{$list->userinfo->phone}}</td>
      <td>{{$list->denger}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



