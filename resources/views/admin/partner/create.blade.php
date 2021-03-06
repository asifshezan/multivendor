@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Partner</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Partner</a></li>
                    <li class="breadcrumb-item active">Create Partner</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary d-flex justify-content-between">
                <h5 class="my-0 text-primary align-middle"><i class="mdi mdi-bullseye-arrow me-3"></i>Create Partner </h5>
                <a href="{{ route('partner.index') }}" class="btn btn-sm btn-primary waves-effect waves-light">
                    <i class="bx bx-list-plus font-size-20 align-middle me-2"></i> All Partner
                </a>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 my-2">
                                <label for="partner_title">Title</label>
                                <input class="form-control" type="text" name="partner_title" value="{{ old('partner_title') }}">
                                @error('partner_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="partner_url">Url</label>
                                <input class="form-control" type="url" name="partner_url" value="{{ old('partner_url') }}">
                                @error('partner_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <label for="partner_order">Order Level</label>
                                <input class="form-control" type="number" name="partner_order" value="{{ old('partner_order') }}">
                                @error('partner_order')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        <div class="col-md-6 my-2">
                            <label for="partner_logo">Partner Logo</label>
                            <input id="partner_image_input" class="form-control" type="file" name="partner_logo" value="{{ old('partner_logo') }}">
                            @error('partner_logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 my-3 d-flex">
                            <img id="partner_image_preview" style="width: 70px" class="m-auto" src="{{ asset('uploads/no_image.png') }}" alt="Category Image">
                        </div>

                        <div class="col-md-2 mt-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bxs-save font-size-16 align-middle me-2"></i> Partner Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Custom Image Upload Preview --}}
<script type="text/javascript">
    // Category Image
    $('#partner_image_input').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => {
        $('#partner_image_preview').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection
