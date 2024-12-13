@include('livewire.header')
    <div class="content-body">
        <div class="container-fluid">

        <div class="card-header">
            <h4 class="text-center mb-4">
                @if(session('success'))
                    <span style="color: green;">{{ session('success') }}</span>
                @endif
                
            </h4>
        </div>
            

        </div>
    </div>  
@include('livewire.footer')    
