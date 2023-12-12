<div>
    <h1>User Sourabh</h1>
    @foreach($names as $user)
    <h2>   @livewire('users-list',['user'=>$user])</h2>
    @endforeach
    <h2>@livewire('users-list', ['user'=>"other name"])</h2>
</div>
