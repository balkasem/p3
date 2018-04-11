@extends('layouts.master')

@section('title')
    <h2 class="text-center">Bill Splitter</h2>
@endsection

@section('errors')
    <div class="row">
        <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-4 col-lg-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('body')
    <form method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-4 col-lg-8">
                <div class="input-group">
                    <lable> Split how many ways? </lable>
                    <input type="number"
                           name="manyWays"
                           value="{{ ($manyWays) ? $manyWays : old('manyWays') }}">
                </div>
                <br>
                <div class="input-group">
                    <lable> How much was the tab? </lable>
                    <input type="number"
                           name="tabNum"
                           value="{{ ($tabNum) ? $tabNum : old('tabNum') }}"
                           >
                </div>
                <br>
                <div class="input-group">
                    <lable> How was the service? </lable>
                    <select name="serviceQuality" class="">
                        <option value="15" {{ (old('serviceQuality') == '15' || $serviceQuality == '15') ? 'selected' : ''}}>Fine</option>
                        <option value="18" {{ (old('serviceQuality') == '18' || $serviceQuality == '18') ? 'selected' : ''}}>Good</option>
                        <option value="20" {{ (old('serviceQuality') == '20' || $serviceQuality == '20') ? 'selected' : ''}}>Amazing</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-4 col-lg-3">
                <p class="text-center">
                    <br><label class="checkbox-inline"><input type="checkbox"
                                                              name="round"
                                {{ (old('round') || $round) ? 'checked' : '' }}
                        >Round Up</label>
                    <br>
                    <br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Calculate">
                </p>
            </div>
        </div>
    </form>


    <div class="row">
        <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-3 col-xs-12 col-sm-8 col-md-8 col-lg-6">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">
                    <div class="well">
                        <p>
                            <label>Everyone Owes: ${{ $tabNumPp}}   </label>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endpush