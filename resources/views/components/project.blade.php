@props(['projects'])


<section class="project-package">
    <h1 class="heading-title">Projects</h1>
    <div class="box-container">

        @foreach($projects as $key => $project)

        @if($key < 3)
        <div class="box">
            <div class="image">
                <img src={{$project->pictureUrl}} alt="">
            </div>
            <div class="content">
                <h3>{{$project->title}}</h3>
                
                <a href="supporting" class="btn">Read more</a>
            </div>
        </div>

        @endif
        @endforeach

        
    </div>
</section>

