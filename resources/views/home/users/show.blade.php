@extends('home.layouts.main', ["title" => 'Profile'])

@section('content')

<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">{{ trans('profile.details') }}</h3>
        </div>
        <a href="#" class="btn btn-sm btn-primary align-self-center">{{ trans('button.profile.edit') }}</a>   
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">{{ trans('form.last_name') }}</label>
            <div class="col-lg-8">                    
                <span class=" fs-6 text-gray-800">{{ $user->last_name }}</span>                
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">{{ trans('form.first_name') }}</label>
            <div class="col-lg-8">                    
                <span class=" fs-6 text-gray-800">{{ $user->first_name }}</span>                
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">{{  trans('form.company')  }}</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{ $organization->title  }}</span>                         
            </div>
        </div>
        <div class="row mb-7">
           <label class="col-lg-4 fw-semibold text-muted">
                {{ trans('form.phone') }}
            </label>
            <div class="col-lg-8 d-flex align-items-center">
                <span class="fs-6 text-gray-800 me-2">{{ $user->phone  }}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">{{ trans('form.email') }}</label>
            <div class="col-lg-8">
                <a href="#" class="fs-6 text-gray-800 text-hover-primary">{{ $organization->email  }}</a>                         
            </div>
        </div>
        <div class="row mb-7">
             <label class="col-lg-4 fw-semibold text-muted">
                {{ trans('form.city') }}
            </label>
            <div class="col-lg-8">
                <span class="fs-6 text-gray-800">{{ $organization->city  }}</span> 
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">{{ trans('form.address') }}</label>
            <div class="col-lg-8">
                <span class="   fs-6 text-gray-800">{{ $organization->address  }}</span>  
            </div>
        </div>
    </div>
</div>
@endsection