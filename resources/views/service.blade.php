<!DOCTYPE html>
<html lang="ar">

@include('layouts.head')

<style>
    .header {
        box-shadow: inset 1px 1px 2px #00000000, 0px 1px 5px #0000004d;
    }
    .services{
        padding: 1rem;
    }
    .services ul#pills-tab {
        display: flex;
        justify-content: center;
        padding: 0.5rem 0;
    }

    .btn-tab {
        cursor: pointer;
        width: 300px !important;
        border: 2px solid var(--red) !important;
    }
    .btn-tab:hover {
        background-color: var(--red);
        color: #ffffff
    }
    li.nav-item {
        margin: 0.5rem 1rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff !important;
        background-color: var(--red);
        border: 2px solid var(--red) !important;
    }

    .upload {
        display: inline-block;
        width: 100%;
        padding: 120px 0 0 0;
        height: 100px;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        background: url(https://cdn1.iconfinder.com/data/icons/hawcons/32/698394-icon-130-cloud-upload-512.png) center center no-repeat #ffffff;
        border-radius: 0;
        background-size: 60px 60px;
        border: 2px dashed;
    }

    .upload::after {
        content: 'تحميل الملفات';
        text-align: center;
        color: #000;
        position: absolute;
        top: 30%;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    label {
        float: right;
    }
    .btn-save{
        width: 200px;
    text-align: center;
    border: 1px solid;
    background-color: var(--red);
    color: #fff;
    margin: 5px;
    }
    .btn-save:hover{
        background-color: #fff;
        color: var(--red);
    }
    .w-0{
        width: 0;
    }
    .instructions {
    text-align: right!important;
    padding: 1rem 2rem;
}
</style>

<body dir="rtl">
    @include('layouts.header')

    <div class="container my-4">
        <h3 class="text-center p-4">
            نقل ملكية مركبة
            
            <i class="fas fa-handshake" aria-hidden="true"></i>
            <i class="fas fa-car"></i>

        </h3>
        <div class="services m-2" dir="rtl">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn-tab nav-link active" id="pills-home-tab" data-toggle="pill"
                        data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true"> 
                        <i class="fas fa-users"></i>
                        أفراد
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn-tab nav-link" id="pills-profile-tab" data-toggle="pill"
                        data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">
                        <i class="fas fa-building"></i>
                        شركات
                    </button>
                </li>
            </ul>

            <!-- tab content -->
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row m-2" dir="rtl">
                       
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sellers-mobile">
                                    <i class="fas fa-phone"></i>
                                    رقم جوال البائع
                                </label>
                                <input type="number" class="form-control" id="sellers-mobile"
                                    aria-describedby="sellersMobile">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sellers-mobile">
                                    <i class="fas fa-phone"></i>
                                    رقم جوال المشتري
                                </label>
                                <input type="number" class="form-control" id="sellers-mobile"
                                    aria-describedby="sellersMobile">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="sellers-mobile"> 
                                <i class="fas fa-file"></i>
                                المستندات 
                            </label>
                            <div class="file-upload" style="cursor: pointer">
                                <input name="files" multiple type="file" id="upload" class="upload" style="cursor: pointer">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="instructions">
                                <h5>test title</h5>
                                <li class="w-0">test 1</li>
                                <li class="w-0">test 2</li>
                            </ul>
                        </div>
                    </div>
                        <button class="btn btn-save">حفظ</button>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    tab2
                </div>
            </div>
        </div>
    </div>



    @include('layouts.footer')

    <script src="/frontend/js/bootstrap-notify.min.js"></script>
    <script src="/frontend/js/select2.min.js"></script>
    <script src="/frontend/js/lazysizes.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/lightbox.js"></script>
    <script src="/frontend/js/select2.min.js"></script>
    <script src="/frontend/js/main.js"></script>

</html>