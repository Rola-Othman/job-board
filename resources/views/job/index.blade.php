<div>
   <h1>Hello World From Job Index</h1>

   @foreach ($jobs as $job)
         <div>
              <h2>{{ $job['title'] }}</h2>
              <p>{{ $job['description'] }}</p>
         </div>
   @endforeach
</div>
