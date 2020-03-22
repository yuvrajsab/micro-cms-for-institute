@extends('layouts.app')

@section('content')

@include('layouts.partials.slider')

<div class="row no-gutters mt-2">
    <div class="col-8 bg-white px-4 py-3 mx-2">
        <article>
            The Department of Computer Science was established in the year 1981 with the objective of
            imparting
            quality education in the field of Computer Science. The Department has modern facilities for
            teaching, learning and research. The Department offers a wide array of research opportunities
            and
            programs of study at undergraduate and postgraduate level.
            The Department started 3-year Master of Computer Applications (MCA) programme in the year 1982,
            which was among the first such programmes in India.
            The Department started 2-year M.Sc. Computer Science programme in the year 2004 with the aim to
            develop core competence in Computer Science and prepare the students to carry out development
            work,
            as well as take up challenges in research.
            Besides these, the Department offers Doctor of Philosophy (Ph.D.) in Computer Science aimed at
            producing quality researchers and high-impact interdisciplinary research.
            Undergraduate CBCS programmes - B.Sc. (H) Computer Science, B.Sc. Physical / Mathematical
            Sciences
            and B.A. Programme (Discipline Courses in Computer Applications) are offered by the University
            of
            Delhi through its constituent colleges.
            With rapidly evolving technology and the continuous need for innovation, the Department has
            produced
            quality professionals holding important positions in the IT industry in India and abroad.
        </article>
    </div>
    <div class="col bg-white mx-2 p-3">
        <div class="card rounded-0">
            @foreach ($posts as $post)
            <div>
                <h6 class="font-weight-bold">{{ $post->title }}</h6>
            </div>
            @endforeach
            <p class="mb-0 text-right">
                <a href="{{ route('posts') }}">View all</a>
            </p>
        </div>
    </div>
</div>

@endsection