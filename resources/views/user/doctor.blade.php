<div class="container mt-5">
    <h1 class="text-center mb-5">Our Doctors</h1>

    <div class="owl-carousel" id="doctorSlideshow">
        @foreach ($doctors as $doctor)
            <div class="item">
                <div class="card card-doctor" style="max-width:310px!important;">
                    <div class="card-header">
                        <img src="doctorimage/{{ $doctor->image }}" alt="{{ $doctor->name }}" class="img-fluid" style="height: 200px">
                        <div class="meta">
                            <a href="#"><span class="fas fa-phone-alt"></span></a>
                            <a href="#"><span class="fab fa-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $doctor->name }}</h5>
                        <p class="card-text text-muted">{{ $doctor->speciality }}</p>
                        <a href="{{ url('appoint', $doctor->id) }}" class="btn btn-outline-primary btn-sm">Appoint</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
