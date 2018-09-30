<form action={{ url('/file/delete')}} method="POST" id="deleteFileForm">
    @csrf
    <img src="{{ asset("/images/$file->name") }}" alt="{{ $file->name }}" style="width: 100%;">
    <input name="file_id" type="number" hidden value="{{ $file->id }}">
</form>