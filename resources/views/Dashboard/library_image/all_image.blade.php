@extends('Dashboard.test')
@section('page')



    <section class="content">
        <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="timeline">

            <div>
                <i class="fa fa-camera bg-purple"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                    <div class="timeline-body">
                                    <div>
                                    <ul id="images">

                                        @foreach($all_image as $image )
                                            <div class="col-md-2">
                                                <li>
                                                    <img class="img-responsive img-thumbnail" src="{{asset($image->path)}}" alt="...">
                                                </li>

                                                </div>
                                            <div></div>
                                    @endforeach
                                    </ul>
                                    </div>
                                </div>
                            </div>

            </div>

                </div>
            </div>

        </div>
        </div>
    </section>



    <script>
        const gallery = new Viewer(document.getElementById('images'));

    </script>

@endsection