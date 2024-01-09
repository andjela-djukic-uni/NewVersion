@extends('layout')
@section('content')

    <div class="heading" style="background:url(img/skale.jpg) no-repeat">
<h1>gallery</h1>
</div>


    <section class="project-package">
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="/img/localcom.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Helping local communities</h3>
                    
                    <a href="helpinglocal.php" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/org.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Supporting local organizations</h3>
                    
                    <a href="projects.php" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/her.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Preserving istrian heritage</h3>
                    
                    <a href="projects.php" class="btn">See more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="/img/edu.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Education</h3>
                    
                    <a href="projects.php" class="btn">See more</a>
                </div>
            </div>
        </div>
    </section>


    @endsection