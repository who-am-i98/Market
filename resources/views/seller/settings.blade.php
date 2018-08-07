@extends('seller.master')

@section('title')
Настройки
@stop

@section('content')

<div class="container">
	<section class="content-header">
    <h3>
        <i class="fa fa-gears" style="margin-right: 10px;"></i> Настройки<small style="margin-left: 10px;">Информация об организации</small>
    </h3>
    </section>
	<br>
	@include('layouts._flash')
	{!! Form::open(['route' => 'settings.store', 'method' => 'POST', 'files' => 'true']) !!}

	{{ Form::label('image', 'Аватар поставщика:') }}
	{{ Form::file('image',['class' => 'form-control ig']) }}

	{{ Form::label('name','Название поставщика:') }}
	{{ Form::text('name', null, ['class' => 'form-control','placeholder' => 'Введите имя поставщика']) }}

	{{ Form::label('owner','Владелец поставщика:') }}
	{{ Form::text('owner', null, ['class' => 'form-control','placeholder' => 'Введите имя владелеца поставщика']) }}

	{{ Form::label('website','Вебсайт поставщика:') }}
	{{ Form::text('website', null, ['class' => 'form-control','placeholder' => 'Введите вебсайт поставщика']) }}

	{{ Form::label('address','Адрес поставщика:') }}
	{{ Form::text('address', null, ['class' => 'form-control','placeholder' => 'Введите адрес поставщика']) }}

	{{ Form::label('info','Описание про поставщика:') }}
	{{ Form::textarea('info', null, ['class' => 'form-control','placeholder' => 'Введите описание о поставщике']) }}

	<div class="container">
		<h3>Контактное лицо:</h3>
		<div class="row">
			<div class="col-md-3">
				{{ Form::label('fio','ФИО контактного лица:') }}
				{{ Form::text('fio', null, ['class' => 'form-control','placeholder' => 'Введите ФИО контактного лица']) }}
			</div>
			<div class="col-md-3">
				{{ Form::label('email',' E-mail:') }}
				{{ Form::text('email', null, ['class' => 'form-control','placeholder' => 'Введите e-mail контактного лица']) }}
			</div>
			<div class="col-md-3">
				{{ Form::label('phoneNumber','Телефон:') }}
				{{ Form::text('phoneNumber', null, ['class' => 'form-control','placeholder' => 'Введите телефон контактного лица']) }}
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="inl">
			{{ Form::submit('Сохранить', ['class' => 'btn btn-primary sav']) }}
			{!! Form::close() !!}
			{!! Form::open(['route' => ['settings.edit', 'cust_setting' => Auth::user()->id],'method' => 'GET']) !!}
				{{ Form::submit('Изменить',['class' => 'btn btn-success']) }}
			{!! Form::close() !!}
		</div>
	</div>
</div><br>
<style>
	.inl {
		display: inline-flex;
	}
	.del {
		background-color: red;
		color: white;
	}
	.sav {
		background-color: blue;
		color: white;
	}
</style>
@stop
