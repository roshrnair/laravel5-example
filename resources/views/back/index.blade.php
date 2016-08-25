@extends('back.template')

@section('main')

	@include('back.partials.entete', ['title' => trans('back/admin.dashboard'), 'icone' => 'dashboard', 'fil' => trans('back/admin.dashboard')])

	<div class="row">

		@include('back/partials/pannel', ['color' => 'primary', 'icone' => 'envelope', 'nbr' => $nbrMessages, 'name' => trans('back/admin.new-messages'), 'url' => 'contact', 'total' => trans('back/admin.messages')])

		@include('back/partials/pannel', ['color' => 'green', 'icone' => 'user', 'nbr' => $nbrUsers, 'name' => trans('back/admin.new-registers'), 'url' => 'user', 'total' => trans('back/admin.users')])

	</div>

@stop


