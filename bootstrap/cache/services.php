<?php return array (
  'providers' => 
  array (
    0 => 'Laravel\\Breeze\\BreezeServiceProvider',
    1 => 'Laravel\\Pail\\PailServiceProvider',
    2 => 'Laravel\\Reverb\\ApplicationManagerServiceProvider',
    3 => 'Laravel\\Reverb\\ReverbServiceProvider',
    4 => 'Laravel\\Sail\\SailServiceProvider',
    5 => 'Laravel\\Tinker\\TinkerServiceProvider',
    6 => 'Chatify\\ChatifyServiceProvider',
    7 => 'Carbon\\Laravel\\ServiceProvider',
    8 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    9 => 'Termwind\\Laravel\\TermwindServiceProvider',
    10 => 'App\\Providers\\BroadcastServiceProvider',
    11 => 'App\\Providers\\AppServiceProvider',
    12 => 'App\\Providers\\BroadcastServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Laravel\\Pail\\PailServiceProvider',
    1 => 'Laravel\\Reverb\\ReverbServiceProvider',
    2 => 'Chatify\\ChatifyServiceProvider',
    3 => 'Carbon\\Laravel\\ServiceProvider',
    4 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    5 => 'Termwind\\Laravel\\TermwindServiceProvider',
    6 => 'App\\Providers\\BroadcastServiceProvider',
    7 => 'App\\Providers\\AppServiceProvider',
    8 => 'App\\Providers\\BroadcastServiceProvider',
  ),
  'deferred' => 
  array (
    'Laravel\\Breeze\\Console\\InstallCommand' => 'Laravel\\Breeze\\BreezeServiceProvider',
    'Laravel\\Reverb\\ApplicationManager' => 'Laravel\\Reverb\\ApplicationManagerServiceProvider',
    'Laravel\\Reverb\\Contracts\\ApplicationProvider' => 'Laravel\\Reverb\\ApplicationManagerServiceProvider',
    'Laravel\\Sail\\Console\\InstallCommand' => 'Laravel\\Sail\\SailServiceProvider',
    'Laravel\\Sail\\Console\\PublishCommand' => 'Laravel\\Sail\\SailServiceProvider',
    'command.tinker' => 'Laravel\\Tinker\\TinkerServiceProvider',
  ),
  'when' => 
  array (
    'Laravel\\Breeze\\BreezeServiceProvider' => 
    array (
    ),
    'Laravel\\Reverb\\ApplicationManagerServiceProvider' => 
    array (
    ),
    'Laravel\\Sail\\SailServiceProvider' => 
    array (
    ),
    'Laravel\\Tinker\\TinkerServiceProvider' => 
    array (
    ),
  ),
);