 <!doctype html>
 <html lang="en">
   <head>
     <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     @livewireStyles
    </head>
   <body>
   <h1>hii {{$user}}</h1>
<h1>{{URL::current()}}</h1>

<h1>{{URL::full()}}</h1>
<a href="{{URl::to('/home')}}">home</a>
@livewire('count')
@csrf
<h3>data passed </h3>
@livewire('searchbox')
@livewire('profile')
@livewire('profile')

@livewireScripts 
   </body>
 </html>
 