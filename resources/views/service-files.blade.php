<div class="list-group">
    <button type="button" class="list-group-item list-group-item-action active">
     الملفات المتعلقة بالطلب
    </button>
    @foreach ($files as $item)
    <button type="button" class="list-group-item list-group-item-action">
        <button type="button" class="btn btn-outline-primary">
            تحميل ملف رقم
            {{ $loop->index + 1 }}
            <i class="fa fa-download"></i>
        </button>
    </button>
    @endforeach
    
  </div>