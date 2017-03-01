<div class="panel panel-default">
    <div class="panel-body">
        <div class="media">
            <div class="media-left">
                <img src="{{ $user->getAvatarUrl(50) }}" class="img-rounded media-object" alt="{{ $user->getName() }}">
            </div>
            <div class="media-body">
                <a href="#" class="aideus-desc">{{ $user->getName() }}</a>
                @if ($user->location)
                  <div>{{ $user->location }}</div>
                @endif
            </div>
        </div>
    </div>
</div>
