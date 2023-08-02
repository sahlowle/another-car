<div class="list-group">
    <button type="button" class="list-group-item list-group-item-action active">
     الملفات المتعلقة بالطلب
    </button>
    @foreach ($files as $item)
    {{-- <button type="button" class="list-group-item list-group-item-action">
        <a type="button" class="btn btn-outline-primary">
            تحميل ملف 
            {{ $item->file_name }}
            <i class="fa fa-download"></i>
        </a>
    </button> --}}
    <a href="{{ $item->full_path }}" class="btn btn-outline-primary btn-lg m-2" download="{{ $item->file_name }}" >
        تحميل ملف 
        {{ $item->file_name }}
        <i class="fa fa-download"></i>
    </a>
    @endforeach
    
  </div>