    @extends('layout')
    @section('content')
    <div class="heading" style="background:url(img/Panorama.jpg) no-repeat">
<h1>projects</h1>
</div>

    <section class="project-package">
        <div class="box-container">

            @foreach($projects as $key => $project)

            <div class="box">
                <div class="image">
                    <img src={{$project->pictureUrl}} alt="">
                </div>
                <div class="content">
                    <h3>{{$project->title}}</h3>
                    
                    <a href="supporting" class="btn">Read more</a>
                </div>
            </div>

            @endforeach
            
        </div>
    </section>

    @endsection