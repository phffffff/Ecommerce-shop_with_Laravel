
    <div id="toastsContainerTopRight" class="toasts-top-right fixed w-25">
        <div class="toast {{$class}} fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">{{ucfirst($title)}}</strong>
                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">{{$msg}}</div>
        </div>
    </div>


