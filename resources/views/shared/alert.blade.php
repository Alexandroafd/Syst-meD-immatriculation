@if (Session::has('success'))
                <div class="bg-success py-4 mb-4 rounded">
                    <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('success') }} </p>
                </div>
            @endif
        
            @if (Session::has('error'))
                <div class="bg-danger py-4 mb-4 rounded">
                    <p class="mb-0 pb-0 text-white">&nbsp; &nbsp;{{ Session::get('error') }} </p>
                </div>
            @endif