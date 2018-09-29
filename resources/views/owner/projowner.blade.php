@extends('layouts.nav')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- css: text-transform -->
                <div class="card-header"><h2 style="display: inline-block;"><strong>{{ $project->name }}</strong></h2>
                 <button value="{{ $project->id }}" data-toggle="modal" data-target="#editProjectModal" type="button" class="btn btn-success" style="display: inline; float: right; width: 100px;">Edit</button>
                  <h4>{{ $project->type->name }}</h4>
                </div>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('warning'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('warning') }}
                        </div>
                    @endif

                    <p>{{ $project->description }}</p>

                    <hr>
                    <h6>Files:</h6>
                    @if ($project->files->isNotEmpty())
                        @foreach ($project->files as $file)
                        <button data-toggle="modal" data-target="#deleteFileModal" value="{{ $file->id }}" type="button" class="btn btn-light each-file">
                            <img src="{{ asset("/images/$file->name") }}" alt="{{ $file->name }}" class="img-thumbnail" style="height: 100px; width:100px;">
                        </button>
                        @endforeach
                        <button type="button" class="btn btn-light">
                            <form id="addFileForm" method="POST" action="/project/upload-files" enctype="multipart/form-data">
                                @csrf
                                <input hidden name="project_id" value="{{ $project->id }}">
                                <input name="attachment" type="file" id="addPhoto" style="display: none;" onchange="previewFile(this);">
                                <label for="addPhoto">
                                    <i class="material-icons" id="addPhotoIcon" style="font-size: 90px;">add_a_photo</i>
                                </label>
                            </form>
                        </button>
                    @else
                        <button type="button" class="btn btn-light">
                            <form id="addFileForm" method="POST" action="/project/upload-files" enctype="multipart/form-data">
                                @csrf
                                <input hidden name="project_id" value="{{ $project->id }}">
                                <input name="attachment" type="file" id="addPhoto" style="display: none;" onchange="previewFile(this);">
                                <label for="addPhoto">
                                    <i class="material-icons" id="addPhotoIcon" style="font-size: 90px;">add_a_photo</i>
                                </label>
                            </form>
                        </button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<div id="previewFileModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">File Upload</h5>
                <button type="button" onclick="clearFileInput();" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="fileUploadPreview" src="" alt="image-preview" style="width: 100%;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="uploadFile();">Save</button>
                <button type="button" class="btn btn-danger" onclick="clearFileInput();">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div id="deleteFileModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Project File</h5>
                <button type="button" data-dismiss="modal" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="deleteFile();">Delete</button>
                {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> --}}
            </div>
        </div>
    </div>
</div>


<div id="editProjectModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action={{ url('/projowner/edit') }} aria-label="{{ __('Edit Project Details') }}" enctype="multipart/form-data">
            @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Edit Project Details</h5>
                    <button type="button" data-dismiss="modal" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input hidden name="project_id" value="{{ $project->id }}">

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Project Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $project->name }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{_('Type')}}</label>

                        <div class="col-md-6">
                            <select required name="type" id="roleDropdown" class="form-control">
                                {{-- <option selected disabled>Select one</option> --}}
                                @foreach ($types as $type)
                                @if ($type->id == $project->type_id)
                                    <option selected value="{{ $type->id }}">{{ $type->name }}</option>
                                @else
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <textarea id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus>{{ $project->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('individual_javascript')

<script>
    $(window).on("load", function() {
        setTimeout(function() {
            $(".alert").remove();
        }, 5000);

        // SHOW INDIVIDUAL FLICK ON MODAL
        $('.each-file').click(function() {
            var file_id = $(this).val();

            $.get('/file/' + file_id,
                {
                    // id: flick_id
                },
                function(data, status) {
                    $('.modal-body').html(data);
                });
        });
    });

    // PREVIEW IMAGE UPON CREATE OR UPDATE
    function previewFile(input) {
        if (input.files && input.files[0]) {

            $('#previewFileModal').modal('show');
            var reader = new FileReader();

            reader.readAsDataURL(input.files[0]);

            reader.onloadend = function(e) {
                $('#fileUploadPreview').attr('src', e.target.result);
            }
        }
    }

    function clearFileInput() {
        $('#previewFileModal').modal('hide');
        $('#addFileForm').trigger('reset');
    }

    function uploadFile() {
        $('#addFileForm').submit();
    }

    function deleteFile() {
        $('#deleteFileForm').submit();
    }

</script>

@endsection
